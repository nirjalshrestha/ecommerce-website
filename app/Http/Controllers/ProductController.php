<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\Product_Image;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Product::all();
        return view('Admin/Product/view')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data{'categories'} = Category::all();
        $data['brands'] = Brand::all();
        return view('Admin/Product/create_product')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image= explode(',', $request->cover_image);
        $imgaeList = [];
        foreach ($image as $i){
            $imageList[]=parse_url($i)['path'];
        }
        $cover_images = implode(',', $imageList);

        $picture = explode(',',$request->pictures);

        $pictureList = [];
        foreach ($picture as $p)
        {
            $pictureList[]= parse_url($p)['path'];
        }
        $pictures = implode(',', $pictureList);


        $product = new Product;

        $product->title = $request->title;
        $product->description = $request->description;
        $product->detail = $request->detail;
        $product->status = $request->status;
        $product->cover_image = $cover_images;

        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();


        $imageModel = [];
        foreach ($pictureList as $pic) {

            $imageModel[] = [
                "product_id" => $product->id,
                "image_path" => $pic,
            ];
        }

        $product->image()->createMany($imageModel);


        $category= Category::find($request->category_id);

        $product->category()->attach($category);

        $brand = Brand::find($request->brand_id);
        $product->brand()->attach($brand);


        return redirect('product');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data['categories'] = Category::all();
        $data['brands'] = Brand::all();
        $data['products'] = Product::find($id);
        $data['images'] = $data['products']->image();
        //dd($data['images']);
        return view('Admin.Product.edit')->with($data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $image= explode(',', $request->cover_image);
        $imgaeList = [];
        foreach ($image as $i){
            $imageList[]=parse_url($i)['path'];
        }
        $cover_images = implode(',', $imageList);

        $picture = explode(',',$request->pictures);

        $pictureList = [];
        foreach ($picture as $p)
        {
            $pictureList[]= parse_url($p)['path'];
        }
        $pictures = implode(',', $pictureList);



        $product->title = $request->title;
        $product->description = $request->description;
        $product->detail = $request->detail;
        $product->status = $request->status;
        $product->cover_image = $cover_images;

        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();


        $imageModel = [];
        foreach ($pictureList as $pic) {

            $imageModel[] = [
                "product_id" => $product->id,
                "image_path" => $pic,
            ];
        }
        $product->image()->createMany($imageModel);


        $category= Category::find($request->category_id);
        $product->category()->attach($category);

        $brand = Brand::find($request->brand_id);
        $product->brand()->attach($brand);


        return redirect('product');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product_images=Product_Image::where('Product_id',$id);


        if (!$product){

            return redirect('product');
        }
        if ($product){

            $product->delete();
            $product_images->delete();
            return redirect('product');

        }
        else{
            return redirect('product');
        }
    }
}
