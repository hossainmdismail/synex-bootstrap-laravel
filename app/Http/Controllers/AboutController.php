<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class AboutController extends Controller
{
    public function index()
    {
        $site_name = env('APP_NAME');
        $seo_title = 'About Us';
        $seo_description = 'description';
        $seo_tags = 'Home';
        $img = asset('fav-low.png');
        $url = env('APP_URL');

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

        // JsonLd for About Page
        JsonLd::setType('AboutPage');
        JsonLd::setTitle($seo_title);
        JsonLd::setDescription($seo_description);
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'bn-BD');
        JsonLd::addValue('mainEntityOfPage', [
            "@type" => "WebPage",
            "@id" => url()->current(),
            "url" => url()->current(),
            "name" => $seo_title,
            "description" => $seo_description,
        ]);
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
                    "name" => "About",
                    "item" => url()->current()
                ]
            ]
        ]);
        return view('Frontend.pages.about');
    }
}
