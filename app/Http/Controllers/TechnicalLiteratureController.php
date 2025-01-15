<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnicalLiteratureController extends Controller
{
    public function registration(Request $request)
    {
        return view('front.technical-literature-request');
    }
}
