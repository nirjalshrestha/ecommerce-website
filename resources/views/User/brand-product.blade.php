@extends('User.master')
@section('content')
    <!--================Our Latest Product Area =================-->
    <section class="our_latest_product">
        <div class="container">

            <div class="s_m_title">
                @if (!$brand)
                    <h2>Brand Product</h2>

                @else
                    <h2>{{$brand->title}}</h2>

                @endif

            </div>

            <div class="l_product_slider owl-carousel">
                @foreach($brands as $product)
                    <div class="item">

                        <div class="l_product_item">
                            <div class="l_p_img">
                                @foreach($product->image as $image)
                                    <a href="{{route('shop.shopview',[$product->id])}}"> <img src="{{$image->Image_path}}" ></a>

                                @endforeach
                            </div>
                            <div class="l_p_text">
                                <ul>
                                    <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                    <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                    <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                </ul>
                                <h4>{{$product->title}}</h4>
                                <h5>{{--<del>$45.50</del>--}}  Rs:{{$product->price}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--================End Our Latest Product Area =================-->
@endsection