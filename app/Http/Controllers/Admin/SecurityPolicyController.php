<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SecurityPolicy;
use Illuminate\Http\Request;

class SecurityPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $securityPolicy = SecurityPolicy::first();
        return view('admin.pages.security-policy.index', compact('securityPolicy'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.security-policy.create');
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

        SecurityPolicy::create($request->all());

        return redirect()->route('admin.security-policy.index')->with('success', 'Security Policy created successfully.');
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
        $securityPolicy = SecurityPolicy::findOrFail($id);
        return view('admin.pages.security-policy.edit', compact('securityPolicy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $securityPolicy = SecurityPolicy::findOrFail($id);

        $request->validate([
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
        ]);

        $securityPolicy->update($request->all());

        return redirect()->route('admin.security-policy.index')->with('success', 'Security Policy updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $securityPolicy = SecurityPolicy::findOrFail($id);
        $securityPolicy->delete();

        return redirect()->route('admin.security-policy.index')->with('success', 'Security Policy deleted successfully.');
    }
}
