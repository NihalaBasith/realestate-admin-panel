<?php

namespace App\Http\Controllers;
use App\Models\Metatags;
use App\Models\Pages;
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
}
