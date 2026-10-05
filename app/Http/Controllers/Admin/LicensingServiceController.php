<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LicensingService;
use App\Models\LicensingServiceCategory;
use App\Models\LicensingServiceItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LicensingServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = LicensingService::first();
        if (!$item) {
            $item = LicensingService::create([
                'heading' => 'Our Licensing Services',
                'description' => 'AlterMed RCM offers a range of licensing services covering the needs of individual practitioners and medical facilities. Our services are comprehensive, fast, and end-to-end designed to accelerate your operational process. Here’s the list of our services:',
            ]);
        }
        return redirect()->route('admin.licensing-service.edit', $item->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LicensingService $licensingService)
    {
        $categories = $licensingService->categories()->with('items')->get();
        return view('admin.pages.licensing-service.edit', compact('licensingService', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
 public function update(Request $request, LicensingService $licensingService)
{
    $validated = $request->validate([
        'heading' => 'required|string|max:255',
        'description' => 'required|string',
        'meta_title' => 'nullable|string|max:255',
        'meta_keywords' => 'nullable|string',
        'meta_description' => 'nullable|string|max:500',

        'categories' => 'array',
        'categories.*.id' => 'nullable|integer',
        'categories.*.name' => 'nullable|string|max:255',
        'categories.*.short_description' => 'nullable|string',

        'categories.*.items' => 'array',
        'categories.*.items.*.id' => 'nullable|integer',
        'categories.*.items.*.heading' => 'nullable|string|max:255',
        'categories.*.items.*.short_description' => 'nullable|string',
        'categories.*.items.*.image' => 'nullable|image',
    ]);

    // Update main service
    $licensingService->update([
        'heading' => $validated['heading'],
        'description' => $validated['description'],
        'meta_title' => $validated['meta_title'],
        'meta_keywords' => $validated['meta_keywords'],
        'meta_description' => $validated['meta_description'],
    ]);

    if (isset($validated['categories'])) {
        foreach ($validated['categories'] as $categoryIndex => $categoryData) {

            /* -----------------------------------
               CATEGORY CREATE / UPDATE
            ----------------------------------- */
            if (!empty($categoryData['id'])) {
                // Update ONLY this category
                $category = LicensingServiceCategory::find($categoryData['id']);

                if ($category) {
                    $category->update([
                        'name' => $categoryData['name'],
                        'short_description' => $categoryData['short_description'],
                    ]);
                }
            } else {
                // Create new category
                $category = $licensingService->categories()->create([
                    'name' => $categoryData['name'],
                    'short_description' => $categoryData['short_description'],
                ]);
            }

            /* -----------------------------------
               ITEMS UPDATE WITHOUT DELETING OTHERS
            ----------------------------------- */
            if (isset($categoryData['items'])) {
                foreach ($categoryData['items'] as $itemData) {

                    // UPDATE EXISTING ITEM
                    if (!empty($itemData['id'])) {
                        $item = $category->items()->find($itemData['id']);

                        if ($item) {
                            $item->update([
                                'heading' => $itemData['heading'],
                                'short_description' => $itemData['short_description'],
                            ]);

                            // If image provided → replace
                            if (isset($itemData['image'])) {
                                $path = $itemData['image']->store('licensing_items', 'public');
                                $item->update(['image' => $path]);
                            }
                        }
                    }

                    // CREATE NEW ITEM
                    else {
                        $newItemData = [
                            'heading' => $itemData['heading'],
                            'short_description' => $itemData['short_description'],
                        ];

                        if (isset($itemData['image'])) {
                            $newItemData['image'] = $itemData['image']->store('licensing_items', 'public');
                        }

                        $category->items()->create($newItemData);
                    }
                }
            }
        }
    }

    return redirect()
        ->route('admin.licensing-service.edit', $licensingService->id)
        ->with('success', 'Licensing Service updated successfully.');
}


    public function destroyCategory(LicensingServiceCategory $category)
    {
        // Delete all items in the category first
        foreach ($category->items as $item) {
            if ($item->image) {
                Storage::disk('public')->delete($item->image);
            }
        }
        $category->items()->delete();
        $category->delete();

        return response()->json(['success' => true]);
    }

    public function destroyItem(LicensingServiceItem $item)
    {
        if ($item->image) {
            Storage::disk('public')->delete($item->image);
        }
        $item->delete();

        return response()->json(['success' => true]);
    }

    private function updateCategoryItems(LicensingServiceCategory $category, array $itemsData, Request $request, $categoryIndex)
    {
        $existingItemIds = $category->items->pluck('id')->toArray();
        $updatedItemIds = [];

        foreach ($itemsData as $itemIndex => $itemData) {
            if (isset($itemData['id'])) {
                // Update existing item
                $item = LicensingServiceItem::find($itemData['id']);
                if ($item) {
                    $updateData = [
                        'heading' => $itemData['heading'],
                        'short_description' => $itemData['short_description'],
                    ];

                    // Handle file upload for existing items - only update if a file is actually uploaded
                    $fileKey = "categories.{$categoryIndex}.items.{$itemIndex}.image";
                    if ($request->hasFile($fileKey) && $request->file($fileKey)->isValid()) {
                        $file = $request->file($fileKey);
                        $imagePath = $file->store('licensing-service-items', 'public');

                        if ($imagePath) {
                            // Delete old image if exists
                            if ($item->image) {
                                Storage::disk('public')->delete($item->image);
                            }
                            $updateData['image'] = $imagePath;
                        }
                        // If store failed, don't update image - existing image is preserved
                    }
                    // If no file uploaded, don't include 'image' in updateData - existing image is preserved

                    $item->update($updateData);
                    $updatedItemIds[] = $item->id;
                }
            } else {
                // Create new item
                $imagePath = null;

                // Handle file upload for new items
                $fileKey = "categories.{$categoryIndex}.items.{$itemIndex}.image";
                if ($request->hasFile($fileKey) && $request->file($fileKey)->isValid()) {
                    $file = $request->file($fileKey);
                    $imagePath = $file->store('licensing-service-items', 'public');
                    if (!$imagePath) {
                        $imagePath = null;
                    }
                } else {
                    $imagePath = null;
                }

                $newItem = $category->items()->create([
                    'image' => $imagePath,
                    'heading' => $itemData['heading'],
                    'short_description' => $itemData['short_description'],
                ]);
                $updatedItemIds[] = $newItem->id;
            }
        }

        // Delete removed items
        $toDeleteItems = array_diff($existingItemIds, $updatedItemIds);
        $itemsToDelete = LicensingServiceItem::whereIn('id', $toDeleteItems)->get();
        foreach ($itemsToDelete as $item) {
            if ($item->image) {
                Storage::disk('public')->delete($item->image);
            }
        }
        LicensingServiceItem::whereIn('id', $toDeleteItems)->delete();
    }
}
