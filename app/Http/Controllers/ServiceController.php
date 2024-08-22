<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function services()
    {
        return view('Frontend.pages.services');
    }
    public function service($slug)
    {
        return view('Frontend.pages.service');
    }
}
