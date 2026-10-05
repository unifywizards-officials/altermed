<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('display_order')->paginate(15);
        return view('admin.pages.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.pages.clients.create');
    }

public function store(Request $request)
{
    $validated = $request->validate([
        'name'          => 'nullable|string|max:255',
        'icon'          => 'nullable|string|max:255',
        'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:4096',
        'url'           => 'nullable|url|max:255',
        'description'   => 'nullable|string',
        'is_active'     => 'nullable|boolean',
        'display_order' => 'nullable|integer|min:0',
    ]);

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('clients', 'public');
    }

    Client::create([
        'name'          => $validated['name'] ?? null,
        'icon'          => $validated['icon'] ?? null,
        'image_path'    => $imagePath,
        'url'           => $validated['url'] ?? null,
        'description'   => $validated['description'] ?? null,
        'is_active'     => $request->boolean('is_active'),
        'display_order' => $validated['display_order'] ?? 0,
    ]);

    return redirect()->route('admin.clients.index')->with('success', 'Client created successfully.');
}



    public function edit(Client $client)
    {
        return view('admin.pages.clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:4096',
            'url' => 'nullable|url|max:255',
            'description' => 'nullable|string',
            'is_active' => 'nullable|boolean',
            'display_order' => 'nullable|integer|min:0',
        ]);

        $data = [
            'name' => $validated['name'],
            'icon' => $validated['icon'] ?? null,
            'url' => $validated['url'] ?? null,
            'description' => $validated['description'] ?? null,
            'is_active' => $request->boolean('is_active'),
            'display_order' => $validated['display_order'] ?? 0,
        ];

        if ($request->hasFile('image')) {
            if (!empty($client->image_path)) {
                Storage::disk('public')->delete($client->image_path);
            }
            $data['image_path'] = $request->file('image')->store('clients', 'public');
        }

        $client->update($data);

        return redirect()->route('admin.clients.index')->with('success', 'Client updated successfully.');
    }

    public function destroy(Client $client)
    {
        if (!empty($client->image_path)) {
            Storage::disk('public')->delete($client->image_path);
        }
        
        $client->delete();
        return redirect()->route('admin.clients.index')->with('success', 'Client deleted successfully.');
    }
}
