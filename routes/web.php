<?php

use Illuminate\Support\Facades\Route;

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
