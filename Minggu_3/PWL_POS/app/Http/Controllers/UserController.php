<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $user = UserModel::findOrFail(1);
        $user = UserModel::where('username','manager99')->firstOrFail();
        return view('user', ['data' => $user]);
    }
}
