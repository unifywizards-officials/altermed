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
         $servicePages = ServicePage::orderBy('created_at', 'desc')->paginate(15);
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
    public function store(Request $request)
    {
        $request->validate([
            'service_banner_title' => 'nullable|string|max:255',
            'slug'                 => 'nullable|string|max:255|unique:service_pages,slug',
            'description' => 'nullable|string',
        ]);

        $slug = $request->slug;
        if (empty($slug) && $request->filled('service_banner_title')) {
            $slug = Str::slug($request->service_banner_title);
        }

        $jsonFields = [
            'acquire_title',
            'icon',
            'icon_title',
            'icon_heading',
            'faq_title',
            'faq_heading',
            'whychoos_name',
        ];

        $data = $request->except(['service_banner_image', 'service_image', 'image_why_choose']);
        $data['slug'] = $slug;
        $data['is_active'] = $request->boolean('is_active', true);
        $data['is_active'] = $request->boolean('is_active', true);

        foreach ($jsonFields as $field) {
            if ($request->has($field)) {
                $data[$field] = is_array($request->$field) ? $request->$field : json_decode($request->$field, true);
            }
        }

        if ($request->hasFile('service_banner_image')) {
            $data['service_banner_image'] = $request->file('service_banner_image')->store('service-pages', 'public');
        }
        if ($request->hasFile('service_image')) {
            $data['service_image'] = $request->file('service_image')->store('service-pages', 'public');
        }
        if ($request->hasFile('image_why_choose')) {
            $data['image_why_choose'] = $request->file('image_why_choose')->store('service-pages', 'public');
        }

        ServicePage::create($data);

        return redirect()->route('admin.service-pages.index')->with('success', 'Service Page created successfully.');
    }

      public function edit(ServicePage $service_page)
    {
        $servicePage = $service_page;
        return view('admin.pages.service_page.edit', compact('servicePage'));
    }

    /**
     * Update the specified resource in storage.
     */
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
           'description' => 'nullable|string',
        ]);

        // ✅ Slug handle
        $slug = $request->slug;
        if (empty($slug) && $request->filled('service_banner_title')) {
            $slug = Str::slug($request->service_banner_title);
        }

        // ✅ JSON fields handle
        $jsonFields = [
            'acquire_title',
            'icon',
            'icon_title',
            'icon_heading',
            'faq_title',
            'faq_heading',
            'whychoos_name',
        ];

        $data = $request->except(['service_banner_image', 'service_image', 'image_why_choose']);
        $data['slug'] = $slug;

        foreach ($jsonFields as $field) {
            if ($request->has($field)) {
                $data[$field] = is_array($request->$field) ? $request->$field : json_decode($request->$field, true);
            }
        }

        // handle file uploads replacing path text fields
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

        $servicePage->update($data);

        return redirect()->route('admin.service-pages.index')->with('success', 'Service Page updated successfully.');
    }


public function destroy(ServicePage $servicePage)
{
    $servicePage->delete();
    return redirect()->route('admin.service-pages.index')->with('success', 'Service deleted successfully.');
}



}
