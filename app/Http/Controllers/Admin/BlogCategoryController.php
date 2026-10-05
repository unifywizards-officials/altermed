<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Str;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $categories = BlogCategory::latest()->paginate(10);
        return view('admin.pages.blog-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.pages.blog-categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:blog_categories,name',
        ]);

        BlogCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status ?? 1,
        ]);

        return redirect()->route('admin.blog-categories.index')
                         ->with('success', 'Category created successfully.');
    }

    public function edit(BlogCategory $blogCategory)
    {
        return view('admin.pages.blog-categories.edit', compact('blogCategory'));
    }

    
public function update(Request $request, BlogCategory $blogCategory)
{
    $request->validate([
        'name' => 'required|unique:blog_categories,name,' . $blogCategory->id,
    ]);

    $blogCategory->update([
        'name' => $request->name,
        'slug' => Str::slug($request->name),
        'status' => $request->status ?? 1,
    ]);

    return redirect()->route('admin.blog-categories.index')
                     ->with('success', 'Category updated successfully.');
}
    public function destroy(BlogCategory $blogCategory)
    {
        $blogCategory->delete();
        return redirect()->route('admin.blog-categories.index')
                         ->with('success', 'Category deleted successfully.');
    }
}
