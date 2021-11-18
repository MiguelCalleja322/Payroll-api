<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalesRepRequest;

use App\Services\AuthService;
use App\Services\SalesRepService;

class SalesRepController extends Controller
{
    public function index()
    {
        return SalesRepService::index();
    }

    public function store(SalesRepRequest $request)
    {
        return SalesRepService::store($request);
    }

   
}
