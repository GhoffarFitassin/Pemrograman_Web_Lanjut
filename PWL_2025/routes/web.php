<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/hello', function () {
    return 'Hello world';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return '2341720035 Ghoffar Abdul';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function
($articlesId,) {
return 'Halaman Artikel dengan ID '.$articlesId;
});