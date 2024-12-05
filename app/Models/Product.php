<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'supplier_id',
        'name',
        'quantity',
        'unit',
        'buying_price',
        'selling_price',
        'expiry_date',
        'threshold_qty',
        'image',
    ];

}
