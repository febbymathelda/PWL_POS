<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\PageController;

//Route::get('/', [PageController::class, 'index']);

//Route::get('/about', function () {
//    return 'Nama : Febby Mathelda Silvya Mooy <br>
//            NIM  : 2241720067';
//});

//Route::get('/articles/{id}', function ($id) {
//    return 'Halaman Artikel dengan ID ' . $id;
//});

//Route::get('/user/{name}', function ($name = 'John') {
//    return 'Nama saya ' . $name;
//});

//use App\Http\Controllers\PageController;

//Route::get('/about', [PageController::class, 'about']);

//Route::get('/articles/{id}', [PageController::class, 'articles']);

//use App\Http\Controllers\HomeController;
//Route::get('/', HomeController::class);

//use App\Http\Controllers\AboutController;
//Route::get('/about', AboutController::class);

//use App\Http\Controllers\ArticleController;
//Route::get('/article/{id}', ArticleController::class);

//use App\Http\Controllers\PhotoController;

//Route::resource('photos', PhotoController::class)->only(['index', 'show']);
//Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);

//Route::get('/greeting', function () {
//    return view('hello', ['name' => 'Febby']);
//});
use App\Http\Controllers\WelcomeController;

Route::get('/greeting', [WelcomeController::class, 'greeting']);
