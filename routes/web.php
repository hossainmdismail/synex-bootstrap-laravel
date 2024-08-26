<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
Route::get('/blog/{slugs}', [BlogController::class, 'view'])->name('blog.view');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'services'])->name('services');
Route::get('/contact', [HomeController::class, 'getintouch'])->name('contact');
Route::get('/thankyou', [HomeController::class, 'thanks'])->name('thanks');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/privacy-policy', [PrivacyController::class, 'index'])->name('privacy');

Route::get('/service/web-dev', [ServiceController::class, 'service_web_dev'])->name('service.web-dev');
Route::get('/service/software', [ServiceController::class, 'service_software'])->name('service.software');
Route::get('/service/uiux', [ServiceController::class, 'service_uiux'])->name('service.uiux');
Route::get('/service/digital-marketing', [ServiceController::class, 'service_digital_marketing'])->name('service.digital-marketing');
Route::get('/service/graphics-design', [ServiceController::class, 'service_graphics_design'])->name('service.graphics-design');
Route::get('/service/mobile-app', [ServiceController::class, 'service_mobile_app'])->name('service.mobile-app');
Route::get('/service/video-edit', [ServiceController::class, 'service_video_edit'])->name('service.video-edit');
Route::get('/service/saas', [ServiceController::class, 'service_saas'])->name('service.saas');



