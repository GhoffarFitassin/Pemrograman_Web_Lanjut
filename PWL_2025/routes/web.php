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
