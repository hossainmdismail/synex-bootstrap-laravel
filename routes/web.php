<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SiteMapController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\TermsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home'); //Done

Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs'); //Done
Route::get('/blog/{slugs}', [BlogController::class, 'view'])->name('blog.view'); //Done
Route::get('/about', [AboutController::class, 'index'])->name('about'); //Done
Route::get('/contact', [HomeController::class, 'getintouch'])->name('contact'); //Done
Route::get('/thankyou', [HomeController::class, 'thanks'])->name('thanks'); //Done
Route::get('/projects', [ProjectController::class, 'index'])->name('projects'); //Done
Route::get('/privacy-policy', [PrivacyController::class, 'index'])->name('privacy'); //done
Route::get('/terms-conditions', [TermsController::class, 'index'])->name('terms'); //done
Route::get('/category/{slug}', [CategoryController::class, 'index'])->name('category'); //Done
Route::get('/generate/sitemap', [SiteMapController::class, 'sitemap'])->name('sitemap');
Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule'); //Done
Route::post('/subscribe', [SubscribeController::class, 'index'])->name('subscribe'); //Done
Route::post('/form-submit', [ContactFormController::class, 'index'])->name('contact.submit');

Route::get('/services', [ServiceController::class, 'services'])->name('services'); //Done
Route::prefix('service')->group(function () {
    Route::get('/web-dev', [ServiceController::class, 'service_web_dev'])->name('service.web-dev');
    Route::get('/software', [ServiceController::class, 'service_software'])->name('service.software');
    Route::get('/uiux', [ServiceController::class, 'service_uiux'])->name('service.uiux');
    Route::get('/digital-marketing', [ServiceController::class, 'service_digital_marketing'])->name('service.digital-marketing');
    Route::get('/graphics-design', [ServiceController::class, 'service_graphics_design'])->name('service.graphics-design');
    Route::get('/mobile-app', [ServiceController::class, 'service_mobile_app'])->name('service.mobile-app');
    Route::get('/video-edit', [ServiceController::class, 'service_video_edit'])->name('service.video-edit');
    Route::get('/saas', [ServiceController::class, 'service_saas'])->name('service.saas');
});
