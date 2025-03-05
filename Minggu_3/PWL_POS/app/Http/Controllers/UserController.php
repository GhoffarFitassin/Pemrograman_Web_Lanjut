<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // coba akses model UserModel
        // $user = UserModel::all(); // ambil semua data dari tabel m_user
        // return view('user', ['user' => $user]);

        // tambah data user dengn Eloquent Model
        $user = [
            // 'username' => 'customer 1',
            // 'nama' => 'Pelanggan',
            // 'password' => Hash::make('12345'),
            // 'level_id' => 5
            'nama' => 'Pelanggan Pertama',
        ];
        // UserModel::insert($user); // insert data ke tabel m_user
        UserModel::where('username', 'customer 1')->update($user); //update data user

        // coba alses model UserModel
        $user = UserModel::all(); // ambil semua data dari tabel m_user
        return view('user', ['user' => $user]);
    }
}
