<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Http\Controllers\Frontend\HomeController;


Route::post('/contact-enquiry', [HomeController::class, 'contactEnquiry'])->name('contact-enquiry');

Route::get('/blogs', [HomeController::class, 'index'])->name('blogs');

Route::get('/blogs/{slug}', [HomeController::class, 'blog_details'])->name('blogs.details');

