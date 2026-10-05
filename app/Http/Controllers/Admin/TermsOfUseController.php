<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TermsOfUse;
use Illuminate\Http\Request;

class TermsOfUseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $termsOfUse = TermsOfUse::first();
        return view('admin.pages.terms-of-use.index', compact('termsOfUse'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.terms-of-use.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
        ]);

        TermsOfUse::create($request->all());

        return redirect()->route('admin.terms-of-use.index')->with('success', 'Terms of Use created successfully.');
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
        $termsOfUse = TermsOfUse::findOrFail($id);
        return view('admin.pages.terms-of-use.edit', compact('termsOfUse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $termsOfUse = TermsOfUse::findOrFail($id);

        $request->validate([
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
        ]);

        $termsOfUse->update($request->all());

        return redirect()->route('admin.terms-of-use.index')->with('success', 'Terms of Use updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $termsOfUse = TermsOfUse::findOrFail($id);
        $termsOfUse->delete();

        return redirect()->route('admin.terms-of-use.index')->with('success', 'Terms of Use deleted successfully.');
    }
}
