<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ApiAuthController extends Controller
{

    public function login(Request $request){

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Email or password is incorrect'], 401);
        }

        return response()->json(['api_token' => $user->createToken('api_token')->plainTextToken]);
    }


    public function logout(Request $request)
    {

        return $request->user()->currentAccessToken()->delete();
    }

    public function userProfile(Request $request) {

        return response()->json(['user' => $request->user()]);
    }

}
