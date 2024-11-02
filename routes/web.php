<?php

use App\Models\post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Galuh wikri','title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'blog', 'posts' => Post::all() ]);
});

route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Single post' , 'post' => $post ]);
});

route::get('/authors/{user}', function (user $user) {

    return view('posts', ['title' => 'Articles by ' . $user->name, 'posts' => $user->posts ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});



