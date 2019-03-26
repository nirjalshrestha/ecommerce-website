<?php

namespace App\Http\Controllers;

use Psy\Util\Str;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

use App\Brand;
use App\Category;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
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

    /**
     * @param Request $request
     * @return string
     */
    public function charge(Request $request)
    {

        try {
            //Stripe::setApiKey( env('STRIPE_SECRET_KEY'));


            Stripe::setApiKey('sk_test_qagA2ZbPbOlyjjmkMkuugYda00NQpp5JX8');


            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));



            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' =>'19999',
                'currency' => 'npr'
            ));

            Cart::instance('default')->destroy();

            return 'Payment successful!';
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }


}
