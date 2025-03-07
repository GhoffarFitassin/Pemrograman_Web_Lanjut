<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $user = UserModel::find(1);
        // $user = UserModel::where('level_id', 1)->first();
        // $user = UserModel::firstWhere('level_id', 1);
        // return view ('user',['data'=>$user]);
        // $user = UserModel::findor(1, ['username', 'nama',], function () {
        //         abort(404);
        //     }
        // );
        $user = UserModel::findor(20, ['username', 'nama',], function () {
                abort(404);
            }
        );
        return view('user', ['data' => $user]);
    }
}
