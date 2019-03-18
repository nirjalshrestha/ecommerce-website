@extends('adminlte::page')
@section('js')
    <script>$('#lfm').filemanager('image');</script>
    <script>$('#lfm2').filemanager('image');</script>

@stop

@section('content')

    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Coupen</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" method="post" action="/coupen/{{$coupens->id}}">
            @method('PATCH')
            @csrf
            <!-- text input -->
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="{{$coupens->title}}" >
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" name="description" value="{{$coupens->description}}">
                </div>
                <div class="form-group">
                    <label>Discount on Total Product</label>
                    <input type="integer" class="form-control" name="dis_product" value="{{$coupens->dis_product}}">
                </div>

                <div class="form-group">
                    <label>Discount on Delivery</label>
                    <input type="integer" class="form-control" name="dis_delivery" value="{{$coupens->dis_delivery}}">
                </div>
                <div class="form-group">
                    <label>Discount on Cash</label>
                    <input type="integer" class="form-control" name="dis_cash" value="{{$coupens->dis_cash}}">
                </div>
                <div class="form-group">
                    <label>Discount on Categoryt</label>
                    <input type="integer" class="form-control" name="dis_category" value="{{$coupens->dis_category}}">
                </div>
                <div class="form-group">
                    <label>Discount on Specific </label>
                    <input type="integer" class="form-control" name="dis_product_id" value="{{$coupens->dis_product_id}}">
                </div>
                <div class="form-group">
                    <label>Minimum Expenses</label>
                    <input type="integer" class="form-control" name="min_expenses" value="{{$coupens->min_expenses}}">
                </div>
                <div class="form-group">
                    <label>Uses of Coupen</label>
                    <input type="integer" class="form-control" name="uses" value="{{$coupens->uses}}">
                </div>
                <div class="form-group">
                    <label>Expiring Date of Coupent</label>
                    <input type="integer" class="form-control" name="expire_date" value="{{$coupens->expire_date}}">
                </div>

                <button type="submit" class="btn btn-info pull-right">Update</button>

            </form>
        </div>
        <!-- /.box-body -->
    </div>

@stop
