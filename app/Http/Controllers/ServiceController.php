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
        $seo_title = 'Services';
        $seo_description = 'description';
        $seo_tags = 'Service';
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
        JsonLd::setDescription($seo_description);
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'bn-BD');  // 'inLanguage' is appropriate here

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
                    "name" => "Germany"
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
                'inLanguage' => 'bn-BD',
            ],
        ]);

        return view('Frontend.pages.service.services');
    }
    public function service_software()
    {
        // return view('Frontend.pages.service.services');
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Management Software';
        $seo_description = 'We create remarkable designs that convert into tangible results. Our bespoke graphic design agency services can help you build a consistent brand image across all touchpoints, increase brand engagement and improve conversion rates.';
        $seo_tags = 'Service';
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
        JsonLd::setDescription($seo_description);
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'bn-BD');  // 'inLanguage' is appropriate here

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
                    "name" => "Germany"
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
                'inLanguage' => 'bn-BD',
            ],
        ]);

        return view('Frontend.pages.service.service-software');
    }
    public function service_web_dev()
    {
        // return view('Frontend.pages.service.services');
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Web Development';
        $seo_description = 'We Build Custom Websites That Not Only Look Amazing but Also Deliver Outstanding Performance and User Experience, Helping Your Business Stand Out and Succeed Online. Lorem ipsum dolor sit amet consectetur. Ac eros egestas ornare volutpat cras congue';
        $seo_tags = 'Service';
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
        JsonLd::setDescription($seo_description);
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'bn-BD');  // 'inLanguage' is appropriate here

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
                    "name" => "Germany"
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
                'inLanguage' => 'bn-BD',
            ],
        ]);
        return view('Frontend.pages.service.service-web-dev');
    }
    public function service_uiux()
    {
        // return view('Frontend.pages.service.services');
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'UI/UX DESIGN';
        $seo_description = 'Craft applications that meet your user needs and evolve with your business. We provide UI/UX design services to help you create exceptional user experiences. Our approach is driven by current design trends and refined by real user feedback';
        $seo_tags = 'Service';
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
        JsonLd::setDescription($seo_description);
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'bn-BD');  // 'inLanguage' is appropriate here

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
                    "name" => "Germany"
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
                'inLanguage' => 'bn-BD',
            ],
        ]);
        return view('Frontend.pages.service.service-uiux');
    }
    public function service_digital_marketing()
    {
        // return view('Frontend.pages.service.services');
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Digital Marketing';
        $seo_description = 'A strong marketing strategy helps your business build trust and brand loyalty, ensuring repeat customers and long-term success. Whether it’s through a strategic Google Ads Campaign, SEO-focused content, tailored email marketing, or a combination of all three, our range of digital marketing services put you in front of the right customers.';
        $seo_tags = 'Service';
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
        JsonLd::setDescription($seo_description);
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'bn-BD');  // 'inLanguage' is appropriate here

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
                    "name" => "Germany"
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
                'inLanguage' => 'bn-BD',
            ],
        ]);
        return view('Frontend.pages.service.service-digital-marketing');
    }
    public function service_graphics_design()
    {
        // return view('Frontend.pages.service.services');
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Graphics Design';
        $seo_description = 'At 4D Web Design, we excel in delivering bespoke graphic design solutions. Our service includes concept development, brand identity, web design, and print materials, all crafted with a keen eye for detail and creativity.';
        $seo_tags = 'Service';
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
        JsonLd::setDescription($seo_description);
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'bn-BD');  // 'inLanguage' is appropriate here

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
                    "name" => "Germany"
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
                'inLanguage' => 'bn-BD',
            ],
        ]);
        return view('Frontend.pages.service.service-graphics-design');
    }
    public function service_mobile_app()
    {
        // return view('Frontend.pages.service.services');
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Mobile App Development';
        $seo_description = 'Build stunning mobile apps that offer sophisticated features and drive user adoption. Device compatibility, interoperability, scalability —we cover it all';
        $seo_tags = 'Service';
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
        JsonLd::setDescription($seo_description);
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'bn-BD');  // 'inLanguage' is appropriate here

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
                    "name" => "Germany"
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
                'inLanguage' => 'bn-BD',
            ],
        ]);
        return view('Frontend.pages.service.service-mobile-app');
    }
    public function service_saas()
    {
        // return view('Frontend.pages.service.services');
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'SaaS Development';
        $seo_description = "Whether you're starting from square one or transitioning to a software-as-a-service model, our SaaS application development company brings decades of hands-on experience developing bespoke SaaS solutions end-to-end and sustaining them through our dedicated team approach.";
        $seo_tags = 'Service';
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
        JsonLd::setDescription($seo_description);
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'bn-BD');  // 'inLanguage' is appropriate here

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
                    "name" => "Germany"
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
                'inLanguage' => 'bn-BD',
            ],
        ]);
        return view('Frontend.pages.service.service-saas');
    }
    public function service_video_edit()
    {
        // return view('Frontend.pages.service.services');
        $site_name = env('APP_NAME', 'Synex Digital');
        $seo_title = 'Video Editing';
        $seo_description = 'We create professional, goal-orientated, and impactful animated product explainer videos, which engage, inspire, and attract your target audience. Catch your audiences’ attention today with Squideo!';
        $seo_tags = 'Service';
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
        JsonLd::setDescription($seo_description);
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('inLanguage', 'bn-BD');  // 'inLanguage' is appropriate here

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
                    "name" => "Germany"
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
                'inLanguage' => 'bn-BD',
            ],
        ]);
        return view('Frontend.pages.service.service-video-edit');
    }
}
