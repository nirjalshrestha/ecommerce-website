<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::all();
        $data['brands'] = Brand::all();
        $data['products']= Product::with('image')->get();

        return view('User.checkout_register')->with($data);
    }


}
