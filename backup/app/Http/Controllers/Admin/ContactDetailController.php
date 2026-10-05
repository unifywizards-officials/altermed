<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactDetailController extends Controller
{
    // Show editable single record
    public function index()
    {
        $contact = ContactDetail::first();
        if (!$contact) {
            $contact = ContactDetail::create([
                'banner_title'   => 'Contact Us',
                'banner_image'   => null,
                'heading'        => 'Contact Us',
                'description'    => null,
                'contact_details'=> [
                    'phone1_icon' => null,
                    'phone1' => null,
                    'phone2_icon' => null,
                    'phone2' => null,
                    'email_icon' => null,
                    'email' => null,
                    'address_icon' => null,
                    'office_address' => null,
                ],
                'contact_cta'    => [],
                'extra_icons'    => [],
            ]);
        }

        return view('admin.pages.contact_details.index', compact('contact'));
    }

    // Update
    public function update(Request $request, ContactDetail $contact_detail)
    {
        //dd($request->all());
        $validated = $request->validate([
            // banner
            'banner_title' => 'nullable|string|max:255',
            'banner_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            // basic
            'heading'     => 'required|string|max:255',
            'description' => 'nullable|string',

            // contact_details (fixed 4)
            'contact_details.phone1_icon' => 'nullable|string|max:255',
            'contact_details.phone1'      => 'nullable|string|max:50',
            'contact_details.phone2_icon' => 'nullable|string|max:255',
            'contact_details.phone2'      => 'nullable|string|max:50',
            'contact_details.email_icon'  => 'nullable|string|max:255',
            'contact_details.email'       => 'nullable|email|max:255',
            'contact_details.address_icon'=> 'nullable|string|max:255',
            'contact_details.office_address' => 'nullable|string|max:1000',

            // contact_cta (array of objects)
            'contact_cta'                 => 'nullable|array',
            'contact_cta.*.icon'          => 'nullable|string|max:255',
            'contact_cta.*.heading'       => 'nullable|string|max:255',
            'contact_cta.*.button_text'   => 'nullable|string|max:255',
            'contact_cta.*.button_url'    => 'nullable|url|max:1000',

            // extra_icons (array of objects)
            'extra_icons'                 => 'nullable|array',
            'extra_icons.*.icon'          => 'nullable|string|max:255',
            'extra_icons.*.url'           => 'nullable|url|max:1000',
        ]);

        // Handle banner image upload
        $bannerImagePath = $contact_detail->banner_image;
        if ($request->hasFile('banner_image')) {
            if ($bannerImagePath && Storage::disk('public')->exists($bannerImagePath)) {
                Storage::disk('public')->delete($bannerImagePath);
            }
            $bannerImagePath = $request->file('banner_image')->store('contact_banners', 'public');
        }

        $contact_detail->update([
            'banner_title'   => $request->banner_title,
            'banner_image'   => $bannerImagePath,
            'heading'        => $request->heading,
            'description'    => $request->description,
            'contact_details'=> $request->contact_details,
            'contact_cta'    => $request->contact_cta,
            'extra_icons'    => $request->extra_icons,
            'map_url'   => $request->map_url,
            'meta_title'   => $request->meta_title,
            'meta_keywords'   => $request->meta_keywords,
            'meta_description'   => $request->meta_description,
        ]);

        return redirect()->route('admin.contact_details.index')
            ->with('success', 'Contact details updated successfully!');
    }
}
