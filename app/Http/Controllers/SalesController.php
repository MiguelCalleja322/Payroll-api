<?php

namespace App\Http\Controllers;

use App\Services\SalesService;

class SalesController extends Controller
{
    public function index()
    {
        return SalesService::index();
    }
}
