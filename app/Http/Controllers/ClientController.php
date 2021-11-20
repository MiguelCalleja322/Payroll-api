<?php

namespace App\Http\Controllers;

use App\Services\ClientService;

class ClientController extends Controller
{
    public function index()
    {
        return ClientService::index();
    }

}
