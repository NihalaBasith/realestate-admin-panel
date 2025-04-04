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
}
