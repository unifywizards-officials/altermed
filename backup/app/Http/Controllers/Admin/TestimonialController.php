<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    // Index page
    public function index()
    {
        $testimonial = Testimonial::first();

        if (!$testimonial) {
            $testimonial = Testimonial::create([
                'heading' => 'What Our Clients Say',
                'description' => 'We value our clients and here’s what they say about us.',
                'testimonials_items' => []
            ]);
        }

        return view('admin.pages.testimonial.index', compact('testimonial'));
    }

    // Update testimonial section
public function update(Request $request, $id)
{
    $testimonial = Testimonial::findOrFail($id);

    $request->validate([
        'heading' => 'required|string|max:255',
        'description' => 'nullable|string',
        'testimonials_items' => 'nullable|array',
    ]);

    $items = $request->testimonials_items ?? [];

    // ✅ Loop through items and handle image upload
    foreach ($items as $index => $item) {
        if (isset($item['image']) && $item['image'] instanceof \Illuminate\Http\UploadedFile) {
            // File ko storage/public/testimonials me save karo
            $path = $item['image']->store('testimonials', 'public');
            $items[$index]['image'] = $path;
        } else {
            // agar purana image JSON me hai to usko preserve karo
            $items[$index]['image'] = $testimonial->testimonials_items[$index]['image'] ?? null;
        }
    }

    $testimonial->update([
        'heading' => $request->heading,
        'description' => $request->description,
        'testimonials_items' => $items,
    ]);

    return redirect()->route('admin.testimonials.index')
                     ->with('success', 'Testimonials updated successfully!');
}

    // Ajax remove item (optional)
    public function removeItem($id, $index)
    {
        $testimonial = Testimonial::findOrFail($id);
        $items = $testimonial->testimonials_items ?? [];

        if (isset($items[$index])) {
            unset($items[$index]);
            $items = array_values($items); // re-index
            $testimonial->testimonials_items = $items;
            $testimonial->save();
        }

        return response()->json(['success' => true]);
    }
}
