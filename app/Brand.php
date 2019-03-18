<?php

namespace App;
use App\product;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function product()
    {
        return $this->belongsToMany(Product::class,'brand_products');

    }
}
