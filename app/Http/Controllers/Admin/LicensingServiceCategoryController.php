<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LicensingService;
use App\Models\LicensingServiceCategory;
use App\Models\LicensingServiceItem;
use Illuminate\Http\Request;

class LicensingServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = LicensingService::first();
        $categories = $service ? $service->categories : collect();
        return view('admin.pages.licensing-service-categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $service = LicensingService::first();
        return view('admin.pages.licensing-service-categories.create', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:licensing_services,id',
            'name' => 'required|string|max:255',
            'short_description' => 'required|string',
        ]);

        LicensingServiceCategory::create($validated);

        return redirect()->route('admin.licensing-service-categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LicensingServiceCategory $licensingServiceCategory)
    {
        $items = $licensingServiceCategory->items;
        return view('admin.pages.licensing-service-categories.edit', compact('licensingServiceCategory', 'items'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LicensingServiceCategory $licensingServiceCategory)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'required|string',
            'items' => 'array',
            'items.*.image' => 'nullable|string',
            'items.*.heading' => 'required|string|max:255',
            'items.*.short_description' => 'required|string',
        ]);

        $licensingServiceCategory->update([
            'name' => $validated['name'],
            'short_description' => $validated['short_description'],
        ]);

        // Handle items
        $existingIds = $licensingServiceCategory->items->pluck('id')->toArray();
        $updatedIds = [];

        if (isset($validated['items'])) {
            foreach ($validated['items'] as $itemData) {
                if (isset($itemData['id'])) {
                    // Update existing
                    $item = LicensingServiceItem::find($itemData['id']);
                    if ($item) {
                        $item->update([
                            'image' => $itemData['image'] ?? '',
                            'heading' => $itemData['heading'],
                            'short_description' => $itemData['short_description'],
                        ]);
                        $updatedIds[] = $item->id;
                    }
                } else {
                    // Create new
                    $newItem = $licensingServiceCategory->items()->create([
                        'image' => $itemData['image'] ?? '',
                        'heading' => $itemData['heading'],
                        'short_description' => $itemData['short_description'],
                    ]);
                    $updatedIds[] = $newItem->id;
                }
            }
        }

        // Delete removed items
        $toDelete = array_diff($existingIds, $updatedIds);
        LicensingServiceItem::whereIn('id', $toDelete)->delete();

        return redirect()->route('admin.licensing-service-categories.edit', $licensingServiceCategory->id)->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LicensingServiceCategory $licensingServiceCategory)
    {
        $licensingServiceCategory->delete();
        return redirect()->route('admin.licensing-service-categories.index')->with('success', 'Category deleted successfully.');
    }
}
