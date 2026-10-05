<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ScheduleDemo;
use Illuminate\Http\Request;

class ScheduleDemoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scheduleDemos = ScheduleDemo::latest()->paginate(15);
        return view('admin.pages.schedule-demos.index', compact('scheduleDemos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ScheduleDemo $scheduleDemo)
    {
        return view('admin.pages.schedule-demos.show', compact('scheduleDemo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScheduleDemo $scheduleDemo)
    {
        $scheduleDemo->delete();
        return redirect()->route('admin.schedule-demos.index')->with('success', 'Schedule demo deleted successfully.');
    }
}
