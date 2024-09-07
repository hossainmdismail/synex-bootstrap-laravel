<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class BlogController extends Controller
{
    public function blogs(Request $request)
    {
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Synex Digital Blogs | Insights on Our Latest Updates!';
        $seo_description = "Explore the Synex Digital blog for the latest insights and trends in web development, digital marketing, UI/UX design, and more. Our blog features expert advice, industry updates, and practical tips for businesses in the USA, Canada, Australia, UK, and Dubai. Stay informed and ahead of the curve with our expert content.";
        $seo_tags =
            'Synex Digital Blog,
            Web Development Insights,
            Digital Marketing Tips,
            UI/UX Design Trends,
            SaaS Development News,
            Graphics Design Updates,
            Mobile App Development Advice,
            Video Editing Techniques,
            IT Industry News,
            Blog for USA Canada Australia UK Dubai';
        $img = asset('fav-low.png');
        $url = env('APP_URL', 'https://synexdigital.com');

        SEOMeta::setCanonical($url . request()->getPathInfo());
        // Set SEO meta tags
        SEOTools::setTitle($seo_title);
        SEOTools::setDescription($seo_description);
        SEOTools::metatags()->setKeywords($seo_tags); // Set keywords
        SEOTools::opengraph()->setUrl(url()->current());

        //Open graph
        OpenGraph::addImage($img); // add image url
        OpenGraph::setTitle($seo_title); // define title
        OpenGraph::setDescription($seo_description);  // define description
        OpenGraph::setType('website');
        OpenGraph::setUrl(url()->current()); // define url
        OpenGraph::setSiteName($site_name); //define site_name

        //twitter
        TwitterCard::setUrl(url()->current()); // url of twitter card tag
        TwitterCard::setImage($img);

        // JsonLd for Blogs Page
        JsonLd::setType('WebPage');  // Indicating this is a standard webpage
        JsonLd::setTitle($seo_title);
        JsonLd::setDescription("The Synex Digital blog provides expert insights and updates on web development, digital marketing, UI/UX design, and more. Stay informed with our latest articles and industry news.");
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'en-US');  // Set the language of the page

        JsonLd::addValue('mainEntity', [
            "@type" => "Blog",  // Using Blog as the main entity type
            "name" => "Blogs",  // Name of the blog page
            "url" => url()->current(),  // URL of the blogs page
            "description" => $seo_description,  // Description of the blog page
            "publisher" => [
                "@type" => "Organization",
                "name" => "SynexDigital",
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $img,
                ]
            ]
        ]);

        JsonLd::addValue('breadcrumb', [
            "@type" => "BreadcrumbList",
            "itemListElement" => [
                [
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => "Home",
                    "item" => $url
                ],
                [
                    "@type" => "ListItem",
                    "position" => 2,
                    "name" => "Blogs",
                    "item" => url()->current()
                ]
            ]
        ]);

        JsonLd::addValue('publisher', [
            '@type' => 'Organization',
            'name' => "SynexDigital",
            'url' => $url,
            'logo' => [
                '@type' => 'ImageObject',
                'url' => $img,
                'caption' => $seo_title,
                'inLanguage' => 'en-US',
            ],
        ]);


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

        return view('Frontend.pages.blogs', [
            'bestBlog' => $bestBlog,
            'latestBlog' => $latestBlog,
            'pagination' => $pagination
        ]);
    }
    public function view($slug)
    {
        $blogUrl = app('domainName') . '/api/blogs/' . $slug;
        $blogResponse = Http::get($blogUrl);
        $blog = $blogResponse->json();

        if ($blogResponse->successful()) {
            $category = $blog['category'];
            $popuar = $blog['popular'];
            $related = $blog['related'];

            $site_name = env('APP_NAME', 'Synex Digital');
            $seo_title = $blog['content']['s_title'];
            $seo_description = $blog['content']['s_description'];
            $seo_tags = $blog['content']['s_tags'];
            $img = $blog['content']['image'];
            $brandImg = $blog['content']['image'];
            $url = env('APP_URL', 'https://synexdigital.com');

            SEOMeta::setCanonical($url . request()->getPathInfo());
            // Set SEO meta tags
            SEOTools::setTitle($seo_title);
            SEOTools::setDescription($seo_description);
            SEOTools::metatags()->setKeywords($seo_tags); // Set keywords
            SEOTools::opengraph()->setUrl(url()->current());

            //Open graph
            OpenGraph::addImage($img); // add image url
            OpenGraph::setTitle($seo_title); // define title
            OpenGraph::setDescription($seo_description);  // define description
            OpenGraph::setType('website');
            OpenGraph::setUrl(url()->current()); // define url
            OpenGraph::setSiteName($site_name); //define site_name

            //twitter
            TwitterCard::setUrl(url()->current()); // url of twitter card tag
            TwitterCard::setImage($img);

            // JsonLd for Blog View
            JsonLd::setType('BlogPosting');  // Indicates that this is a blog post
            JsonLd::setTitle($seo_title);  // Title of the blog post
            JsonLd::setDescription($seo_description);  // Description of the blog post
            JsonLd::setUrl(url()->current());  // URL of the blog post
            JsonLd::addValue('inLanguage', 'en-US');  // Set the language of the post

            JsonLd::addValue('author', [
                "@type" => "Person",
                "name" => $blog['content']['author'],  // Author's name
                "url" => 'https://synexdigital.com/about'  // Optional: URL to the author's profile
            ]);

            JsonLd::addValue('publisher', [
                "@type" => "Organization",
                "name" => "SynexDigital",  // Publisher name
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $brandImg,  // URL of the organization's logo
                ]
            ]);

            JsonLd::addValue('datePublished', $blog['content']['date']);  // Date when the blog post was published
            JsonLd::addValue('image', [
                "@type" => "ImageObject",
                "url" => $img,
                "caption" => $seo_title
            ]);

            // Instead of placing breadcrumb here, include it within mainEntityOfPage
            JsonLd::addValue('mainEntityOfPage', [
                "@type" => "WebPage",
                "@id" => url()->current(),  // URL of the blog post
                "breadcrumb" => [
                    "@type" => "BreadcrumbList",
                    "itemListElement" => [
                        [
                            "@type" => "ListItem",
                            "position" => 1,
                            "name" => "Home",
                            "item" => 'https://synexdigital.com'
                        ],
                        [
                            "@type" => "ListItem",
                            "position" => 2,
                            "name" => "Blogs",
                            "item" => 'https://synexdigital.com/blogs'
                        ],
                        [
                            "@type" => "ListItem",
                            "position" => 3,
                            "name" => $seo_title,  // Title of the blog post
                            "item" => url()->current()  // URL of the blog post
                        ]
                    ]
                ]
            ]);


            if ($blog['status'] == 1) {
                return view('Frontend.pages.blog', [
                    'categories' => $category,
                    'content' => $blog['content'],
                    'popuar' => $popuar,
                    'related' => $related,
                ]);
            } else {
                return abort(404);
            }
        }
    }
}
