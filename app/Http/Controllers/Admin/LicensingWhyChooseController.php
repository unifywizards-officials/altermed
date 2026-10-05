<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LicensingWhyChoose;
use App\Models\LicensingWhyChooseItem;
use Illuminate\Http\Request;

class LicensingWhyChooseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = LicensingWhyChoose::first();
        if (!$item) {
            $item = LicensingWhyChoose::create([
                'heading' => 'Why Choose AlterMed RCM for Licensing?',
                'description' => 'AlterMed RCM makes the complex licensing process effortless and handles the paperwork seamlessly. We ensure accuracy and compliance in every step of the process. Even after the licensing process is complete, our team stays on top of renewals and regulatory requirements.',
            ]);
        }
        return redirect()->route('admin.licensing-why-choose.edit', $item->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LicensingWhyChoose $licensingWhyChoose)
    {
        $items = $licensingWhyChoose->items;
        return view('admin.pages.licensing-why-choose.edit', compact('licensingWhyChoose', 'items'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LicensingWhyChoose $licensingWhyChoose)
    {
        $validated = $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
            'items' => 'array',
            'items.*.name' => 'required|string|max:255',
            'items.*.short_description' => 'required|string',
        ]);

        $licensingWhyChoose->update([
            'heading' => $validated['heading'],
            'description' => $validated['description'],
        ]);

        // Handle items
        $existingIds = $licensingWhyChoose->items->pluck('id')->toArray();
        $updatedIds = [];

        if (isset($validated['items'])) {
            foreach ($validated['items'] as $itemData) {
                if (isset($itemData['id'])) {
                    // Update existing
                    $item = LicensingWhyChooseItem::find($itemData['id']);
                    if ($item) {
                        $item->update([
                            'name' => $itemData['name'],
                            'short_description' => $itemData['short_description'],
                        ]);
                        $updatedIds[] = $item->id;
                    }
                } else {
                    // Create new
                    $newItem = $licensingWhyChoose->items()->create([
                        'name' => $itemData['name'],
                        'short_description' => $itemData['short_description'],
                    ]);
                    $updatedIds[] = $newItem->id;
                }
            }
        }

        // Delete removed items
        $toDelete = array_diff($existingIds, $updatedIds);
        LicensingWhyChooseItem::whereIn('id', $toDelete)->delete();

        return redirect()->route('admin.licensing-why-choose.edit', $licensingWhyChoose->id)->with('success', 'Licensing Why Choose updated successfully.');
    }
}
