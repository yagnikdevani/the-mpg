<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarrantyRegistration extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'product_serial',
        'machine_serial',
        'customer_name',
        'city',
        'country',
        'passkey',
        'passkey_user',
    ];
}
