<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use App\Models\Country;
use App\Models\Product;
use App\Models\ServiceRequest;
use App\Models\WarrantyRegistration;
use Illuminate\Http\Request;

class ServiceRequestController extends Controller
{
    public function registration(Request $request)
    {
        $products = Product::get();
        $countries = Country::pluck('name','id');
        $complains = Complain::where('status',1)->get();
        return view('front.service-request',compact('products','countries','complains'));
    }

    public function registrationSubmit(Request $request){
        
        $request->validate([
            'select_product' => 'required',
            'product_serial' => 'required',
            'machine_serial' => 'required',
            'customer_name'  => 'required',
            'customer_phone' => 'required',
            'service_eng_name'   => 'required',
            'service_eng_phone'  => 'required',
            'complain'           => 'required',
            'describe_issue'     => 'required',
            'terms_condition'    => 'required',
        ]);

        // check warranty registration
        $check = WarrantyRegistration::where(['product_serial'=>$request->product_serial,'machine_serial'=>$request->machine_serial])->first();
        
        if (empty($check)) {
            return response()->json([
                'message' => 'The provided product serial already Registered.',
                'errors' => [
                    'product_serial' => ['The provided product serial not matched'],
                    'machine_serial'=>['The provided machine serial not matched...']
                ]
            ], 422);
        }
        ServiceRequest::create([
            'product_id'        =>$request->select_product,
            'product_serial'    =>$request->product_serial,
            'machine_serial'    =>$request->machine_serial,
            'customer_name'     =>$request->customer_name,
            'customer_phone'    =>$request->customer_phone,
            'service_eng_name'  =>$request->service_eng_name,
            'service_eng_phone' =>$request->service_eng_phone,
            'complain'          =>$request->complain,
            'describe_issue'    =>$request->describe_issue,
        ]);

        return response()->json([
            'message' => 'Service Request Submited...',
        ], 200);
    }
}
