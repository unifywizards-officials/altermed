<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LicensingIntro;
use Illuminate\Http\Request;

class LicensingIntroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = LicensingIntro::first();
        if (!$item) {
            $item = LicensingIntro::create([
                'heading' => 'Simplify Your Medical Licensing Process',
                'description' => 'We make licensing simple and efficient for healthcare providers and practices across the US. AlterMed RCM reduces your administrative burden by getting you licensed faster.',
                'button_text' => 'Know More',
            ]);
        }
        return redirect()->route('admin.licensing-intro.edit', $item->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LicensingIntro $licensingIntro)
    {
        return view('admin.pages.licensing-intro.edit', compact('licensingIntro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LicensingIntro $licensingIntro)
    {
        $validated = $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
            'button_text' => 'required|string|max:255',
        ]);

        $licensingIntro->update($validated);

        return redirect()->route('admin.licensing-intro.edit', $licensingIntro->id)->with('success', 'Licensing Intro updated successfully.');
    }
}
