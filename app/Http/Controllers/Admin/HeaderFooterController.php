<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeaderFooter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderFooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $headerFooter = HeaderFooter::first();
        if (!$headerFooter) {
            $headerFooter = HeaderFooter::create([]);
        }
        return redirect()->route('admin.header-footer.edit', $headerFooter->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $headerFooter = HeaderFooter::findOrFail($id);
        return view('admin.header-footer.edit', compact('headerFooter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'header_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'footer_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'footer_logo_content' => 'nullable|string|max:1000',
            'newsletter_content' => 'nullable|string|max:1000',
            'instagram_images' => 'nullable|array',
            'instagram_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'remove_images' => 'nullable|string',
        ]);

        $headerFooter = HeaderFooter::findOrFail($id);

        $data = $request->only(['footer_logo_content', 'newsletter_content']);

        // Handle header_logo upload
        if ($request->hasFile('header_logo')) {
            if ($headerFooter->header_logo && Storage::exists($headerFooter->header_logo)) {
                Storage::delete($headerFooter->header_logo);
            }
            $data['header_logo'] = $request->file('header_logo')->store('logos', 'public');
        }

        // Handle footer_logo upload
        if ($request->hasFile('footer_logo')) {
            if ($headerFooter->footer_logo && Storage::exists($headerFooter->footer_logo)) {
                Storage::delete($headerFooter->footer_logo);
            }
            $data['footer_logo'] = $request->file('footer_logo')->store('logos', 'public');
        }

        // Handle instagram_images (multiple)
        $currentImages = $headerFooter->instagram_images ?? [];

        // Handle image removal
        if ($request->filled('remove_images')) {
            $imagesToRemove = json_decode($request->remove_images, true);
            if (is_array($imagesToRemove)) {
                foreach ($imagesToRemove as $imagePath) {
                    if (in_array($imagePath, $currentImages)) {
                        // Remove from array
                        $currentImages = array_diff($currentImages, [$imagePath]);
                        // Delete file from storage
                        if (Storage::disk('public')->exists($imagePath)) {
                            Storage::disk('public')->delete($imagePath);
                        }
                    }
                }
            }
        }

        // Process new uploaded files
        $newImages = [];
        if ($request->hasFile('instagram_images')) {
            $uploadedFiles = $request->file('instagram_images');
            foreach ($uploadedFiles as $file) {
                if ($file && $file->isValid()) {
                    $newImages[] = $file->store('instagram', 'public');
                }
            }
        }

        // Combine current and new images
        $allImages = array_merge($currentImages, $newImages);
        $data['instagram_images'] = array_values($allImages); // Re-index array

        $headerFooter->update($data);

        return redirect()->route('admin.header-footer.edit', $id)->with('success', 'Updated successfully');
    }
}
