<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home', ['judul' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('blog', ['judul' => 'Blog Page']);
});
Route::get('/about', function () {
    return view('about', ['judul' => 'About Page']);
});
Route::get('/contact', function () {
    return view('contact', ['judul' => 'Contact Page']);
});
