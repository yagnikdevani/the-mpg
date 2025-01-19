<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WarrantyRegistration;
use App\Models\ManagerUser;
use App\Models\ProductSerial;
use App\Models\Product;
use App\Models\Country;
use App\Models\State;

class WarrantyRegistrationController extends Controller
{
    public function registration(Request $request)
    {
        $products = Product::get();
        $countries = Country::pluck('name','id');
        return view('front.warranty-registration',compact('products','countries'));
    }

    public function registrationSubmit(Request $request){
        $request->validate([
            'select_product' => 'required',
            'product_serial' => 'required',
            'machine_serial' => 'required',
            'customer_name'  => 'required',
            'country'        => 'required',
            'state'          => 'required',
            'city'           => 'required',
            'passkey'        => 'required',
        ]);

        // check passkey
        $managerUser = ManagerUser::where('code',$request->passkey)->first();
        if (empty($managerUser)) {
            return response()->json([
                'message' => 'The provided passkey is invalid.',
                'errors' => [
                    'passkey' => ['The provided passkey is invalid.']
                ]
            ], 422);
        }

        // check product serial no
        $productSerial = ProductSerial::where('serial_no',$request->product_serial)->first();
        if (empty($productSerial)) {
            return response()->json([
                'message' => 'The provided product serial no is invalid.',
                'errors' => [
                    'product_serial' => ['The provided product serial no is invalid.']
                ]
            ], 422);
        }
        $check = WarrantyRegistration::where('product_serial',$request->product_serial)->first();
        if ($check) {
            return response()->json([
                'message' => 'The provided product serial already Registered.',
                'errors' => [
                    'product_serial' => ['The provided product serial already Registered...']
                ]
            ], 422);
        }
        WarrantyRegistration::create([
            'product_id'=>$request->select_product,
            'product_serial'=>$request->product_serial,
            'machine_serial'=>$request->machine_serial,
            'customer_name'=>$request->customer_name,
            'country'        => $request->country,
            'state'        => $request->state,
            'city'           => $request->city,
            'passkey'        => $request->passkey,
            'passkey_user'   => $managerUser->id,
        ]);

        return response()->json([
            'message' => 'Warranty Registered Successfully',
        ], 200);
    }

    // In CountryController.php
    public function getStates(Request $request)
    {
        $country_id = $request->input('country_id');

        $states = State::where('country_id', $country_id)->get(['id', 'name']);
        return response()->json($states);
    }

}
