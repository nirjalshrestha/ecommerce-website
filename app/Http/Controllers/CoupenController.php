<?php

namespace App\Http\Controllers;

use App\Category;
use App\Coupen;
use function GuzzleHttp\default_ca_bundle;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class CoupenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['coupens'] = Coupen::all();
        return view('Admin/Coupen/view')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/Coupen/create_coupen');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupen = new Coupen;

        $coupen->title = $request->title;
        $coupen->description = $request->description;

        if (is_null($request->dis_product)){
            $coupen->dis_product = value(0);

        }
        elseif (!is_null($request->dis_product))
        {
            $coupen->dis_product = $request->dis_product;

        }
        if (is_null($request->dis_cash)){
            $coupen->dis_cash = value(0);
        }
        elseif(!is_null($request->dis_cash))
        {
            $coupen->dis_cash = $request->dis_cash;
        }

        if (is_null($request->dis_delivery))
        {
            $coupen->dis_delivery = value(0);
        }
        elseif(!is_null($request->dis_delivery)){
            $coupen->dis_delivery = $request->dis_delivery;
        }

        if (is_null($request->dis_category))
        {
            $coupen->dis_category = value(0);
        }
        elseif(!is_null($request->dis_category)){
            $coupen->dis_category =$request->dis_category;
        }
        if (is_null($request->dis_product_id)){

            $coupen->dis_product_id = value(0);

        }
        elseif(!is_null($request->dis_product_id))
        {
            $coupen->dis_product_id = $request->dis_product_id;
        }


        $coupen->min_expenses = $request->min_expenses;
        $coupen->uses = $request->uses;
        $coupen->expire_date = $request->expire_date;

        $coupen->save();

        return redirect('coupen');
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
        $data['coupens'] = Coupen::find($id);
        return view('Admin/Coupen/edit')->with($data);

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
        $coupen = Coupen::find($id);

        $coupen->title = $request->title;
        $coupen->description = $request->description;

        if (is_null($request->dis_product)){
            $coupen->dis_product = value(0);

        }
        elseif (!is_null($request->dis_product))
        {
            $coupen->dis_product = $request->dis_product;

        }
        if (is_null($request->dis_cash)){
            $coupen->dis_cash = value(0);
        }
        elseif(!is_null($request->dis_cash))
        {
            $coupen->dis_cash = $request->dis_cash;
        }

        if (is_null($request->dis_delivery))
        {
            $coupen->dis_delivery = value(0);
        }
        elseif(!is_null($request->dis_delivery)){
            $coupen->dis_delivery = $request->dis_delivery;
        }

        if (is_null($request->dis_category))
        {
            $coupen->dis_category = value(0);
        }
        elseif(!is_null($request->dis_category)){
            $coupen->dis_category =$request->dis_category;
        }
        if (is_null($request->dis_product_id)){

            $coupen->dis_product_id = value(0);

        }
        elseif(!is_null($request->dis_product_id))
        {
            $coupen->dis_product_id = $request->dis_product_id;
        }


        $coupen->min_expenses = $request->min_expenses;
        $coupen->uses = $request->uses;
        $coupen->expire_date = $request->expire_date;

        $coupen->save();

        return redirect('coupen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupen = Coupen::find($id);
        if (!$coupen)
        {
            return redirect('coupen');
        }
        if ($coupen)
        {
            $coupen->delete();
            return redirect('coupen');

        }
        else
        {
            return redirect('coupen');
        }
    }
}
