<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeManageContent;
use Illuminate\Http\Request;

class HomeManageContentController extends Controller
{
    public function index()
    {
        $homeManageContent = HomeManageContent::first();
        if (!$homeManageContent) {
            $homeManageContent = HomeManageContent::create([
                'home_service_heading' => 'Our Services',
                'home_service_description' => 'Description here',
                'home_why_choose_h1' => 'Why Choose Us',
                'home_why_choose_h2' => 'Subtitle',
                'home_client_heading' => 'Our Clients',
                'home_different_heading' => 'What Makes Us Different',
                'home_meta_title' => 'Home',
                'home_meta_description' => 'Description',
                'home_meta_keywords' => 'keywords',
                'home_cta' => [
                    'title' => 'Get Started Today',
                    'button_text' => 'Contact Us',
                    'button_url' => '#'
                ],
            ]);
        }

        return view('admin.pages.home-manage-content.edit', compact('homeManageContent'));
    }

    public function update(Request $request, HomeManageContent $homeManageContent)
    {
        $validated = $request->validate([
            'home_service_heading' => 'nullable|string|max:255',
            'home_service_description' => 'nullable|string',
            'home_why_choose_h1' => 'nullable|string|max:255',
            'home_why_choose_h2' => 'nullable|string|max:255',
            'home_client_heading' => 'nullable|string|max:255',
            'home_different_heading' => 'nullable|string|max:255',
            'home_meta_title' => 'nullable|string|max:255',
            'home_meta_description' => 'nullable|string|max:500',
            'home_meta_keywords' => 'nullable|string|max:500',
            'home_cta' => 'nullable|array',
            'home_cta.*.title' => 'nullable|string|max:255',
            'home_cta.*.button_text' => 'nullable|string|max:255',
            'home_cta.*.button_url' => 'nullable|url',
        ]);

        $homeManageContent->update($validated);

        return redirect()->route('admin.home-manage-content.index')
            ->with('success', 'Home content updated successfully!');
    }
}