<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $project = [];
        $blog = [];

        //Project
        $projectUrl = app('domainName') . '/api/projects/item';
        $projectResponse = Http::get($projectUrl);
        if ($projectResponse->successful()) {
            $project = $projectResponse->json()['data'];
        }

        //Blog
        $blogUrl = app('domainName') . '/api/blogs/item';
        $blogResponse = Http::get($blogUrl);
        if ($blogResponse->successful()) {
            $blog = $blogResponse->json();
        }

        return view('Frontend.index', [
            'projects'  => $project,
            'blogs'      => $blog,
        ]);
    }

    public function getintouch()
    {
        return view('Frontend.pages.contact');
    }
    public function thanks()
    {
        $response = Http::get('http://127.0.0.1:8001/api/projects');
        dd($response->json()['data']);
        return view('Frontend.pages.thankyou');
    }
}
