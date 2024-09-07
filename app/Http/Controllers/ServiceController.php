<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class ServiceController extends Controller
{
    public function services()
    {
        // return view('Frontend.pages.service.services');
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Comprehensive IT Services | Synex Digital';
        $seo_description = "Explore Synex Digital's wide range of IT services, including web and app development, digital marketing, UI/UX design, SaaS development, custom management software, video editing, and more. Serving clients in the USA, Canada, Australia, UK, and Dubai with tailored digital solutions to grow your business online.";
        $seo_tags =
            'IT Services USA Canada Australia UK Dubai,
            Web Development Services,
            App Development Company,
            Digital Marketing Agency,
            UI/UX Design Services,
            SaaS Development Experts,
            Custom Software Solutions,
            E-commerce Development,
            Video Editing Services,
            Synex Digital Services,
            Professional IT Solutions,
            Top IT Agency,
            IT Services for Business Growth';
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

        // JsonLd for Services Page
        JsonLd::setType('WebPage');  // Changed from 'Service' to 'WebPage'
        JsonLd::setTitle($seo_title);
        JsonLd::setDescription("Synex Digital offers a comprehensive range of IT services including web development, app development, digital marketing, UI/UX design, SaaS development, custom software, and video editing. We serve clients in the USA, Canada, Australia, UK, and Dubai with innovative digital solutions.");
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'en-US');  // 'inLanguage' is appropriate here

        JsonLd::addValue('mainEntity', [
            "@type" => "Service",
            "name" => "IT Services",
            "provider" => [
                "@type" => "Organization",
                "name" => "SynexDigital",
                "url" => $url,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $img,
                ],
                "sameAs" => [
                    'https://www.facebook.com/synexdigital',
                    'https://www.linkedin.com/company/synex-digital',
                    'https://www.upwork.com/agencies/1705648766983696384/',
                ],
            ],
            "areaServed" => [
                [
                    "@type" => "Place",
                    "name" => "United States"
                ],
                [
                    "@type" => "Place",
                    "name" => "Canada"
                ],
                [
                    "@type" => "Place",
                    "name" => "United Kingdom"
                ],
                [
                    "@type" => "Place",
                    "name" => "Australia"
                ],
                [
                    "@type" => "Place",
                    "name" => "Dubai"
                ],
                [
                    "@type" => "Place",
                    "name" => "France"
                ],
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
                    "name" => "Services",
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

        return view('Frontend.pages.service.services');
    }
    public function service_software()
    {
        // return view('Frontend.pages.service.services');
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Custom Management Software Development | Synex Digital';
        $seo_description = 'Boost your business efficiency with custom management software solutions from Synex Digital. Specializing in ERP, CRM, project management, and business intelligence software, we serve clients in the USA, Canada, Australia, UK, and Dubai. Get a tailored solution to streamline your operations. Contact us for a free quote today!';
        $seo_tags =
        'Custom Management Software,
        ERP Software Development,
        CRM Development Services,
        Project Management Software,
        Business Intelligence Tools,
        IT Services USA Canada Australia UK Dubai,
        Management Software Solutions,
        Synex Digital Management Software,
        Custom Workflow Solutions,
        Enterprise Management Software,
        Best IT Company for Management Software';
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

        // JsonLd for Services Page
        JsonLd::setType('WebPage');  // Changed from 'Service' to 'WebPage'
        JsonLd::setTitle($seo_title);
        JsonLd::setDescription("Synex Digital offers custom management software development, including ERP, CRM, project management, and business intelligence solutions for clients in USA, Canada, Australia, UK, and Dubai.");
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'en-US');  // 'inLanguage' is appropriate here

        JsonLd::addValue('mainEntity', [
            "@type" => "Service",
            "name" => "IT Services",
            "provider" => [
                "@type" => "Organization",
                "name" => "SynexDigital",
                "url" => $url,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $img,
                ],
                "sameAs" => [
                    'https://www.facebook.com/synexdigital',
                    'https://www.linkedin.com/company/synex-digital',
                    'https://www.upwork.com/agencies/1705648766983696384/',
                ],
            ],
            "areaServed" => [
                [
                    "@type" => "Place",
                    "name" => "United States"
                ],
                [
                    "@type" => "Place",
                    "name" => "Canada"
                ],
                [
                    "@type" => "Place",
                    "name" => "United Kingdom"
                ],
                [
                    "@type" => "Place",
                    "name" => "Australia"
                ],
                [
                    "@type" => "Place",
                    "name" => "Dubai"
                ],
                [
                    "@type" => "Place",
                    "name" => "France"
                ],
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
                    "name" => "Services",
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
                'caption' => $seo_description,
                'inLanguage' => 'en-US',
            ],
        ]);

        return view('Frontend.pages.service.service-software');
    }
    public function service_web_dev()
    {
        // return view('Frontend.pages.service.services');
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Professional Web Development Services | Synex Digital';
        $seo_description = 'Transform your online presence with professional web development services from Synex Digital. We offer full-stack development, e-commerce solutions, CMS development, and more. Serving clients in the USA, Canada, Australia, UK, and Dubai. Contact us for a custom website that drives results!';
        $seo_tags =
            'Web Development Services USA Canada Australia UK Dubai,
            Full-Stack Development,
            Frontend and Backend Development,
            E-commerce Development,
            Custom CMS Development,
            WordPress Development Services,
            Responsive Website Design,
            Web Design and Development,
            Professional Website Development,
            Synex Digital Web Development,
            SEO-Optimized Websites';
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

        // JsonLd for Services Page
        JsonLd::setType('WebPage');  // Changed from 'Service' to 'WebPage'
        JsonLd::setTitle($seo_title);
        JsonLd::setDescription("Synex Digital offers professional web development services, including frontend, backend, full-stack development, e-commerce, and CMS solutions for clients in USA, Canada, Australia, UK, and Dubai.");
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'en-US');  // 'inLanguage' is appropriate here

        JsonLd::addValue('mainEntity', [
            "@type" => "Service",
            "name" => "IT Services",
            "provider" => [
                "@type" => "Organization",
                "name" => "SynexDigital",
                "url" => $url,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $img,
                ],
                "sameAs" => [
                    'https://www.facebook.com/synexdigital',
                    'https://www.linkedin.com/company/synex-digital',
                    'https://www.upwork.com/agencies/1705648766983696384/',
                ],
            ],
            "areaServed" => [
                [
                    "@type" => "Place",
                    "name" => "United States"
                ],
                [
                    "@type" => "Place",
                    "name" => "Canada"
                ],
                [
                    "@type" => "Place",
                    "name" => "United Kingdom"
                ],
                [
                    "@type" => "Place",
                    "name" => "Australia"
                ],
                [
                    "@type" => "Place",
                    "name" => "Dubai"
                ],
                [
                    "@type" => "Place",
                    "name" => "France"
                ],
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
                    "name" => "Services",
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
        return view('Frontend.pages.service.service-web-dev');
    }
    public function service_uiux()
    {
        // return view('Frontend.pages.service.services');
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Expert UI/UX Design Services | Synex Digital';
        $seo_description = "Enhance your digital products with expert UI/UX design services from Synex Digital. Our team creates intuitive, user-centric interfaces and engaging experiences tailored to your audience. Serving businesses in the USA, Canada, Australia, UK, and Dubai. Contact us for a design consultation!";
        $seo_tags =
            'UI/UX Design Services USA Canada Australia UK Dubai,
            User Interface Design,
            User Experience Design,
            UX Research and Testing,
            Wireframing and Prototyping,
            Interaction Design,
            Visual Design Services,
            Professional UX Design,
            Synex Digital UI/UX,
            Responsive Web Design,
            Mobile App UI/UX Design';
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

        // JsonLd for Services Page
        JsonLd::setType('WebPage');  // Changed from 'Service' to 'WebPage'
        JsonLd::setTitle($seo_title);
        JsonLd::setDescription("Synex Digital offers comprehensive UI/UX design services, including user research, wireframing, prototyping, interaction design, and visual design for clients in USA, Canada, Australia, UK, and Dubai.");
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'en-US');  // 'inLanguage' is appropriate here

        JsonLd::addValue('mainEntity', [
            "@type" => "Service",
            "name" => "IT Services",
            "provider" => [
                "@type" => "Organization",
                "name" => "SynexDigital",
                "url" => $url,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $img,
                ],
                "sameAs" => [
                    'https://www.facebook.com/synexdigital',
                    'https://www.linkedin.com/company/synex-digital',
                    'https://www.upwork.com/agencies/1705648766983696384/',
                ],
            ],
            "areaServed" => [
                [
                    "@type" => "Place",
                    "name" => "United States"
                ],
                [
                    "@type" => "Place",
                    "name" => "Canada"
                ],
                [
                    "@type" => "Place",
                    "name" => "United Kingdom"
                ],
                [
                    "@type" => "Place",
                    "name" => "Australia"
                ],
                [
                    "@type" => "Place",
                    "name" => "Dubai"
                ],
                [
                    "@type" => "Place",
                    "name" => "France"
                ],
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
                    "name" => "Services",
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
                'caption' => $seo_description,
                'inLanguage' => 'en-US',
            ],
        ]);
        return view('Frontend.pages.service.service-uiux');
    }
    public function service_digital_marketing()
    {
        // return view('Frontend.pages.service.services');
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Comprehensive Digital Marketing Services | Synex Digital';
        $seo_description = "Boost your online presence with Synex Digital's expert digital marketing services, including SEO, PPC, social media marketing, content marketing, and more. Serving clients in the USA, Canada, Australia, UK, and Dubai with tailored strategies to grow your business. Contact us for a free consultation!";
        $seo_tags =
            'Digital Marketing Services USA Canada Australia UK Dubai,
            SEO Services,
            PPC Campaign Management,
            Social Media Marketing,
            Content Marketing Strategy,
            Google Ads Management,
            Facebook and Instagram Ads,
            YouTube Marketing,
            E-commerce SEO,
            Synex Digital Digital Marketing,
            Online Marketing Experts';
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

        // JsonLd for Services Page
        JsonLd::setType('WebPage');  // Changed from 'Service' to 'WebPage'
        JsonLd::setTitle($seo_title);
        JsonLd::setDescription("Synex Digital provides comprehensive digital marketing services, including SEO, PPC, social media marketing, content marketing, and more, tailored for clients in USA, Canada, Australia, UK, and Dubai.");
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'en-US');  // 'inLanguage' is appropriate here

        JsonLd::addValue('mainEntity', [
            "@type" => "Service",
            "name" => "IT Services",
            "provider" => [
                "@type" => "Organization",
                "name" => "SynexDigital",
                "url" => $url,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $img,
                ],
                "sameAs" => [
                    'https://www.facebook.com/synexdigital',
                    'https://www.linkedin.com/company/synex-digital',
                    'https://www.upwork.com/agencies/1705648766983696384/',
                ],
            ],
            "areaServed" => [
                [
                    "@type" => "Place",
                    "name" => "United States"
                ],
                [
                    "@type" => "Place",
                    "name" => "Canada"
                ],
                [
                    "@type" => "Place",
                    "name" => "United Kingdom"
                ],
                [
                    "@type" => "Place",
                    "name" => "Australia"
                ],
                [
                    "@type" => "Place",
                    "name" => "Dubai"
                ],
                [
                    "@type" => "Place",
                    "name" => "France"
                ],
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
                    "name" => "Services",
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
                'caption' => $seo_description,
                'inLanguage' => 'en-US',
            ],
        ]);
        return view('Frontend.pages.service.service-digital-marketing');
    }
    public function service_graphics_design()
    {
        // return view('Frontend.pages.service.services');
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Professional Graphics Design Services | Synex Digital';
        $seo_description = "Enhance your brand with Synex Digital's expert graphics design services. We offer comprehensive solutions including branding, print design, digital design, and custom illustrations. Serving clients in the USA, Canada, Australia, UK, and Dubai. Contact us for a free design consultation!";
        $seo_tags =
            'Graphics Design Services USA Canada Australia UK Dubai,
            Branding and Identity Design,
            Print Design Services,
            Digital Graphics Design,
            Custom Illustrations,
            3D Design and Modeling,
            Logo Design,
            Brochure and Flyer Design,
            Social Media Graphics,
            Synex Digital Graphics Design,
            Professional Graphic Designers';
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

        // JsonLd for Services Page
        JsonLd::setType('WebPage');  // Changed from 'Service' to 'WebPage'
        JsonLd::setTitle($seo_title);
        JsonLd::setDescription("Synex Digital provides top-notch graphics design services, including branding, print design, digital design, custom illustrations, and more. We serve clients in the USA, Canada, Australia, UK, and Dubai with creative solutions to elevate your brand.");
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'en-US');  // 'inLanguage' is appropriate here

        JsonLd::addValue('mainEntity', [
            "@type" => "Service",
            "name" => "IT Services",
            "provider" => [
                "@type" => "Organization",
                "name" => "SynexDigital",
                "url" => $url,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $img,
                ],
                "sameAs" => [
                    'https://www.facebook.com/synexdigital',
                    'https://www.linkedin.com/company/synex-digital',
                    'https://www.upwork.com/agencies/1705648766983696384/',
                ],
            ],
            "areaServed" => [
                [
                    "@type" => "Place",
                    "name" => "United States"
                ],
                [
                    "@type" => "Place",
                    "name" => "Canada"
                ],
                [
                    "@type" => "Place",
                    "name" => "United Kingdom"
                ],
                [
                    "@type" => "Place",
                    "name" => "Australia"
                ],
                [
                    "@type" => "Place",
                    "name" => "Dubai"
                ],
                [
                    "@type" => "Place",
                    "name" => "France"
                ],
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
                    "name" => "Services",
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
        return view('Frontend.pages.service.service-graphics-design');
    }
    public function service_mobile_app()
    {
        // return view('Frontend.pages.service.services');
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Top Mobile App Development Services | iOS,Android | Synex Digital';
        $seo_description = "Elevate your business with Synex Digital’s mobile app development services. We specialize in iOS, Android, and cross-platform apps, providing custom solutions for clients in the USA, Canada, Australia, UK, and Dubai. Contact us to create a powerful mobile app tailored to your needs!";
        $seo_tags =
            'Mobile App Development Services USA Canada Australia UK Dubai,
            iOS App Development,
            Android App Development,
            Cross-Platform App Development,
            Custom Mobile Apps,
            Flutter and React Native Development,
            Mobile App Design and Development,
            App Integration Services,
            Mobile App Maintenance,
            Synex Digital Mobile Apps,
            Professional App Development';
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

        // JsonLd for Services Page
        JsonLd::setType('WebPage');  // Changed from 'Service' to 'WebPage'
        JsonLd::setTitle($seo_title);
        JsonLd::setDescription( "Synex Digital offers expert mobile app development services, including iOS, Android, and cross-platform solutions. We provide custom app development for clients in USA, Canada, Australia, UK, and Dubai. Contact us for a tailored mobile app that meets your business needs.");
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'en-US');  // 'inLanguage' is appropriate here

        JsonLd::addValue('mainEntity', [
            "@type" => "Service",
            "name" => "IT Services",
            "provider" => [
                "@type" => "Organization",
                "name" => "SynexDigital",
                "url" => $url,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $img,
                ],
                "sameAs" => [
                    'https://www.facebook.com/synexdigital',
                    'https://www.linkedin.com/company/synex-digital',
                    'https://www.upwork.com/agencies/1705648766983696384/',
                ],
            ],
            "areaServed" => [
                [
                    "@type" => "Place",
                    "name" => "United States"
                ],
                [
                    "@type" => "Place",
                    "name" => "Canada"
                ],
                [
                    "@type" => "Place",
                    "name" => "United Kingdom"
                ],
                [
                    "@type" => "Place",
                    "name" => "Australia"
                ],
                [
                    "@type" => "Place",
                    "name" => "Dubai"
                ],
                [
                    "@type" => "Place",
                    "name" => "France"
                ],
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
                    "name" => "Services",
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
        return view('Frontend.pages.service.service-mobile-app');
    }
    public function service_saas()
    {
        // return view('Frontend.pages.service.services');
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Custom SaaS Development Services | Synex Digital';
        $seo_description = "Transform your business with Synex Digital’s custom SaaS development services. We offer scalable SaaS solutions, including multi-tenant architecture, subscription management, and cloud infrastructure management. Serving clients in the USA, Canada, Australia, UK, and Dubai. Contact us to build your next SaaS product!";
        $seo_tags =
            'SaaS Development Services USA Canada Australia UK Dubai,
            Custom SaaS Solutions,
            Scalable SaaS Development,
            Multi-Tenant SaaS Architecture,
            SaaS Product Design,
            Cloud Infrastructure Management,
            SaaS Subscription Management,
            SaaS Integration Services,
            Synex Digital SaaS Development,
            Professional SaaS Development';
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

        // JsonLd for Services Page
        JsonLd::setType('WebPage');  // Changed from 'Service' to 'WebPage'
        JsonLd::setTitle($seo_title);
        JsonLd::setDescription("Synex Digital offers expert SaaS development services including custom SaaS solutions, multi-tenant architecture, subscription management, and cloud infrastructure management. We provide scalable and tailored SaaS products for clients in USA, Canada, Australia, UK, and Dubai.");
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'en-US');  // 'inLanguage' is appropriate here

        JsonLd::addValue('mainEntity', [
            "@type" => "Service",
            "name" => "IT Services",
            "provider" => [
                "@type" => "Organization",
                "name" => "SynexDigital",
                "url" => $url,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $img,
                ],
                "sameAs" => [
                    'https://www.facebook.com/synexdigital',
                    'https://www.linkedin.com/company/synex-digital',
                    'https://www.upwork.com/agencies/1705648766983696384/',
                ],
            ],
            "areaServed" => [
                [
                    "@type" => "Place",
                    "name" => "United States"
                ],
                [
                    "@type" => "Place",
                    "name" => "Canada"
                ],
                [
                    "@type" => "Place",
                    "name" => "United Kingdom"
                ],
                [
                    "@type" => "Place",
                    "name" => "Australia"
                ],
                [
                    "@type" => "Place",
                    "name" => "Dubai"
                ],
                [
                    "@type" => "Place",
                    "name" => "France"
                ],
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
                    "name" => "Services",
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
        return view('Frontend.pages.service.service-saas');
    }
    public function service_video_edit()
    {
        // return view('Frontend.pages.service.services');
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Professional Video Editing Services | Synex Digital';
        $seo_description = "Enhance your video content with Synex Digital’s expert video editing services. We specialize in post-production, motion graphics, and social media video editing. Serving clients in the USA, Canada, Australia, UK, and Dubai. Contact us to get high-quality video edits that captivate your audience!";
        $seo_tags =
            'Video Editing Services USA Canada Australia UK Dubai,
            Post-Production Video Editing,
            Motion Graphics and Animation,
            Social Media Video Editing,
            Professional Video Editing,
            Video Production Services,
            Custom Video Editing,
            Synex Digital Video Editing,
            High-Quality Video Edits,
            Corporate Video Editing,
            Video Editing for Social Media';
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

        // JsonLd for Services Page
        JsonLd::setType('WebPage');  // Changed from 'Service' to 'WebPage'
        JsonLd::setTitle($seo_title);
        JsonLd::setDescription("Synex Digital provides professional video editing services, including post-production, motion graphics, and social media video editing. We deliver high-quality video content for clients in the USA, Canada, Australia, UK, and Dubai. Contact us for exceptional video editing solutions.");
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'en-US');  // 'inLanguage' is appropriate here

        JsonLd::addValue('mainEntity', [
            "@type" => "Service",
            "name" => "IT Services",
            "provider" => [
                "@type" => "Organization",
                "name" => "SynexDigital",
                "url" => $url,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $img,
                ],
                "sameAs" => [
                    'https://www.facebook.com/synexdigital',
                    'https://www.linkedin.com/company/synex-digital',
                    'https://www.upwork.com/agencies/1705648766983696384/',
                ],
            ],
            "areaServed" => [
                [
                    "@type" => "Place",
                    "name" => "United States"
                ],
                [
                    "@type" => "Place",
                    "name" => "Canada"
                ],
                [
                    "@type" => "Place",
                    "name" => "United Kingdom"
                ],
                [
                    "@type" => "Place",
                    "name" => "Australia"
                ],
                [
                    "@type" => "Place",
                    "name" => "Dubai"
                ],
                [
                    "@type" => "Place",
                    "name" => "France"
                ],
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
                    "name" => "Services",
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
        return view('Frontend.pages.service.service-video-edit');
    }
}
