<?php

use App\Models\post;
use App\Models\User;
use App\Models\Category;
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
//    $posts = post::with(['category', 'author'])->latest()->get();
    $posts = Post::latest()->get();
    return view('post', ['title' => 'Single post' , 'post' => $post ]);
});

route::get('/authors/{user:username}', function (user $user) {
     $posts = $user->posts->load('category', 'author');
    return view('posts', ['title' => count($user->posts). 'Articles by ' . $user->name, 'posts' => $user->posts ]);
});

route::get('/categories/{category:slug}', function (Category $category) {
//     $posts = $category->posts->load('category', 'author');
    return view('posts', ['title' => 'Articcles in : ' . $category->name, 'posts' => $category->posts ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});



