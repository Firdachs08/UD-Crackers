<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersMobile;
use Illuminate\Support\Facades\Hash;

class ApiAuthController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $user = UsersMobile::create([
            'name' => $data['name'],
            'no_hp' => $data['no_hp'],
            'alamat' => $data['alamat'],
            'password' => bcrypt($data['password']),
        ]);

        return response()->json([
            'message' => 'success',
            'data' => $user
        ], 200);
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        $user = UsersMobile::where('name', $data['name'])->first();
        if (!$user) {
            return response([
                'message' => 'incorrect name'
            ], 400);
        }
        if (!Hash::check($data['password'], $user->password)) {
            return response([
                'message' => 'incorrect password'
            ], 400);
        }
        $token = $user->createToken('apiToken')->plainTextToken;

        $res = [
            'message' => "login successfull",
            'user' => $user,
            'token' => $token
        ];

        return response($res, 200);
    }
    public function userlogin()
    {
        $user = request()->user();
        $res = [
            'message' => "success",
            'user' => $user,
        ];
        return response($res, 200);
    }
    //logout
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json('Logged Out');
    }
}
