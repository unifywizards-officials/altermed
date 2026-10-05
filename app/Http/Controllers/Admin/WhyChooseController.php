<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhyChoose;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WhyChooseController extends Controller
{
    public function index()
    {
        $items = WhyChoose::orderBy('display_order')->paginate(10);
        return view('admin.pages.whychoose.index', compact('items'));
    }

    public function create()
    {
        return view('admin.pages.whychoose.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'details' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'icon' => 'nullable|string|max:255',
            'url' => 'nullable|url|max:255',
            'is_active' => 'nullable|boolean',
            'display_order' => 'nullable|integer|min:0',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('whychoose', 'public');
        }

        WhyChoose::create([
            'title' => $validated['title'],
            'details' => $validated['details'] ?? null,
            'image_path' => $imagePath,
            'icon' => $validated['icon'] ?? null,
            'url' => $validated['url'] ?? null,
            'is_active' => $request->boolean('is_active'),
            'display_order' => $validated['display_order'] ?? 0,
        ]);

        return redirect()->route('admin.whychoose.index')->with('success', 'Why Choose created successfully.');
    }

    public function edit(WhyChoose $whychoose)
    {
        return view('admin.pages.whychoose.edit', ['item' => $whychoose]);
    }

    public function update(Request $request, WhyChoose $whychoose)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'details' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'icon' => 'nullable|string|max:255',
            'url' => 'nullable|url|max:255',
            'is_active' => 'nullable|boolean',
            'display_order' => 'nullable|integer|min:0',
        ]);

        $data = [
            'title' => $validated['title'],
            'details' => $validated['details'] ?? null,
            'icon' => $validated['icon'] ?? null,
            'url' => $validated['url'] ?? null,
            'is_active' => $request->boolean('is_active'),
            'display_order' => $validated['display_order'] ?? 0,
        ];

        if ($request->hasFile('image')) {
            if (!empty($whychoose->image_path)) {
                Storage::disk('public')->delete($whychoose->image_path);
            }
            $data['image_path'] = $request->file('image')->store('whychoose', 'public');
        }

        $whychoose->update($data);

        return redirect()->route('admin.whychoose.index')->with('success', 'Why Choose updated successfully.');
    }

    public function destroy(WhyChoose $whychoose)
    {
        $whychoose->delete();
        return redirect()->route('admin.whychoose.index')->with('success', 'Why Choose deleted successfully.');
    }
}


