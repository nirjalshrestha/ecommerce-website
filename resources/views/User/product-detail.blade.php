@extends('User.master')
@section('content')
    <section class="categories_banner_area">
        <div class="container">
            <div class="c_banner_inner">
                <h3>simple product Layout 03</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li class="current"><a href="product-details2.html">Simple Product 03</a></li>
                </ul>
            </div>
        </div>
    </section>

        <section class="product_details_area">
            <div class="container">
        <div class="row">
            @foreach($shops as $product)
            <div class="col-lg-5">
                <div class="product_details_slider">
                    <div id="product_slider2" class="rev_slider" data-version="5.3.1.6">
                        <ul>
                            @foreach($product->image as $image)
                            <li data-index="rs-28" data-transition="scaledownfromleft" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="img/product/product-details/p-details-tab-1.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Umbrella" data-param1="September 7, 2015" data-param2="Alfon Much, The Precious Stones" data-description="">


                                <img src="{{$image->Image_path}}"  width="1920" height="1080" data-lazyload="{{$image->Image_path}}" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>


                            </li>
                            @endforeach
                            {{--<li data-index="rs-303" data-transition="scaledownfromleft" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="img/product/product-details/p-details-tab-2.jpg" data-rotate="0" data-saveperformance="off" data-title="The Dreaming Girl" data-param1="September 6, 2015" data-param2="Lol" data-description="">

                                <img src="img/product/product-details/p-details-big-1.jpg" alt="" width="1920" height="1080" data-lazyload="img/product/product-details/p-details-big-1.jpg" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                            </li>

                            <li data-index="rs-301" data-transition="scaledownfromleft" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="img/product/product-details/p-details-tab-4.jpg" data-rotate="0" data-saveperformance="off" data-title="Ride my Bike" data-param1="September 4, 2015" data-param2="Why not another Image?" data-description="">

                                <img src="img/product/product-details/p-details-big-1.jpg" alt="" width="1920" height="1080" data-lazyload="img/product/product-details/p-details-big-1.jpg" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                            </li>

                            <li data-index="rs-302" data-transition="scaledownfromleft" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="img/product/product-details/p-details-tab-3.jpg" data-rotate="0" data-saveperformance="off" data-title="Ride my Bike" data-param1="September 4, 2015" data-param2="Why not another Image?" data-description="">

                                <img src="img/product/product-details/p-details-big-1.jpg" alt="" width="1920" height="1080" data-lazyload="img/product/product-details/p-details-big-1.jpg" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                            </li>--}}

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="product_details_text">
                    <h3>{{$product->title}}</h3>
                    <ul class="p_rating">
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                    <div class="add_review">
                        <a href="#">5 Reviews</a>
                        <a href="#">Add your review</a>
                    </div>
                    <h6>Available In <span>Stock</span></h6>
                    <h4>Rs:{{$product->price}}</h4>
                    <p>Curabitur semper varius lectus sed consequat. Nam accumsan dapibus sem, sed lobortis nisi porta vitae. Ut quam tortor, facilisis nec laoreet consequat, malesuada a massa. Proin pretium tristique leo et imperdiet.</p>
                    <div class="p_color">
                        <h4 class="p_d_title">color <span>*</span></h4>
                        <ul class="color_list">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                    <div class="p_color">
                        <h4 class="p_d_title">size <span>*</span></h4>
                        <select class="selectpicker">
                            <option>Select your size</option>
                            <option>Size M</option>
                            <option>Size XL</option>
                        </select>
                    </div>
                    <div class="quantity">
                        <div class="custom">
                            <button onclick="if (!window.__cfRLUnblockHandlers) return false; var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button" data-cf-modified-44df9795d997141dda601dc0-=""><i class="icon_minus-06"></i></button>
                            <input type="text" name="qty" id="sst" maxlength="12" value="01" title="Quantity:" class="input-text qty">
                            <button onclick="if (!window.__cfRLUnblockHandlers) return false; var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button" data-cf-modified-44df9795d997141dda601dc0-=""><i class="icon_plus"></i></button>
                        </div>
                        <a class="add_cart_btn" href="#">add to cart</a>
                    </div>
                    <div class="shareing_icon">
                        <h5>share :</h5>
                        <ul>
                            <li><a href="#"><i class="social_facebook"></i></a></li>
                            <li><a href="#"><i class="social_twitter"></i></a></li>
                            <li><a href="#"><i class="social_pinterest"></i></a></li>
                            <li><a href="#"><i class="social_instagram"></i></a></li>
                            <li><a href="#"><i class="social_youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product_table_details">
                    <div class="table-responsive-md">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">Return Policy:</th>
                                <td>
                                    <h6>$24.01 International Priority Shipping to Bangladesh via the Global Shipping Program </h6>
                                    <h5>Item location:</h5>
                                    <p>Edison, New Jersey, United States</p>
                                    <h5>Ships to:</h5>
                                    <p>United States and many other countries | See details</p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Delivery:</th>
                                <td>
                                    <p>Estimated between <span>Fri. Dec. 30 and Thu. Jan. 5</span> <br /> Includes international tracking</p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Payments:</th>
                                <td>
                                    <a href="#"><img src="img/master-card.png" alt=""></a>
                                    <p>Any international shipping and import charges are paid in part to Pitney Bowes Inc.</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
            </div>
        </section>


@endsection
