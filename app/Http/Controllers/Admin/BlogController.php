<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.pages.blogs.index', compact('blogs'));
    }

public function create()
{
    $categories = BlogCategory::where('status', 1)->orderBy('name')->get();
    
    return view('admin.pages.blogs.create', compact('categories'));
}

public function store(Request $request)
    {
        $data = $request->validate([
            'category_id'        => 'required|exists:blog_categories,id',
            'name'               => 'nullable|string|max:255',
            'title'              => 'required|string|max:255',
            'heading'            => 'nullable|string|max:255',
            'short_description'  => 'nullable|string',
            'long_description'   => 'required|string',
            'meta_title'         => 'nullable|string|max:255',
            'meta_description'   => 'nullable|string',
            'meta_keywords'      => 'nullable|string|max:255',
            'is_published'       => 'nullable|boolean',
            'published_at'       => 'nullable|date',
            'image'              => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        // slug
        $data['slug'] = $this->makeUniqueSlug($request->input('title'));

        // image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        // publish toggle
        $data['is_published'] = (bool) $request->boolean('is_published');
        if ($data['is_published'] && empty($data['published_at'])) {
            $data['published_at'] = now();
        }

        Blog::create($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully!');
    }


   public function edit(Blog $blog)
{
    $categories = BlogCategory::where('status', 1)->orderBy('name')->get();
    return view('admin.pages.blogs.edit', compact('blog', 'categories'));
}

 public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'category_id'        => 'required|exists:blog_categories,id',
            'name'               => 'nullable|string|max:255',
            'title'              => 'required|string|max:255',
            'heading'            => 'nullable|string|max:255',
            'short_description'  => 'nullable|string',
            'long_description'   => 'required|string',
            'meta_title'         => 'nullable|string|max:255',
            'meta_description'   => 'nullable|string',
            'meta_keywords'      => 'nullable|string|max:255',
            'is_published'       => 'nullable|boolean',
            'published_at'       => 'nullable|date',
            'image'              => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        // slug (update only if title changed)
        if ($blog->title !== $data['title']) {
            $data['slug'] = $this->makeUniqueSlug($data['title'], $blog->id);
        }

        // new image upload
        if ($request->hasFile('image')) {
            if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        // publish toggle
        $data['is_published'] = (bool) $request->boolean('is_published');
        if ($data['is_published'] && empty($data['published_at'])) {
            $data['published_at'] = now();
        }
        if (!$data['is_published']) {
            $data['published_at'] = null;
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully!');
    }

        public function destroy(Blog $blog)
    {
        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();

        return back()->with('success', 'Blog deleted successfully!');
    }

    private function makeUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug($title);
        $slug = $base;
        $i = 1;
        while (
            Blog::where('slug', $slug)
                ->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $base . '-' . $i++;
        }
        return $slug;
    }
}
