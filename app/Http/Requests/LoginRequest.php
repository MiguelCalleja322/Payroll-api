<?php

namespace App\Http\Requests;

use Urameshibr\Requests\FormRequest;

class LoginRequest extends FormRequest
{
    public function Authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email is required.',
            'email.email' => 'Use a valid email.',
            'password.required' => 'Password is required.',
            'password.string' => 'Password should be a string.',
        ];
    }
}
