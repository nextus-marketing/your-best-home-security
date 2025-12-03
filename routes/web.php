<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'Frontend.home')->name('home');
Route::view('/home', 'Frontend.home-1')->name('home-1');
Route::view('/about', 'Frontend.about')->name('about');
Route::view('/contact', 'Frontend.contact')->name('contact');
Route::view('/privacy-policy', 'Frontend.privacy-policy')->name('privacy-policy');
Route::view('/terms-and-condition', 'Frontend.terms-and-condition')->name('terms-and-condition');

Route::view('/thankyou', 'Frontend.thankyou')->name('thankyou');

Route::fallback(function () {
    return response()->view('Error.404', [], 404);
});

require __DIR__.'/auth.php';
require __DIR__.'/backend.php';
require __DIR__.'/frontend.php';
