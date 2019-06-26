<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function view(Request $request)
    {
        return view('createblog');
    }
}
