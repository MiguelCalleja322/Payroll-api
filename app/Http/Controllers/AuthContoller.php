<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Services\AuthService;

class AuthContoller extends Controller
{
    public function login()
    {
    }

    public function signup(SignupRequest $request)
    {
        return AuthService::signup($request);
    }
}
