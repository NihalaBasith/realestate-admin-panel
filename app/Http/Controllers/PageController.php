<?php

namespace App\Http\Controllers;
use App\Models\Metatag;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getMetatag()
    {
        // Fetch all blogs from the database
        $metatag = Metatag::all();
        return view('admin.page.index', compact('metatag'));
    }
}
