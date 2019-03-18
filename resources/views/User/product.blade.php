@extends('User.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<body>


<!--================Categories Banner Area =================-->
<section class="categories_banner_area">
    <div class="container">
        <div class="c_banner_inner">

            </ul>
        </div>
    </div>
</section>
<!--================End Categories Banner Area =================-->

<!--================Categories Product Area =================-->
<section class="no_sidebar_2column_area">
    <div class="container">
        <div class="showing_fillter">
            <div class="row m0">
                <div class="first_fillter">
                    <h4>Showing 1 to 12 of 30 total</h4>
                </div>
                <div class="secand_fillter">
                    <h4>SORT BY :</h4>
                    <select class="selectpicker">
                        <option>Name</option>
                        <option>Name 2</option>
                        <option>Name 3</option>
                    </select>
                </div>
                <div class="third_fillter">
                    <h4>Show : </h4>
                    <select class="selectpicker">
                        <option>09</option>
                        <option>10</option>
                        <option>10</option>
                    </select>
                </div>
                <div class="four_fillter">
                    <h4>View</h4>
                    <a class="active" href="#"><i class="icon_grid-2x2"></i></a>
                    <a href="#"><i class="icon_grid-3x3"></i></a>
                </div>
            </div>
        </div>
        <div class="two_column_product">
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            @foreach($product->image as $image)
                            <img class="img-fluid" src="{{$image->Image_path}}" alt="">
                            @endforeach
                            <h5 class="sale">Sale</h5>
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>{{$product->title}}</h4>
                            <h5><del>$45.50</del> Rs{{$product->price}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

            <nav aria-label="Page navigation example" class="pagination_area">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item next"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
        </div>
</section>
<!--================End Categories Product Area =================-->
</body>
</html>
@endsection
