<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/hello', function () {
//     return 'Hello world';
// });

// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/about', function () {
//     return '2341720035 Ghoffar Abdul';
// });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function
// ($postId, $commentId) {
// return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/articles/{id}', function
// ($articlesId,) {
// return 'Halaman Artikel dengan ID '.$articlesId;
// });

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

// Route::get('/user/{name?}', function ($name='Jhon') {
//     return 'Nama saya '.$name;
// });

// Route::get('/user/profile', function() {
//     //
// })->name('profile');

// Route::get('/hello', [WelcomeController::class,'hello']);
// Route::get('/', [WelcomeController::class,'index']);
// Route::get('/about', [WelcomeController::class,'about']);
// Route::get('/articles/{id}', [WelcomeController::class,'articles']);

// Route::resource('photos', PhotoController::class);

// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
// ]);

// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ]);

Route::get('/greeting', function () {
    return view('hello', ['name' => 'Andi']);
    });