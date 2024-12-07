<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'otp',
        'password',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function store()
    {
        return $this->hasMany(Store::class);
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }

}
