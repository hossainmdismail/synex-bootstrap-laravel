<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{
    public function blogs()
    {
        return view('Frontend.pages.blogs');
    }
    public function view($slug)
    {
        //dd($slug);
        return view('Frontend.pages.blog');
    }
}
