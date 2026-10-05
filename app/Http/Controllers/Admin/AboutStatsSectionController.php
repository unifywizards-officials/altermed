<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutStatsSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutStatsSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutStatsSection = AboutStatsSection::first();
        return view('admin.pages.about-stats-section.index', compact('aboutStatsSection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.about-stats-section.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'main_title' => 'nullable|string|max:255',
            'main_title_highlight' => 'nullable|string|max:255',
            'stats_items' => 'nullable|array',
            'bottom_title' => 'nullable|string|max:255',
            'bottom_subtitle' => 'nullable|string|max:255',
            'bottom_images' => 'nullable|array',
            'bottom_images.*' => 'image|mimes:jpg,jpeg,png,webp,gif|max:5120',
            'bottom_description' => 'nullable|string',
            'right_content' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|string|max:255',
        ]);

        $data = $request->except(['bottom_images']);

        // Handle stats items images
        $statsItems = [];
        $statsData = $request->input('stats_items', []);

        for ($i = 0; $i < 6; $i++) {
            $statsItems[$i] = [
                'value' => $statsData[$i]['value'] ?? '',
                'title' => $statsData[$i]['title'] ?? '',
                'description' => $statsData[$i]['description'] ?? '',
                'image' => null
            ];

            // Handle image upload for this index
            if ($request->hasFile("stats_items.{$i}.image")) {
                $image = $request->file("stats_items.{$i}.image");
                if ($image && $image->isValid()) {
                    $path = $image->store('about-stats-section/stats', 'public');
                    $statsItems[$i]['image'] = $path;
                }
            }
        }

        $data['stats_items'] = array_values($statsItems);

        // Handle bottom images upload
        if ($request->hasFile('bottom_images')) {
            $imagePaths = [];
            foreach ($request->file('bottom_images') as $image) {
                $path = $image->store('about-stats-section', 'public');
                $imagePaths[] = $path;
            }
            $data['bottom_images'] = $imagePaths;
        }

        AboutStatsSection::create($data);

        return redirect()->route('admin.about-stats-section.index')->with('success', 'About Stats Section created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aboutStatsSection = AboutStatsSection::findOrFail($id);
        return view('admin.pages.about-stats-section.edit', compact('aboutStatsSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aboutStatsSection = AboutStatsSection::findOrFail($id);

        $request->validate([
            'main_title' => 'nullable|string|max:255',
            'main_title_highlight' => 'nullable|string|max:255',
            'stats_items' => 'nullable|array',
            'bottom_title' => 'nullable|string|max:255',
            'bottom_subtitle' => 'nullable|string|max:255',
            'bottom_images' => 'nullable|array',
            'bottom_images.*' => 'image|mimes:jpg,jpeg,png,webp,gif|max:5120',
            'bottom_description' => 'nullable|string',
            'right_content' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|string|max:255',
        ]);

        $data = $request->except(['bottom_images']);

        // Handle stats items images
        $statsItems = [];
        $statsData = $request->input('stats_items', []);

        for ($i = 0; $i < 6; $i++) {
            $statsItems[$i] = [
                'value' => $statsData[$i]['value'] ?? $aboutStatsSection->stats_items[$i]['value'] ?? '',
                'title' => $statsData[$i]['title'] ?? $aboutStatsSection->stats_items[$i]['title'] ?? '',
                'description' => $statsData[$i]['description'] ?? $aboutStatsSection->stats_items[$i]['description'] ?? '',
                'image' => $aboutStatsSection->stats_items[$i]['image'] ?? null
            ];

            // Handle image upload for this index
            if ($request->hasFile("stats_items.{$i}.image")) {
                $image = $request->file("stats_items.{$i}.image");
                if ($image && $image->isValid()) {
                    // Delete old image if exists
                    if (isset($aboutStatsSection->stats_items[$i]['image']) && $aboutStatsSection->stats_items[$i]['image']) {
                        Storage::disk('public')->delete($aboutStatsSection->stats_items[$i]['image']);
                    }
                    $path = $image->store('about-stats-section/stats', 'public');
                    $statsItems[$i]['image'] = $path;
                }
            }
        }

        $data['stats_items'] = array_values($statsItems);

        // Handle bottom images upload (replace existing)
        if ($request->hasFile('bottom_images')) {
            // Delete old images
            if ($aboutStatsSection->bottom_images) {
                foreach ($aboutStatsSection->bottom_images as $oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }

            $imagePaths = [];
            foreach ($request->file('bottom_images') as $image) {
                $path = $image->store('about-stats-section', 'public');
                $imagePaths[] = $path;
            }
            $data['bottom_images'] = $imagePaths;
        }

        $aboutStatsSection->update($data);

        return redirect()->route('admin.about-stats-section.index')->with('success', 'About Stats Section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aboutStatsSection = AboutStatsSection::findOrFail($id);

        // Delete associated images
        if ($aboutStatsSection->bottom_images) {
            foreach ($aboutStatsSection->bottom_images as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        $aboutStatsSection->delete();

        return redirect()->route('admin.about-stats-section.index')->with('success', 'About Stats Section deleted successfully.');
    }
}
