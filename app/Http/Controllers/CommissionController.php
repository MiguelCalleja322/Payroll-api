<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommissionRequest;

use App\Services\CommissionService;

class CommissionController extends Controller
{
    public function index()
    {
        return CommissionService::index();
    }

    public function store(CommissionRequest $request)
    {
        return CommissionService::store($request);
    }

   
}
