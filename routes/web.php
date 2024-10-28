<?php

use App\Models\post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Galuh wikri','title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'posts', 'posts' => Post::all() ]);
});

route::get('posts/{slug}', function ($slug) {
    $post = Post::find($slug);
    return view('post', ['title' => 'Single post' , 'post' => $post ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

