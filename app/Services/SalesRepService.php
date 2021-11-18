<?php

namespace App\Services;

use App\Http\Requests\SalesRepRequest;
use App\Models\SalesRepresentative;

class SalesRepService
{
    public static function index()
    {
        return response()->json([
            'slesrep' => SalesRepresentative::get()
        ]);
    }

    public static function store(SalesRepRequest $request)
    {

        $sales = SalesRepresentative::create([
            'name' => $request->input('name'),
            'commission_percentage' => $request->input('commission_percentage'),
            'tax_rate' => $request->input('tax_rate'),
        ]);

        return response()->json($sales);
    }
   
}
