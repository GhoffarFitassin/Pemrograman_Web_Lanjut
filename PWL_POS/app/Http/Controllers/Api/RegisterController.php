<?php

namespace App\Http\Controllers\Api;

use App\Models\UserModel;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        // set validation
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required|min:5|confirmed',
            'level_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        
        // handle image upload
        $image = $request->file('image');
        $image->store('public/images');

        // create user
        $user = UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => bcrypt($request->password), // hash password
            'level_id' => $request->level_id,
            'image' => $image->hashName(),
        ]);
        // return response JSON user is created
        if ($user) {
            return response()->json([
                'success' => true,
                'user' => $user,
            ], 201);
        } 

        //return JSON process insert failed
        return response()->json([
            'success' => false,
        ], 409);
    }
}
