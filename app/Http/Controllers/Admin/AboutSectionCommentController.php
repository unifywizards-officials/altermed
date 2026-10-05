<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutSection;

class AboutSectionCommentController extends Controller
{
    public function edit(AboutSection $about_section_commitment)
{
        return view('admin.pages.about_section_commitment.edit', compact('about_section_commitment'));
}

public function update(Request $request, $id)
{
    $about_section_commitment = AboutSection::findOrFail($id);

    // Sirf title aur description validate honge
    $validated = $request->validate([
        'title'       => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    // Sabhi input le lo bina validation ke (except _token, _method)
    $data = $request->except(['_token', '_method']);

    // Images handle karo
    foreach (['image_one', 'image_two', 'arrow_image'] as $field) {
        if ($request->hasFile($field)) {
            $data[$field] = $request->file($field)->store('about_comment', 'public');
        }
    }

    // Update DB
    $about_section_commitment->update($data);

    return redirect()->route('admin.about_section_commitment.edit', $about_section_commitment->id)
                     ->with('success', 'About Section updated successfully!');
}





}

