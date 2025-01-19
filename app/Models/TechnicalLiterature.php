<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalLiterature extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'product_serial',
        'machine_serial',
        'company_name',
        'email',
        'contact_no',
        'country',
        'state',
        'city',
    ];
}
