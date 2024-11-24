<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

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
            $site_name = env('APP_NAME', 'Synex Digital');
            $seo_title = 'Projects';
            $seo_description = 'Explore our projects and case studies at SynexDigital, showcasing our expertise in IT services.';
            $seo_tags = 'Projects';
            $img = asset('fav-low.png');
            $url = env('APP_URL', 'https://synexdigital.com');

            SEOMeta::setCanonical($url . request()->getPathInfo());
            // Set SEO meta tags
            SEOTools::setTitle($seo_title);
            SEOTools::setDescription($seo_description);
            SEOTools::metatags()->setKeywords($seo_tags); // Set keywords
            SEOTools::opengraph()->setUrl(url()->current());

            // Open Graph
            OpenGraph::addImage($img);
            OpenGraph::setTitle($seo_title);
            OpenGraph::setDescription($seo_description);
            OpenGraph::setType('website');
            OpenGraph::setUrl(url()->current());
            OpenGraph::setSiteName($site_name);

            // Twitter
            TwitterCard::setUrl(url()->current());
            TwitterCard::setImage($img);

            // JsonLd for Projects Page
            JsonLd::setType('WebPage');  // Indicates that this is a webpage
            JsonLd::setTitle('Our Projects - SynexDigital');  // Title of the projects page
            JsonLd::setDescription($seo_description);  // Description of the projects page
            JsonLd::setUrl(url()->current());  // URL of the projects page
            JsonLd::addValue('inLanguage', 'en-US');  // Set the language of the page

            // Adding Main Entity of the Page
            JsonLd::addValue('mainEntityOfPage', [
                "@type" => "WebPage",
                "@id" => url()->current(),  // URL of the projects page
            ]);

            // Adding Publisher Information
            JsonLd::addValue('publisher', [
                "@type" => "Organization",
                "name" => "SynexDigital",  // Publisher name
                "url" => $url,  // URL of the organization
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $img,  // URL of the organization's logo
                    "caption" => "SynexDigital Logo"
                ],
            ]);

            // Adding Breadcrumb
            JsonLd::addValue('breadcrumb', [
                "@type" => "BreadcrumbList",
                "itemListElement" => [
                    [
                        "@type" => "ListItem",
                        "position" => 1,
                        "name" => "Home",
                        "item" => $url  // Correctly using the $url variable
                    ],
                    [
                        "@type" => "ListItem",
                        "position" => 2,
                        "name" => "Projects",
                        "item" => url()->current()  // Current URL for the projects page
                    ]
                ]
            ]);


            $responseData = $projectResponse->json();
            $project = $responseData['data']; // Project data
            $pagination = $responseData['pagination']; // Pagination data
        }

        return view('frontend.pages.projects', [
            'projects' => $project,
            'pagination' => $pagination
        ]);
    }
}
