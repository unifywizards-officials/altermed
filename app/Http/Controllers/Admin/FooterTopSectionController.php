<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterTopSection;
use Illuminate\Http\Request;

class FooterTopSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footerTopSection = FooterTopSection::first();
        return view('admin.pages.footer-top-section.index', compact('footerTopSection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.footer-top-section.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'eyebrow_text' => 'nullable|string|max:255',
            'main_title' => 'nullable|string|max:255',
            'main_title_highlight' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|string|max:255',
        ]);

        FooterTopSection::create($request->all());

        return redirect()->route('admin.footer-top-section.index')->with('success', 'Footer Top Section created successfully.');
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
        $footerTopSection = FooterTopSection::findOrFail($id);
        return view('admin.pages.footer-top-section.edit', compact('footerTopSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $footerTopSection = FooterTopSection::findOrFail($id);

        $request->validate([
            'eyebrow_text' => 'nullable|string|max:255',
            'main_title' => 'nullable|string|max:255',
            'main_title_highlight' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|string|max:255',
        ]);

        $footerTopSection->update($request->all());

        return redirect()->route('admin.footer-top-section.index')->with('success', 'Footer Top Section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $footerTopSection = FooterTopSection::findOrFail($id);
        $footerTopSection->delete();

        return redirect()->route('admin.footer-top-section.index')->with('success', 'Footer Top Section deleted successfully.');
    }
}
