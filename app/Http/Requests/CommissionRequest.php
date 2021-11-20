<?php

namespace App\Http\Requests;

use Urameshibr\Requests\FormRequest;

class CommissionRequest extends FormRequest
{
    public function Authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'sales_rep_id' => 'required|exists:sales_representatives,id',
            'commission' => 'required|numeric',
            'bonus' => 'required|numeric',
            'name' => 'required|string',
            'opening_balance' => 'required|numeric',
            'elite_insure_commission' => 'required|numeric',
            'payslip_date' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'sales_rep_id.required' => 'Sales Representative is required.',
            'sales_rep_id.exists' => 'Sales Representative does not exist.',
            
            'commission.required' => 'Commission is required.',
            'commission.numeric' => 'Commission must be numeric value.',

            'bonus.required' => 'Bonus is required.',
            'bonus.numeric' => 'Bonus must be numeric value.',

            'name.required' => 'Name is Required',
            'name.string' => 'Name should be a string.',

            'payslip_date.required' => 'Payslip date is Required',
            'payslip_date.string' => 'Payslip date should be a string.',
           
            'sales_rep_id.required' => 'Sales Representative is required.',
            'sales_rep_id.exists' => 'Sales Representative does not exist.',
            'opening_balance.required' => 'Opening Balance is required.',
            'opening_balance.numeric' => 'Opening Balance must be numeric value.',
            'elite_insure_commission.required' => 'Elite Insure Commission is required.',
            'elite_insure_commission.numeric' => 'Elite Insure Commission must be numeric value.',
        ];
    }
}
