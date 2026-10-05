<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinessCounter;

class BusinessCounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $businessCounters = BusinessCounter::all();
        return view('admin.pages.business_counters.index', compact('businessCounters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.business_counters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|string|max:255',
            'counter' => 'required|string|max:255',
            'name' => 'required|string|max:255',
        ]);

        BusinessCounter::create($request->all());

        return redirect()->route('admin.business-counters.index')->with('success', 'Business Counter created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $businessCounter = BusinessCounter::findOrFail($id);
        return view('admin.pages.business_counters.show', compact('businessCounter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $businessCounter = BusinessCounter::findOrFail($id);
        return view('admin.pages.business_counters.edit', compact('businessCounter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'icon' => 'string|max:255',
            'counter' => 'string|max:255',
            'counter_text' => 'string|max:255',
            'name' => 'string|max:255',
        ]);

        $businessCounter = BusinessCounter::findOrFail($id);
        $businessCounter->update($request->all());

        return redirect()->route('admin.business-counters.index')->with('success', 'Business Counter updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $businessCounter = BusinessCounter::findOrFail($id);
        $businessCounter->delete();

        return redirect()->route('admin.business-counters.index')->with('success', 'Business Counter deleted successfully!');
    }
}
