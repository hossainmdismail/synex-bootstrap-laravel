<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class PrivacyController extends Controller
{
    public function index()
    {
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Privacy Policy | Synex Digital - Privacy Practices';
        $seo_description = "Read Synex Digital's Privacy Policy to understand how we protect your personal data and ensure privacy. Our policy outlines data collection, usage, and security practices for clients in the USA, Canada, Australia, UK, and Dubai. Learn more about our commitment to data protection.";
        $seo_tags =
            'Privacy Policy USA Canada Australia UK Dubai,
            Data Protection Practices,
            Privacy and Security Policy,
            Personal Data Usage,
            GDPR Compliance,
            CCPA Compliance,
            Privacy Rights,
            Synex Digital Privacy Policy,
            Data Collection and Security,
            Legal Information for Privacy';
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

        // JsonLd for Privacy Policy Page
        JsonLd::setType('WebPage');  // Indicates that this is a webpage
        JsonLd::setTitle($seo_title);  // Title of the privacy policy page
        JsonLd::setDescription("Synex Digital's Privacy Policy outlines how we protect and manage your personal data, including data collection, usage, and security practices. Learn about our commitment to privacy and compliance with data protection laws.");  // Description of the privacy policy page
        JsonLd::setUrl(url()->current());  // URL of the privacy policy page
        JsonLd::addValue('inLanguage', 'en-US');  // Set the language of the page

        // Adding Main Entity of the Page
        JsonLd::addValue('mainEntityOfPage', [
            "@type" => "WebPage",
            "@id" => url()->current(),  // URL of the privacy policy page
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
                    "name" => "Privacy Policy",
                    "item" => url()->current()
                ]
            ]
        ]);

        // Additional Information (optional)
        JsonLd::addValue('additionalType', 'http://schema.org/LegalDocument');  // Indicates that this page is a legal document



        return view('Frontend.pages.privacy');
    }
}
