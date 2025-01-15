<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceRequestController extends Controller
{
    public function registration(Request $request)
    {
        return view('front.service-request');
    }
}
