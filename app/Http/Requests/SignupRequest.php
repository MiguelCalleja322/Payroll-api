<?php

namespace App\Http\Requests;

use Urameshibr\Requests\FormRequest;

class SignupRequest extends FormRequest
{
    public function Authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is Required',
            'name.string' => 'Name should be a string.',
            'email.required' => 'Email is required.',
            'email.email' => 'Use a valid email.',
            'password.required' => 'Password is required.',
            'password.string' => 'Password should be a string.',
        ];
    }
}
