<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'product_serial',
        'machine_serial',
        'customer_name',
        'customer_phone',
        'service_eng_name',
        'service_eng_phone',
        'complain',
        'describe_issue'
    ];
}
