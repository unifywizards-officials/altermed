<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchedulePageContent;
use Illuminate\Http\Request;

class SchedulePageContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $content = SchedulePageContent::first();
        if (!$content) {
            $content = SchedulePageContent::create([
                'heading' => 'Schedule a Demo',
                'description' => 'Our professional credential services are fast, accurate, and insurer-aligned, helping you avoid missed revenue.',
                'form_title' => 'Fill the Form to Get a Call Back from Us',
            ]);
        }
        return redirect()->route('admin.schedule-page-content.edit', $content->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SchedulePageContent $schedulePageContent)
    {
        return view('admin.pages.schedule-page-content.edit', compact('schedulePageContent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SchedulePageContent $schedulePageContent)
    {
        $validated = $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
            'form_title' => 'required|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $schedulePageContent->update($validated);

        return redirect()->route('admin.schedule-page-content.edit', $schedulePageContent->id)->with('success', 'Schedule page content updated successfully.');
    }
}
