@extends('adminlte::page')
@section('js')
    <script>$('#lfm').filemanager('image');</script>
    <script>$('#lfm2').filemanager('image');</script>

@stop

@section('content')

    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Create a New Product</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" method="post" action="/product/{{$products->id}}">
            @method('PATCH')
            @csrf
            <!-- text input -->
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter title" value="{{$products->title}}" >
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="integer" class="form-control" name="description" placeholder="Enter ..." value="{{$products->description}}">
                </div>
                <div class="form-group">
                    <label>Detail</label>
                    <input type="integer" class="form-control" name="detail" placeholder="Enter ..." value="{{$products->detail}}">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="integer" class="form-control" name="status" placeholder="Enter ..." value="{{$products->status}}">
                </div>
                <div class="form-group">
                    <label for="category_id">Category </label>
                    <select class="form-control" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="category_id">Brand </label>
                    <select class="form-control" name="brand_id">
                        @foreach ($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->title}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label>Cover Image</label>
                    <div class="input-group">
                   <span class="input-group-btn">
                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                       <i class="fa fa-picture-o"></i> Choose Cover Image
                     </a>
                   </span>
                        <input id="thumbnail" class="form-control" type="text" name="cover_image" value="{{$products->cover_image}}">

                    </div>
                    <img id="holder">
                </div>

                <div class="form-group">
                    <label>Product Images</label>
                    <div class="input-group">
                    <span class="input-group-btn">
                         <a id="lfm2" data-input="thumbnail2" data-preview="holder" class="btn btn-primary">
                           <i class="fa fa-picture-o"></i> Choose Product Images
                         </a>
                    </span>
                        @foreach( $products->image as $pro_images)
                            <input id="thumbnail2" class="form-control" type="text" name="pictures"
                                   value="{{$pro_images->Image_path}}">
                        @endforeach
                    </div>
                    <img id="holder">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="integer" class="form-control" name="price" placeholder="Enter ..." value="{{$products->price}}">
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="integer" class="form-control" name="quantity" placeholder="Enter ..." value="{{$products->quantity}}">
                </div>
                <button type="submit" class="btn btn-info pull-right">Update</button>

            </form>
        </div>
        <!-- /.box-body -->
    </div>

@stop
