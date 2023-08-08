<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (auth()->attempt(
            [
                'email' => request('email'),
                'password' => request('password')
            ]
        )) {
            Auth::user()->tokens->each(function($token, $key) {
                $token->delete();
            });

            $user = User::where('email', request('email'))->first();
            $token = auth()->user()->createToken('MyApp')->plainTextToken;

            return response()->json(
                [
                    'token' => $token,
                    'user' => $user
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'error' => 'Unauthorized'
                ],
                401
            );
        }
    }

    public function logout()
    {
        auth('sanctum')->user()->tokens->each(function($token, $key) {
            $token->delete();
        });

        return response()->json([
            'message' => 'Successfully logged out'
        ], 200);
    }
}
