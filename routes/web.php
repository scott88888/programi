<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productControlles;


Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/productservice', function () {
    return view('productservice');
});
Route::get('/pastworks', function () {
    return view('pastworks');
});
Route::get('/faq', function () {
    return view('faq');
});

Route::get('/test', function () {
    return view('test');
});



Route::controller(productControlles::class)->group(function () {
    Route::match(['get', 'post'], '/shop', 'shop');
    Route::match(['get', 'post'], '/ecommerce', 'ecommerce');
    
});