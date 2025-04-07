<?php

namespace App\Http\Controllers;
use App\Models\Metatags;
use App\Models\Pages;
use App\Models\Blogs;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function getPages()
{
    $pages = Pages::all();
    return view('admin.page.index', compact('pages'));
}
public function createPage()
    {
        return view('admin.page.create');
    }
public function getMetatag()
{
    // Fetch all blogs from the database
    $metatag = Metatags::all();
    return view('admin.page.index', compact('metatag'));
}

public function createPageSave(Request $request)
{
    $data = $request->validate([
        'page_name' => 'required|string|max:255',
        'heading' => 'nullable|string',
        'subheading' => 'nullable|string',
        'content' => 'nullable|string',
        'banner_image' => 'nullable|image',
        'section2_heading' => 'nullable|string',
        'section2_subheading' => 'nullable|string',
        'section2_content' => 'nullable|string',
        'section2_image' => 'nullable|image',
    ]);

    // Handle file uploads if any
    if ($request->hasFile('banner_image')) {
        $data['banner_image'] = $request->file('banner_image')->store('banners', 'public');
    }

    if ($request->hasFile('section2_image')) {
        $data['section2_image'] = $request->file('section2_image')->store('sections', 'public');
    }

    Pages::create($data);

    return redirect()->route('admin.page.index')->with('success', 'Page created successfully!');
}
public function editPage($id)
{
    $page = Pages::findOrFail($id); // fetch the page or throw 404
    return view('admin.page.update', compact('page'));
}

public function updatePage(Request $request, $id)
{
    $page = Pages::findOrFail($id);

    $data = $request->validate([
        'page_name' => 'required|string|max:255',
        'heading' => 'nullable|string',
        'subheading' => 'nullable|string',
        'content' => 'nullable|string',
        'banner_image' => 'nullable|image',
        'section2_heading' => 'nullable|string',
        'section2_subheading' => 'nullable|string',
        'section2_content' => 'nullable|string',
        'section2_image' => 'nullable|image',
    ]);

    // Handle new file uploads if provided
    if ($request->hasFile('banner_image')) {
        $data['banner_image'] = $request->file('banner_image')->store('banners', 'public');
    }

    if ($request->hasFile('section2_image')) {
        $data['section2_image'] = $request->file('section2_image')->store('sections', 'public');
    }

    $page->update($data);

    return redirect()->route('admin.pages')->with('success', 'Page updated successfully!');
}

public function viewPage($id)
{
    $page = Pages::findOrFail($id);
    return view('admin.page.view', compact('page'));
}
public function deletePage($id)
{
    $page = Pages::findOrFail($id);

    // Optionally delete images if needed
    if ($page->banner_image) {
        Storage::disk('public')->delete($page->banner_image);
    }

    if ($page->section2_image) {
        Storage::disk('public')->delete($page->section2_image);
    }

    $page->delete();

    return redirect()->route('admin.page.index')->with('success', 'Page deleted successfully!');
}

// blog section
public function getBlogs()
{
    $blogs = Blogs::all();
    return view('admin.blog.index', compact('blogs'));
}
public function createBlog()
    {
        return view('admin.blog.create');
    }
}
