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
    public function index_new()
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

        return view('frontend.new', [
            'projects'  => $project,
            'blogs'      => $blog,
        ]);
    }
    public function index()
    {
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Top IT Agency for Web Development, App Development|Synex Digital';
        $seo_description = 'Get up to 20% off on web development, app development, digital marketing, UI/UX design, SaaS, custom software, and more at Synex Digital. We serve clients in the USA, Canada, Australia, UK, and Dubai with tailor-made digital solutions to elevate your business online. Contact us for a free quote today!';
        $seo_tags =
            'IT Agency USA Canada Australia UK Dubai,
            Web Development Services,
            App Development Experts,
            Digital Marketing Agency,
            UI/UX Design Company,
            SaaS Development,
            Custom Management Software,
            E-commerce Solutions,
            Graphic Design Services,
            Video Editing Services,
            Top IT Company,
            Synex Digital Services,
            20% Off IT Services';
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
        JsonLd::setDescription('Synex Digital offers a full range of IT services including web and app development, digital marketing, UI/UX design, SaaS development, and more, with up to 20% off on all services. We serve clients in the USA, Canada, Australia, UK, and Dubai.');
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'en-US');
        JsonLd::addValue('isPartOf', [
            "@type" => "Website",
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
                    "inLanguage" => 'en-US',
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
                'inLanguage' => 'en-US',
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

        return view('frontend.index', [
            'projects'  => $project,
            'blogs'      => $blog,
        ]);
    }

    public function getintouch()
    {
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Contact Synex Digital | Top IT Agency | Get a Quote';
        $seo_description = 'Get in touch with Synex Digital, a leading IT agency offering web development, app development, digital marketing, and more. Contact us today for a free quote and take advantage of up to 20% off on our services. Serving USA, Canada, Australia, UK, and Dubai.';
        $seo_tags =
            'Contact Synex Digital,
            IT Agency Contact,
            Get a Quote for IT Services,
            Web Development Consultation,
            App Development Experts Contact,
            Digital Marketing Services Inquiry,
            USA IT Agency Contact,
            IT Services USA Canada Australia UK Dubai,
            Get a Free Quote,
            Best IT Company Contact Page';
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

        // JsonLd for Contact Page
        JsonLd::setType('WebPage');
        JsonLd::setTitle($seo_title . ' - ' . $site_name);
        JsonLd::setDescription("Contact Synex Digital for a free quote and consultation on web development, app development, digital marketing, UI/UX design, and more. Serving clients in USA, Canada, Australia, UK, and Dubai.");
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'en-US');

        // Adding Publisher Information with Contact Information inside
        JsonLd::addValue('publisher', [
            "@type" => "Organization",
            "name" => $site_name,  // Publisher name
            "url" => $url,  // URL of the organization
            "logo" => [
                "@type" => "ImageObject",
                "url" => $img,  // URL of the organization's logo
                "caption" => "SynexDigital Logo"
            ],
            "contactPoint" => [
                "@type" => "ContactPoint",
                "telephone" => "+8801757-647319",  // Replace with your contact number
                "contactType" => "Customer Service",  // Type of contact
                "areaServed" => ["US", "CA", "AU", "GB", "AE"],  // Area served, e.g., Bangladesh
                "availableLanguage" => "en-US",  // Language available
                "email" => "office@synexdigital.com"
            ]
        ]);

        // Adding Breadcrumb
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
                    "name" => "Contact Us",
                    "item" => url()->current()
                ]
            ]
        ]);

        // Adding mainEntityOfPage
        JsonLd::addValue('mainEntityOfPage', [
            "@type" => "WebPage",
            "@id" => url()->current(),  // URL of the contact page
        ]);


        return view('frontend.pages.contact');
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
        JsonLd::addValue('inLanguage', 'en-US');  // Set the language of the page

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

        return view('frontend.pages.thankyou');
    }
}
