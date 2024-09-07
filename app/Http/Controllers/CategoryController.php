<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class CategoryController extends Controller
{
    public function index(Request $request, $slug)
    {
        $page = $request->input('page', 1);
        $blogUrl = app('domainName') . '/api/category/' . $slug . '?page=' . $page;
        $blogResponse = Http::get($blogUrl);
        $blog = $blogResponse->json();

        if ($blogResponse->successful()) {
            if ($blog['status'] == 1) {
                $category = $blog['category'];
                $categoryList = $blog['category_list'];
                $blogs = $blog['blog'];
                $pagination = $blog['pagination']; // Pagination data
                //dd($category['name']);

                $site_name = env('APP_NAME', 'Synex Digital');
                $seo_title = $category['s_title'];
                $seo_description = $category['s_description'];
                $seo_tags = $category['s_tags'];
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

                // JsonLd for Category Show Page
                JsonLd::setType('WebPage');
                JsonLd::setTitle($seo_title);
                JsonLd::setDescription($seo_description);
                JsonLd::setUrl(url()->current());
                JsonLd::addValue('inLanguage', 'en-US');

                // Adding Main Entity of the Page
                JsonLd::addValue('mainEntityOfPage', [
                    "@type" => "WebPage",
                    "@id" => url()->current(),
                ]);

                // Adding Publisher Information
                JsonLd::addValue('publisher', [
                    "@type" => "Organization",
                    "name" => "SynexDigital",
                    "url" => $url,
                    "logo" => [
                        "@type" => "ImageObject",
                        "url" => $img,  // URL of the organization's logo
                        "caption" => "SynexDigital Logo"
                    ],
                ]);

                JsonLd::addValue('description', 'Explore all posts in the ' . $category['name'] . ' category at SynexDigital.');

                // Optional: Adding Breadcrumb
                JsonLd::addValue('breadcrumb', [
                    "@type" => "BreadcrumbList",
                    "itemListElement" => [
                        [
                            "@type" => "ListItem",
                            "position" => 1,
                            "name" => "Home",
                            "item" => env('APP_URL')
                        ],
                        [
                            "@type" => "ListItem",
                            "position" => 2,
                            "name" => $category['name'],  // Title of the category
                            "item" => url()->current()
                        ]
                    ]
                ]);


                return view('Frontend.pages.category', [
                    'category' => $category,
                    'categories' => $categoryList,
                    'blogs' => $blogs,
                    'pagination' => $pagination
                ]);
            } else {
                return abort(404);
            }
        } else {
            return abort(404);
        }
    }
}
