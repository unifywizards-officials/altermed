<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutSection;

class AboutSectionController extends Controller
{
    public function edit(AboutSection $about_section)
{
    return view('admin.pages.about_section.edit', compact('about_section'));
}

public function update(Request $request, $id)
{
    $about_section = AboutSection::findOrFail($id);
 
    // Sirf title aur description validate honge
    $validated = $request->validate([
        'title'       => 'required|string|max:255',
        'description' => 'required|string',
    ]);
 
    // Sabhi input le lo bina validation ke (except _token, _method)
    $data = $request->except(['_token', '_method']);
 
    // Images handle karo
    foreach (['image_one', 'image_two', 'arrow_image'] as $field) {
        if ($request->hasFile($field)) {
            $data[$field] = $request->file($field)->store('about', 'public');
        }
    }
 
    // Convert list_items into structured array
    if ($request->has('list_items')) {
        $list_items = [];
        $icons = $request->input('list_items.icon', []);
        $titles = $request->input('list_items.title', []);
        $descriptions = $request->input('list_items.description', []);

        foreach ($icons as $index => $icon) {
            $item = [
                'icon' => $icon,
                'title' => $titles[$index] ?? '',
                'description' => $descriptions[$index] ?? '',
            ];

            // Handle image upload for this item
            $imageField = 'list_items_image_' . $index;
            if ($request->hasFile($imageField)) {
                $item['image'] = $request->file($imageField)->store('about/list-items', 'public');
            } elseif (isset($about_section->list_items[$index]['image'])) {
                // Keep existing image if not uploading new one
                $item['image'] = $about_section->list_items[$index]['image'];
            }

            $list_items[] = $item;
        }

        $data['list_items'] = $list_items;
    }
 
    // Update DB
    $about_section->update($data);
 
    return redirect()->route('admin.about_section.edit', $about_section->id)
                     ->with('success', 'About Section updated successfully!');
}


// About page funcationality


public function index(AboutSection $about_page)
{
    return view('admin.pages.about_page.index', compact('about_page'));
}



public function updateAboutPage(Request $request, $id)
{
    $about_page = AboutSection::findOrFail($id);

    // Validation
    $validated = $request->validate([
        'about_banner_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048', // ✅ banner image validation
        'about_title'        => 'required|string|max:255',
        'title'              => 'required|string|max:255',
        'description'        => 'required|string',
        'meta_title'         => 'required|string|max:255',
        'meta_keywords'      => 'required|string|max:255',
        'meta_description'   => 'required|string|max:255',
    ]);

    // Collect all inputs except token + method
    $data = $request->except(['_token', '_method']);

    // ✅ Handle Banner Image
    if ($request->hasFile('about_banner_image')) {
        $data['about_banner_image'] = $request->file('about_banner_image')->store('about/banner', 'public');
    }

    // Handle Other Images
    foreach (['image_one', 'image_two', 'arrow_image'] as $field) {
        if ($request->hasFile($field)) {
            $data[$field] = $request->file($field)->store('about', 'public');
        }
    }

    // Convert CTA into structured array and save into `about_page_cta`
    if ($request->has('cta')) {
        $cta = [];
        $icons        = $request->input('cta.icon', []);
        $headings     = $request->input('cta.heading', []);
        $button_texts = $request->input('cta.button_text', []);
        $button_links = $request->input('cta.button_link', []);

        foreach ($icons as $index => $icon) {
            $cta[] = [
                'icon'        => $icon,
                'heading'     => $headings[$index] ?? '',
                'button_text' => $button_texts[$index] ?? '',
                'button_link' => $button_links[$index] ?? '',
            ];
        }

        // 🔑 Save to correct column
        $data['about_page_cta'] = $cta;
    }

    // Convert list_items into structured array
    if ($request->has('list_items')) {
        $list_items = [];
        $icons = $request->input('list_items.icon', []);
        $titles = $request->input('list_items.title', []);
        $descriptions = $request->input('list_items.description', []);

        foreach ($icons as $index => $icon) {
            $item = [
                'icon' => $icon,
                'title' => $titles[$index] ?? '',
                'description' => $descriptions[$index] ?? '',
            ];

            // Handle image upload for this item
            $imageField = 'list_items_image_' . $index;
            if ($request->hasFile($imageField)) {
                $item['image'] = $request->file($imageField)->store('about/list-items', 'public');
            } elseif (isset($about_section->list_items[$index]['image'])) {
                // Keep existing image if not uploading new one
                $item['image'] = $about_section->list_items[$index]['image'];
            }

            $list_items[] = $item;
        }

        $data['list_items'] = $list_items;
    }

    // Update DB
    $about_page->update($data);

    // Redirect back with parameter
    return redirect()->route('admin.about_page.index', $about_page->id)
                     ->with('success', 'About Page updated successfully!');
}



    public function crmedit(AboutSection $about_altermed_rcm)
{
    return view('admin.pages.about_altermed_rcm.edit', compact('about_altermed_rcm'));
}

public function crmupdate(Request $request, $id)
{
    $about_altermed_rcm = AboutSection::findOrFail($id);
 
    // Sirf title aur description validate honge
    $validated = $request->validate([
        'title'       => 'required|string|max:255',
        'description' => 'required|string',
    ]);
 
    // Sabhi input le lo bina validation ke (except _token, _method)
    $data = $request->except(['_token', '_method']);
 
    // Images handle karo
    foreach (['image_one', 'image_two', 'arrow_image'] as $field) {
        if ($request->hasFile($field)) {
            $data[$field] = $request->file($field)->store('about', 'public');
        }
    }
 
      if ($request->has('list_items')) {
        $list_items = [];
        $icons = $request->input('list_items.icon', []);
        $titles = $request->input('list_items.title', []);
        $descriptions = $request->input('list_items.description', []);
 
        foreach ($icons as $index => $icon) {
            $list_items[] = [
                'icon' => $icon,
                'title' => $titles[$index] ?? '',
                'description' => $descriptions[$index] ?? '',
            ];
        }
 
        $data['list_items'] = $list_items;
    }
 
    // Update DB
    $about_altermed_rcm->update($data);
 
    return redirect()->route('admin.about_altermed_rcm.edit', $about_altermed_rcm->id)
                     ->with('success', 'About Section updated successfully!');
}






}

