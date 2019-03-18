<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_id','image_path'];
    public function image()
    {
        return $this->hasMany(Product_Image::class,'product_id');
    }

    public function category()
    {
        return $this->belongsToMany(Category::class,'category_products');
    }

    public function brand()
    {
        return $this->belongsToMany(Brand::class,'brand_products');
    }
}
