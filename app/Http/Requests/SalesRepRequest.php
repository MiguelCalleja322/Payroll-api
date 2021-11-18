<?php

namespace App\Http\Requests;

use Urameshibr\Requests\FormRequest;

class SalesRepRequest extends FormRequest
{
    public function Authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'commission_percentage' => 'required|numeric|between:0,99.99',
            'tax_rate' => 'required|numeric|between:0,99.99'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is Required',
            'name.string' => 'Name should be a string.',
            'commission_percentage.required' => 'Commission percentage is Required',
            'commission_percentage.numeric' => 'Commission percentage be a decimal.',
            'tax_rate.required' => 'Tax rate is Required',
            'tax_rate.numeric' => 'Tax rate must be a decimal.',
           
        ];
    }
}
