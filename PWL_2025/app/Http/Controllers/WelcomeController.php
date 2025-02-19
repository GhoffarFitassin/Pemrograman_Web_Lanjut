<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }

    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama: Ghoffar, Nim: 2341720035';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id'. $id;
    }

    public function greeting(){
        return view('blog.hello')
            ->with('name','Ghoffar')
            ->with('occupation','Astronaut');
    }
}
