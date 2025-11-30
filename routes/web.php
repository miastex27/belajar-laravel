<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view('home', ['judul' => 'Home Page']);
});

Route::get('/posts', function () {

    $posts = Post::all();

    return view('posts', ['judul' => 'Blog Page', 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ['judul' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {

    return view('posts', ['judul' => count($user->posts) . ' Artikel by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/about', function () {
    return view('about', ['judul' => 'About Page']);
});


Route::get('/contact', function () {
    return view('contact', ['judul' => 'Contact Page']);
});
