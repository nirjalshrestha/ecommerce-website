@extends('User.master')
@section('content')


<!--================Register Area =================-->
<section class="register_area p_100">
    <div class="container">
        <div class="register_inner">
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing_details">
                        <h2 class="reg_title">Billing Detail</h2>
                        <form class="billing_inner row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="cun">Country <span>*</span></label>
                                    <select class="selectpicker" id="cun">
                                        <option>United State America (USA)</option>
                                        <option>Bangladesh (BAN)</option>
                                        <option>United State America (USA)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="name">First Name <span>*</span></label>
                                    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="last">Last Name <span>*</span></label>
                                    <input type="text" class="form-control" id="last" aria-describedby="last">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="cname">Company Name <span>*</span></label>
                                    <select class="selectpicker" id="cname">
                                        <option>United State America (USA)</option>
                                        <option>Bangladesh (BAN)</option>
                                        <option>United State America (USA)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="address">Address <span>*</span></label>
                                    <input type="text" class="form-control" id="address" aria-describedby="address">
                                    <input type="text" class="form-control" id="address2" aria-describedby="address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="ctown">City / Town <span>*</span></label>
                                    <select class="selectpicker" id="ctown">
                                        <option>United State America (USA)</option>
                                        <option>Bangladesh (BAN)</option>
                                        <option>United State America (USA)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="email">Email <span>*</span></label>
                                    <input type="email" class="form-control" id="email" aria-describedby="email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="phone">Phone <span>*</span></label>
                                    <input type="text" class="form-control" id="phone" aria-describedby="phone">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="creat_account">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Ship to a different address?</label>
                                        <div class="check"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="cunt">Country <span>*</span></label>
                                    <select class="selectpicker" id="cunt">
                                        <option>United State America (USA)</option>
                                        <option>Bangladesh (BAN)</option>
                                        <option>United State America (USA)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="name2">First Name <span>*</span></label>
                                    <input type="text" class="form-control" id="name2" aria-describedby="name2" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="last2">Last Name <span>*</span></label>
                                    <input type="text" class="form-control" id="last2" aria-describedby="last2">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="company">Company Name <span>*</span></label>
                                    <input type="text" class="form-control" id="company" aria-describedby="company">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="city">City / Town <span>*</span></label>
                                    <input type="text" class="form-control" id="city" aria-describedby="city">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="order">Order Notes <span>*</span></label>
                                    <textarea class="form-control" id="order" rows="3"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="order_box_price">
                        <h2 class="reg_title">Your Order</h2>
                        <div class="payment_list">
                            <div class="price_single_cost">
                                @foreach(Cart::content() as $item)
                                <h5>{{$item->title}} -({{$item->qty}}) <span>Rs.{{$item->price}}</span></h5>
                                @endforeach
                                <h4>Cart Subtotal <span>Rs.{{Cart::subtotal()}}</span>
                                </h4>
                                    <h4>Tax (13%) <span>Rs.{{Cart::tax()}}</span></h4>
                                <h3><span class="normal_text">Order Totals</span> <span>Rs.{{Cart::total()}}</span></h3>
                            </div>
                            <div id="accordion" role="tablist" class="price_method">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
                                                direct bank transfer
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <form action="/your-server-side-code" method="POST">
                                                <script
                                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                    data-key="pk_test_pIaGoPD69OsOWmh1FIE8Hl4J"
                                                    data-amount="1999"
                                                    data-name="Stripe Demo"
                                                    data-description="Online course about integrating Stripe"
                                                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                                    data-locale="auto"
                                                    data-currency="usd">
                                                </script>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
                                                cash on delivery
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingfour">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapsefour" role="button" aria-expanded="false" aria-controls="collapsefour">
                                                paypal
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingfour" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" value="submit" class="btn subs_btn form-control">place order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Register Area =================-->
@endsection
