<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function services()
    {
        return view('Frontend.pages.service.services');
    }
    public function service_software(){
        return view('Frontend.pages.service.service-software');
    }
    public function service_web_dev()
    {
        return view('Frontend.pages.service.service-web-dev');
    }
    public function service_uiux(){
        return view('Frontend.pages.service.service-uiux');
    }
    public function service_digital_marketing(){
        return view('Frontend.pages.service.service-digital-marketing');
    }
    public function service_graphics_design(){
        return view('Frontend.pages.service.service-graphics-design');
    }
    public function service_mobile_app(){
        return view('Frontend.pages.service.service-mobile-app');
    }
    public function service_saas(){
        return view('Frontend.pages.service.service-saas');
    }
    public function service_video_edit(){
        return view('Frontend.pages.service.service-video-edit');
    }
}
