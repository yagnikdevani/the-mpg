<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WarrantyRegistration;
use Illuminate\Http\Request;

class WarrantyController extends Controller
{
    public function index(Request $request) {
        $warrantyData = WarrantyRegistration::paginate(10);
        
        return view('admin.warranty.index',compact('warrantyData'));
    }
}
