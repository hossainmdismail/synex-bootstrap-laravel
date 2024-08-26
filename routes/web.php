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
Route::get('/service/{slug}', [ServiceController::class, 'service'])->name('service');
Route::get('/contact', [HomeController::class, 'getintouch'])->name('contact');
Route::get('/thankyou', [HomeController::class, 'thanks'])->name('thanks');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/privacy-policy', [PrivacyController::class, 'index'])->name('privacy');
