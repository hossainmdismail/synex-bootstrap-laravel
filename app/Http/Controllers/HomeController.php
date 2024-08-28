<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class HomeController extends Controller
{
    public function index()
    {
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Home';
        $seo_description = 'description';
        $seo_tags = 'Home';
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

        // JsonLd
        JsonLd::setType('WebPage');
        JsonLd::setTitle($seo_title);
        JsonLd::setDescription($seo_description);
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'bn-BD');
        JsonLd::addValue('isPartOf', [
            "@type" => "WebSite",
            "@id" => $url,
            "url" => $url,
            "name" => $site_name,
            "publisher" => [
                "@type" => "Organization",
                "name" => "SynexDigital",
                "url" => $url,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $img,
                    "caption" => $seo_description,
                    "inLanguage" => 'bn-BD',
                    "contentUrl" => url()->current(),
                ],
            ]
        ]);
        JsonLd::addValue('publisher', [
            '@id' => "$url/#organization",
            '@type' => 'Organization',
            'name' => "SynexDigital",
            'url' => $url,
            'logo' => [
                '@type' => 'ImageObject',
                'url' => $img,
                'caption' => $seo_description,
                'inLanguage' => 'bn-BD',
                'contentUrl' => url()->current(),
            ],
        ]);
        JsonLd::addValue('mainEntityOfPage', [
            "@type" => "WebPage",
            "@id" => url()->current(),
            "url" => url()->current(),
        ]);
        JsonLd::addValue('breadcrumb', [
            "@type" => "BreadcrumbList",
            "itemListElement" => [
                [
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => $seo_title,
                    "item" => url()->current()
                ]
            ]
        ]);

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
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Contact Us';
        $seo_description = 'description';
        $seo_tags = 'Contact';
        $img = asset('fav-low.png');
        $url = env('APP_URL', 'https://synexdigital.com');

        SEOMeta::setCanonical($url . request()->getPathInfo());
        // Set SEO meta tags
        SEOTools::setTitle($seo_title);
        SEOTools::setDescription($seo_description);
        SEOTools::metatags()->setKeywords($seo_tags); // Set keywords
        SEOTools::opengraph()->setUrl(url()->current());

        //Open graph
        OpenGraph::addImage($img);
        OpenGraph::setTitle($seo_title);
        OpenGraph::setDescription($seo_description);
        OpenGraph::setType('website');
        OpenGraph::setUrl(url()->current());
        OpenGraph::setSiteName($site_name);

        //twitter
        TwitterCard::setUrl(url()->current());
        TwitterCard::setImage($img);

        // JsonLd for Contact Page
        JsonLd::setType('WebPage');
        JsonLd::setTitle('Contact Us - SynexDigital');
        JsonLd::setDescription('Get in touch with SynexDigital for IT services and inquiries.');
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'bn-BD');

        // Adding Contact Information
        JsonLd::addValue('contactPoint', [
            "@type" => "ContactPoint",
            "telephone" => "+8801757-647319",  // Replace with your contact number
            "contactType" => "Customer Service",  // Type of contact
            "areaServed" => "USA",  // Area served, e.g., Bangladesh
            "availableLanguage" => "bn-BD"  // Language available
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
        JsonLd::addValue('mainEntityOfPage', [
            "@type" => "WebPage",
            "@id" => url()->current(),  // URL of the contact page
        ]);

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
                    "name" => "Contact Us",
                    "item" => url()->current()
                ]
            ]
        ]);

        return view('Frontend.pages.contact');
    }
    public function thanks()
    {
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Thank you';
        $seo_description = 'description';
        $seo_tags = 'Thank you';
        $img = asset('fav-low.png');
        $url = env('APP_URL', 'https://synexdigital.com');

        SEOMeta::setCanonical($url . request()->getPathInfo());
        // Set SEO meta tags
        SEOTools::setTitle($seo_title);
        SEOTools::setDescription($seo_description);
        SEOTools::metatags()->setKeywords($seo_tags); // Set keywords
        SEOTools::opengraph()->setUrl(url()->current());

        //Open graph
        OpenGraph::addImage($img);
        OpenGraph::setTitle($seo_title);
        OpenGraph::setDescription($seo_description);
        OpenGraph::setType('website');
        OpenGraph::setUrl(url()->current());
        OpenGraph::setSiteName($site_name);

        //twitter
        TwitterCard::setUrl(url()->current());
        TwitterCard::setImage($img);

        // JsonLd for Thank You Page
        JsonLd::setType('WebPage');  // Indicates that this is a webpage
        JsonLd::setTitle('Thank You - SynexDigital');  // Title of the thank you page
        JsonLd::setDescription('Thank you for your submission! We appreciate your interest in SynexDigital.');  // Description of the thank you page
        JsonLd::setUrl(url()->current());  // URL of the thank you page
        JsonLd::addValue('inLanguage', 'bn-BD');  // Set the language of the page

        // Adding Main Entity of the Page
        JsonLd::addValue('mainEntityOfPage', [
            "@type" => "WebPage",
            "@id" => url()->current(),  // URL of the thank you page
        ]);

        // Adding Publisher Information
        JsonLd::addValue('publisher', [
            "@type" => "Organization",
            "name" => "SynexDigital",  // Publisher name
            "url" => env('APP_URL'),  // URL of the organization
            "logo" => [
                "@type" => "ImageObject",
                "url" => $img,  // URL of the organization's logo
                "caption" => "SynexDigital Logo"
            ],
        ]);

        // Adding potential actions or next steps for the user
        JsonLd::addValue('potentialAction', [
            "@type" => "FollowAction",
            "target" => [
                "@type" => "WebPage",
                "url" => url('/contact'),  // URL for further contact or actions
            ],
            "name" => "Contact Us for More Information"  // Suggested action
        ]);

        // Adding Breadcrumb
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
                    "name" => "Thank You",
                    "item" => url()->current()
                ]
            ]
        ]);

        return view('Frontend.pages.thankyou');
    }
}
