<?php

namespace App\Services;

use App\Http\Requests\CommissionRequest;
use App\Models\Client;
use App\Models\Commission;
use App\Models\Sales;
use Illuminate\Support\Str;

class CommissionService
{
    public static function index()
    {
    }

    public static function store(CommissionRequest $request)
    {
        
        $client = Client::create([
            'sr_id' => $request->input('sales_rep_id'),
            'name' => $request->input('name'),
        ]);
      
        $sales = Sales::create([
            'sales_rep_id' => $request->input('sales_rep_id'),
            'client_id' => $client->id,
            'opening_balance' => $request->input('opening_balance'),
            'elite_insure_commission' => $request->input('elite_insure_commission'),
        ]);

        $commission = Commission::create([
            'sales_rep_id' => $request->input('sales_rep_id'),
            'sales_id' => $sales->id,
            'commission' => $request->input('commission'),
            'bonus' => $request->input('bonus'),
            'payslip_date' => $request->input('payslip_date'),
            'slug' => Str::random(20)
        ]);

        return response()->json(
            [
                'commission' => $commission,
                'sales' => $sales,
                'client' => $client
            ]
        );
    }
}
