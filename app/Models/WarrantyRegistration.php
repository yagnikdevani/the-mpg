<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarrantyRegistration extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'product_id',
        'product_serial',
        'machine_serial',
        'customer_name',
        'country',
        'state',
        'city',
        'passkey',
        'passkey_user',
    ];

    public function country(){
        return $this->hasOne(Country::class,'id','country');
    }
    public function state(){
        return $this->hasOne(State::class,'id','state');
    }
}
