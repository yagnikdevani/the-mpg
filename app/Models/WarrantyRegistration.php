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

    public function getCountry(){
        return $this->hasOne(Country::class,'id','country');
    }
    public function getState(){
        return $this->hasOne(State::class,'id','state');
    }
    public function product(){
        return $this->hasOne(Product::class,'id','product_id');
    }
    public function managerUser() {
        return $this->hasOne(ManagerUser::class,'id','passkey_user');
    }
}
