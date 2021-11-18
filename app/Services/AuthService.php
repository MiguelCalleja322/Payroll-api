<?php

namespace App\Services;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\AccessToken;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Str;

class AuthService
{
    public static function login(LoginRequest $request)
    {
        $user = User::where('email', $request->input('email'))->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {
            $accessToken = AccessToken::create([
                'user_id' => $user->id,
                'token' => hash('sha256', $plainTextToken = Str::random(40)),
            ]);
        };

        return response()->json($accessToken->id, $plainTextToken);
    }

    public static function signup(SignupRequest $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        $accessToken = AccessToken::create([
            'user_id' => $user->id,
            'token' => hash('sha256', $plainTextToken = Str::random(40)),
        ]);

        return response()->json($accessToken->id, $plainTextToken);
    }
}
