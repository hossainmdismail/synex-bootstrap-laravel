<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{
    public function blogs(Request $request)
    {
        $page = $request->input('page', 1); // Default to page 1 if no page parameter is provided
        $bestBlog = [];
        $latestBlog = [];
        $pagination = [];

        // Project API URL with page parameter
        $blogUrl = app('domainName') . '/api/blogs?page=' . $page;
        $blogResponse = Http::get($blogUrl);

        if ($blogResponse->successful()) {
            $responseData = $blogResponse->json();
            $latestBlog = $responseData['latest']; // Blog data
            $bestBlog = $responseData['bests']; // Blog data
            $pagination = $responseData['pagination']; // Pagination data
        }
        //dd($bestBlog);

        return view('Frontend.pages.blogs', [
            'bestBlog' => $bestBlog,
            'latestBlog' => $latestBlog,
            'pagination' => $pagination
        ]);
    }
    public function view($slug)
    {
        //dd($slug);
        return view('Frontend.pages.blog');
    }
}
