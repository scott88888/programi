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
    Route::match(['get', 'post'], 'shop', 'shop');
    Route::match(['get', 'post'], 'ecommerce', 'ecommerce');
    Route::match(['get', 'post'], 'hr', 'hr');
    Route::match(['get', 'post'], 'finance', 'finance');
    Route::match(['get', 'post'], 'education', 'education');
    Route::match(['get', 'post'], 'waitplusegg', 'waitplusegg');
    Route::match(['get', 'post'], 'chatbot', 'chatbot');
    Route::match(['get', 'post'], 'form', 'form');
    Route::match(['get', 'post'], 'minigame', 'minigame');
    Route::match(['get', 'post'], 'customer', 'customer');
    Route::match(['get', 'post'], 'survery', 'survery');
});