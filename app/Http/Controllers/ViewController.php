<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function search_product(Request $request){

        $request->validate([
            'searchpro' => 'required|min:3',
        ]);

        $search = $request->input('searchpro');

        $data['search_products'] = Product::with('image')->where('title','like',"%$search%")
                                    ->orwhere('description','like',"%$search%")
                                    ->orwhere('detail','like',"%$search%")
                                    ->get();

        //return $data['search_products'];
        $data['categories'] = Category::all();
        return view('User.search')->with($data);
    }

   /* public function catproduct(Request $category)
    {
        if ($category)
        {
            $data['category'] = Category::with('product')->where('id',request()->category)->first();
            $data['products'] = $data['category']->product;
            //           return ($data['category']);
            $data['categories'] = Category::all();
        }
        else{
            $data['categories'] = Category::all();
            $data['products'] = Product::all();
        }
        return view('User/catproduct')->with($data);
    }*/

   public function track()
   {
       $data['categories'] = Category::all();
       return view('User/track')->with($data);
   }

   public function shopview()
   {
       $data['categories'] = Category::all();
        $data['products'] = Product::with('image')->get();
        //return $data['products'];
        return view('User/product')->with($data);

   }


}
