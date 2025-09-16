<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $details = Blog::get();
        return view('backend.blog.list', compact('details'));
    }

    public function getallblogs()
    {
        $blogs = Blog::get();
        return view('frontend.blog.blogs', compact('blogs'));
    }

    public function create()
    {
        $testimonials = Blog::pluck('title', 'id');
        return view('backend.blog.create', compact('testimonials'));
    }

    public function show($id)
    {
        // Convert slug-like URL to the real title
        $title = str_replace('_', ' ', $id);

        // Fetch the blog by its title
        $blog = Blog::where('id', $title)->firstOrFail();

        // Exclude the current blog using its numeric ID
        $recentPosts = Blog::where('id', '!=', $blog->id)
            ->latest()
            ->take(3)
            ->get();

        return view('frontend.blog.show', compact('blog', 'recentPosts'));
    }


    public function store(Request $request)
    {
        // ✅ Validate input, including faqs as an array of question/answer pairs
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tags' => 'nullable|string',   // comma separated string
            'image' => 'nullable|image',
        ]);

        // ✅ Handle tags (convert comma-separated to array)
        $data['tags'] = $data['tags']
            ? array_map('trim', explode(',', $data['tags']))
            : [];

        // ✅ Store image
        if ($request->hasFile('image')) {
            $data['image'] =
                $request->file('image')->store('blog_images', 'public');
        }
        // ✅ Save everything
        Blog::create($data);
        return redirect()
            ->route('blog-details.index')
            ->with('success', 'Detail created.');

    }

    public function edit(Blog $detail)
    {
        return view('backend.blog.edit', compact('detail'));
    }

    public function update(Request $request, Blog $detail)
    {
        // ✅ Validate input (same as store)
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tags' => 'nullable|string', // comma separated string
            'image' => 'nullable|image',
        ]);

        // ✅ Convert tags to array (same as store)
        $data['tags'] = $data['tags']
            ? array_map('trim', explode(',', $data['tags']))
            : [];

        // ✅ Replace image if a new one is uploaded

        if ($request->hasFile('image')) {
            if ($detail->image) {
                Storage::disk('public')->delete($detail->image);
            }
            $data['product_image'] =
                $request->file('image')->store('blog_images', 'public');
        }

        // ✅ Update the blog entry
        $detail->update($data);

        return redirect()
            ->route('blog-details.index')
            ->with('success', 'Detail updated.');
    }

    public function destroy(Blog $detail)
    {

        $detail->delete();
        return back()->with('success', 'Detail deleted.');
    }
}