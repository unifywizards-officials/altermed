<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicePage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ServicePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
       public function index()
    {
         $servicePages = ServicePage::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pages.service_page.index', compact('servicePages'));
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,webp,gif|max:5120',
        ]);

        $path = $request->file('image')->store('service-pages/editor', 'public');
        return response()->json(['url' => asset('storage/'.$path)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.service_page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'service_banner_title' => 'nullable|string|max:255',
    //         'slug'                 => 'nullable|string|max:255|unique:service_pages,slug',
    //         'description' => 'nullable|string',
    //         'service_type' => 'required|string|in:Billing services,Credentialed,We Serve,Physician Billing',
    //     ]);

    //     $slug = $request->slug;
    //     if (empty($slug) && $request->filled('service_banner_title')) {
    //         $slug = Str::slug($request->service_banner_title);
    //     }

    //     $jsonFields = [
    //         'acquire_title',
    //         'icon',
    //         'icon_title',
    //         'icon_heading',
    //         'faq_title',
    //         'faq_heading',
    //         'whychoos_name',
    //     ];

    //     $data = $request->except(['service_banner_image', 'service_image', 'image_why_choose']);
    //     $data['slug'] = $slug;
    //     $data['service_type'] = $request->service_type;
    //     $data['service_type'] = $request->service_type;
    //     $data['status'] = 1; // Default to show in header
    //     $data['is_active'] = $request->boolean('is_active', true);

    //     foreach ($jsonFields as $field) {
    //         if ($request->has($field)) {
    //             $data[$field] = is_array($request->$field) ? $request->$field : json_decode($request->$field, true);
    //         }
    //     }

    //     if ($request->hasFile('service_banner_image')) {
    //         $data['service_banner_image'] = $request->file('service_banner_image')->store('service-pages', 'public');
    //     }
    //     if ($request->hasFile('service_image')) {
    //         $data['service_image'] = $request->file('service_image')->store('service-pages', 'public');
    //     }
    //     if ($request->hasFile('image_why_choose')) {
    //         $data['image_why_choose'] = $request->file('image_why_choose')->store('service-pages', 'public');
    //     }

    //     ServicePage::create($data);

    //     return redirect()->route('admin.service-pages.index')->with('success', 'Service Page created successfully.');
    // }



  public function store(Request $request)
{
    $request->validate([
        'service_banner_title' => 'nullable|string|max:255',
        'slug'                 => 'nullable|string|max:255|unique:service_pages,slug',
        'description'          => 'nullable|string',
        'service_type'         => 'required|string|in:Billing services,Credentialed,We Serve,Physician Billing',
        'icon.*'               => 'nullable|image|mimes:jpg,jpeg,png,webp,gif|max:2048',
    ]);

    $slug = $request->slug;
    if (empty($slug) && $request->filled('service_banner_title')) {
        $slug = Str::slug($request->service_banner_title);
    }

    $jsonFields = [
        'acquire_title',
        'icon_title',
        'icon_heading',
        'faq_title',
        'faq_heading',
        'whychoos_name',
    ];

    $data = $request->except(['service_banner_image', 'service_image', 'image_why_choose', 'icon','home_image']);
    $data['slug'] = $slug;
    $data['service_type'] = $request->service_type;
    $data['status'] = 1;
    $data['is_active'] = $request->boolean('is_active', true);
    $data['show_on_home'] = $request->boolean('show_on_home', false);

    // Convert JSON array fields
    foreach ($jsonFields as $field) {
        if ($request->has($field)) {
            $data[$field] = is_array($request->$field) ? $request->$field : json_decode($request->$field, true);
        }
    }

    /** ✅ Upload Icon Images */
    $uploadedIcons = [];

    if ($request->hasFile('icon')) {
        foreach ($request->file('icon') as $file) {
            if ($file) {
                $path = $file->store('service-icons', 'public');
                $uploadedIcons[] = $path;
            } else {
                $uploadedIcons[] = null;
            }
        }
    }

    $data['icon'] = $uploadedIcons;

    // ✅ Other images
    if ($request->hasFile('service_banner_image')) {
        $data['service_banner_image'] = $request->file('service_banner_image')->store('service-pages', 'public');
    }
    if ($request->hasFile('service_image')) {
        $data['service_image'] = $request->file('service_image')->store('service-pages', 'public');
    }
    if ($request->hasFile('image_why_choose')) {
        $data['image_why_choose'] = $request->file('image_why_choose')->store('service-pages', 'public');
    }
    
      if ($request->hasFile('home_image')) {
            $data['home_image'] = $request->file('home_image')->store('service-pages', 'public');
        }

    ServicePage::create($data);

    return redirect()->route('admin.service-pages.index')
        ->with('success', 'Service Page created successfully.');
}

      public function edit(ServicePage $service_page)
    {
        $servicePage = $service_page;
        return view('admin.pages.service_page.edit', compact('servicePage'));
    }

    /**
     * Update the specified resource in storage.
     */
    //   public function update(Request $request, ServicePage $service_page)

    // {
    //     $servicePage = $service_page;

    //     // ✅ Validation
    //     $request->validate([
    //         'service_banner_title' => 'nullable|string|max:255',
    //         'slug'                 => 'nullable|string|max:255|unique:service_pages,slug,' . $servicePage->id,
    //         'meta_title'           => 'nullable|string|max:255',
    //         'meta_description'     => 'nullable|string|max:500',
    //         'meta_keywords'        => 'nullable|string|max:500',
    //       'description' => 'nullable|string',
    //       'service_type'         => 'required|string|in:Billing services,Credentialed,We Serve,Physician Billing',
    //     ]);

    //     // ✅ Slug handle
    //     $slug = $request->slug;
    //     if (empty($slug) && $request->filled('service_banner_title')) {
    //         $slug = Str::slug($request->service_banner_title);
    //     }

    //     // ✅ JSON fields handle
    //     $jsonFields = [
    //         'acquire_title',
    //         'icon',
    //         'icon_title',
    //         'icon_heading',
    //         'faq_title',
    //         'faq_heading',
    //         'whychoos_name',
    //     ];

    //     $data = $request->except(['service_banner_image', 'service_image', 'image_why_choose']);
    //     $data['slug'] = $slug;

    //     foreach ($jsonFields as $field) {
    //         if ($request->has($field)) {
    //             $data[$field] = is_array($request->$field) ? $request->$field : json_decode($request->$field, true);
    //         }
    //     }

    //     // handle file uploads replacing path text fields
    //     if ($request->hasFile('service_banner_image')) {
    //         if (!empty($servicePage->service_banner_image)) {
    //             Storage::disk('public')->delete($servicePage->service_banner_image);
    //         }
    //         $data['service_banner_image'] = $request->file('service_banner_image')->store('service-pages', 'public');
    //     }
    //     if ($request->hasFile('service_image')) {
    //         if (!empty($servicePage->service_image)) {
    //             Storage::disk('public')->delete($servicePage->service_image);
    //         }
    //         $data['service_image'] = $request->file('service_image')->store('service-pages', 'public');
    //     }
    //     if ($request->hasFile('image_why_choose')) {
    //         if (!empty($servicePage->image_why_choose)) {
    //             Storage::disk('public')->delete($servicePage->image_why_choose);
    //         }
    //         $data['image_why_choose'] = $request->file('image_why_choose')->store('service-pages', 'public');
    //     }

    //     $servicePage->update($data);

    //     return redirect()->route('admin.service-pages.index')->with('success', 'Service Page updated successfully.');
    // }



public function update(Request $request, ServicePage $service_page)
{
    $servicePage = $service_page;

    // ✅ Validation
    $request->validate([
        'service_banner_title' => 'nullable|string|max:255',
        'slug'                 => 'nullable|string|max:255|unique:service_pages,slug,' . $servicePage->id,
        'meta_title'           => 'nullable|string|max:255',
        'meta_description'     => 'nullable|string|max:500',
        'meta_keywords'        => 'nullable|string|max:500',
        'description'          => 'nullable|string',
        'service_type'         => 'required|string|in:Billing services,Credentialed,We Serve,Physician Billing',
        'icon.*'               => 'nullable|image|mimes:jpg,jpeg,png,webp,gif|max:2048',
    ]);

    // ✅ Slug handle
    $slug = $request->slug;
    if (empty($slug) && $request->filled('service_banner_title')) {
        $slug = Str::slug($request->service_banner_title);
    }

    $jsonFields = [
        'acquire_title',
        'icon_title',
        'icon_heading',
        'faq_title',
        'faq_heading',
        'whychoos_name',
    ];

    $data = $request->except(['service_banner_image', 'service_image', 'image_why_choose', 'icon','home_image']);
    $data['slug'] = $slug;
    $data['show_on_home'] = $request->boolean('show_on_home', false);

    // ✅ Handle JSON Fields
    foreach ($jsonFields as $field) {
        if ($request->has($field)) {
            $data[$field] = is_array($request->$field) ? $request->$field : json_decode($request->$field, true);
        }
    }

    /** ✅ FIXED: Handle Icon Image Update */
    $existingIcons = $servicePage->icon ?? [];
    $updatedIcons = [];
    $iconFiles = $request->file('icon', []);

    $max = max(count($existingIcons), count($iconFiles));

    for ($i = 0; $i < $max; $i++) {

        if (!empty($iconFiles[$i])) {
            // Delete old icon if exists
            if (!empty($existingIcons[$i])) {
                Storage::disk('public')->delete($existingIcons[$i]);
            }

            // Upload new icon
            $updatedIcons[$i] = $iconFiles[$i]->store('service-icons', 'public');

        } else {
            // Keep old icon if no new file
            $updatedIcons[$i] = $existingIcons[$i] ?? null;
        }
    }

    // Remove null/blank values & Reindex
    $updatedIcons = array_values(array_filter($updatedIcons));

    $data['icon'] = $updatedIcons;

    /** ✅ Handle Other Images (Banner, Service, Why Choose) */

    if ($request->hasFile('service_banner_image')) {
        if (!empty($servicePage->service_banner_image)) {
            Storage::disk('public')->delete($servicePage->service_banner_image);
        }
        $data['service_banner_image'] = $request->file('service_banner_image')->store('service-pages', 'public');
    }

    if ($request->hasFile('service_image')) {
        if (!empty($servicePage->service_image)) {
            Storage::disk('public')->delete($servicePage->service_image);
        }
        $data['service_image'] = $request->file('service_image')->store('service-pages', 'public');
    }

    if ($request->hasFile('image_why_choose')) {
        if (!empty($servicePage->image_why_choose)) {
            Storage::disk('public')->delete($servicePage->image_why_choose);
        }
        $data['image_why_choose'] = $request->file('image_why_choose')->store('service-pages', 'public');
    }
    
     if ($request->hasFile('home_image')) {
            if (!empty($servicePage->home_image)) {
                Storage::disk('public')->delete($servicePage->home_image);
            }
            $data['home_image'] = $request->file('home_image')->store('service-pages', 'public');
        }

    $servicePage->update($data);

    return redirect()->route('admin.service-pages.index')->with('success', 'Service Page updated successfully.');
}



public function destroy(ServicePage $servicePage)
{
    $servicePage->delete();
    return redirect()->route('admin.service-pages.index')->with('success', 'Service deleted successfully.');
}

public function toggleStatus(Request $request, $id)
{
    try {
        $servicePage = ServicePage::findOrFail($id);

        $request->validate([
            'status' => 'required|boolean',
        ]);

        $servicePage->update(['status' => $request->status]);

        return response()->json(['success' => true, 'message' => 'Status updated successfully.']);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'Error updating status: ' . $e->getMessage()], 500);
    }
}



public function toggleShowOnHome(Request $request, $id)
{
    try {
        $servicePage = ServicePage::findOrFail($id);

        $request->validate([
            'show_on_home' => 'required|boolean',
        ]);

        $servicePage->update(['show_on_home' => $request->show_on_home]);

        return response()->json(['success' => true, 'message' => 'Show on home updated successfully.']);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'Error updating show on home: ' . $e->getMessage()], 500);
    }
}



}
