<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->input('page', 1); // Default to page 1 if no page parameter is provided
        $project = [];
        $pagination = [];

        // Project API URL with page parameter
        $projectUrl = app('domainName') . '/api/projects?page=' . $page;
        $projectResponse = Http::get($projectUrl);

        if ($projectResponse->successful()) {
            $responseData = $projectResponse->json();
            $project = $responseData['data']; // Project data
            $pagination = $responseData['pagination']; // Pagination data
        }

        return view('Frontend.pages.projects', [
            'projects' => $project,
            'pagination' => $pagination
        ]);
    }
}
