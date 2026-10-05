<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $privacyPolicy = PrivacyPolicy::first();
        return view('admin.pages.privacy-policy.index', compact('privacyPolicy'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.privacy-policy.create');
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

        PrivacyPolicy::create($request->all());

        return redirect()->route('admin.privacy-policy.index')->with('success', 'Privacy Policy created successfully.');
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
        $privacyPolicy = PrivacyPolicy::findOrFail($id);
        return view('admin.pages.privacy-policy.edit', compact('privacyPolicy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $privacyPolicy = PrivacyPolicy::findOrFail($id);

        $request->validate([
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
        ]);

        $privacyPolicy->update($request->all());

        return redirect()->route('admin.privacy-policy.index')->with('success', 'Privacy Policy updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $privacyPolicy = PrivacyPolicy::findOrFail($id);
        $privacyPolicy->delete();

        return redirect()->route('admin.privacy-policy.index')->with('success', 'Privacy Policy deleted successfully.');
    }
}
