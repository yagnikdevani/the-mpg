<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Country;
use App\Models\WarrantyRegistration;
use App\Models\TechnicalLiterature;

class TechnicalLiteratureController extends Controller
{
    public function registration(Request $request)
    {
        $products = Product::get();
        $countries = Country::pluck('name','id');
        return view('front.technical-literature-request',compact('products','countries'));
    }

    public function technicalSubmit(Request $request){
        
        $request->validate([
            'select_product' => 'required',
            'product_serial' => 'required',
            'machine_serial' => 'required',
            'company_name'  => 'required',
            'email'          => 'required|email',
            'contact_no'     => 'required',
            'country'        => 'required',
            'state'          => 'required',
            'city'           => 'required',
            'terms_condition'=> 'required',
        ]);

        
        // check product serial no
        /* $productSerial = ProductSerial::where('serial_no',$request->product_serial)->first();
        if (empty($productSerial)) {
            return response()->json([
                'message' => 'The provided product serial no is invalid.',
                'errors' => [
                    'product_serial' => ['The provided product serial no is invalid.']
                ]
            ], 422);
        } */

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
        TechnicalLiterature::create([
            'product_id'=>$request->select_product,
            'product_serial'=>$request->product_serial,
            'machine_serial'=>$request->machine_serial,
            'company_name'  =>$request->company_name,
            'email'         =>$request->email,
            'contact_no'    =>$request->contact_no,
            'country'       => $request->country,
            'state'         => $request->state,
            'city'          => $request->city,
        ]);

        return response()->json([
            'message' => 'Technical Literature Request Submited...',
        ], 200);
    }

    public function getregistration(Request $request) {
        $request->validate([
            'product_serial' => 'required',
            'select_product'     =>'required',
        ]);
        $data = WarrantyRegistration::with(['country','state','country.states'])->where(['product_serial'=>$request->product_serial,'product_id'=>$request->select_product])->first();
        if ($data) {
            return response()->json($data, 200);
        } else {
            return response()->json([
                'message' => 'The provided product serial not exist with this product',
                'errors' => [
                    'product_serial' => ['The provided product serial not exist with this product category'],
                ]
            ], 422);
        }
        
    }
}
