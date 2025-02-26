<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()  {
        return view('users.user')
        ->with('id', '13')
        ->with('name', 'Ghoffar Abdul Jafar');
    }
}
