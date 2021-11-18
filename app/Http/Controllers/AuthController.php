<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        return AuthService::login($request);
    }

    public function signup(SignupRequest $request)
    {
        return AuthService::signup($request);
    }

    public function getAuthUser()
    {
        return AuthService::getAuthUser();
    }
}
