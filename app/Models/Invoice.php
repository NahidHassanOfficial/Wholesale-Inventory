<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'store_id',
        'user_id',
        'total',
        'discount',
        'payable',
        'status',
        'store_name',
        'store_address',
        'store_phone',
    ];

}
