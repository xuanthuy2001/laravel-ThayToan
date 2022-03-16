<?php

use Illuminate\Support\Facades\Route;
use \App\Http\controllers\School;

// Route::get('/blog', function () {
//     return view('blog');
// });
// Route::get('/blog-post', function () {
//     return view('blog-post');
// });

// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });
Route::get('/blog', [School::class, 'blog']);
Route::get('/blog-post', [School::class, 'blog_post']);
Route::get('/login', [School::class, 'login']);
Route::get('/register', [School::class, 'register']);