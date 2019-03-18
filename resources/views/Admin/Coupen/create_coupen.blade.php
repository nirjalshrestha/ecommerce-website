@extends('adminlte::page')
@section('js')
    <script>$('#lfm').filemanager('image');</script>
    <script>$('#lfm2').filemanager('image');</script>

@stop

@section('content')

    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Create Coupen</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" method="post" action="{{route('coupen.store')}}">
            @csrf
            <!-- text input -->
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Enter ...">
                </div>
                <div class="form-group">
                    <label>Discount on Total Product</label>
                    <input type="integer" class="form-control" name="dis_product" placeholder="Enter ...">
                </div>

                <div class="form-group">
                    <label>Discount on Delivery</label>
                    <input type="integer" class="form-control" name="dis_delivery" placeholder="Enter ...">
                </div>
                <div class="form-group">
                    <label>Discount on Cash</label>
                    <input type="integer" class="form-control" name="dis_cash" placeholder="Enter ...">
                </div>
                <div class="form-group">
                    <label>Discount on Categoryt</label>
                    <input type="integer" class="form-control" name="dis_category" placeholder="Enter ...">
                </div>
                <div class="form-group">
                    <label>Discount on Specific </label>
                    <input type="integer" class="form-control" name="dis_product_id" placeholder="Enter ...">
                </div>
                <div class="form-group">
                    <label>Minimum Expenses</label>
                    <input type="integer" class="form-control" name="min_expenses" placeholder="Enter ...">
                </div>
                <div class="form-group">
                    <label>Uses of Coupen</label>
                    <input type="integer" class="form-control" name="uses" placeholder="Enter ...">
                </div>
                <div class="form-group">
                    <label>Expiring Date of Coupent</label>
                    <input type="integer" class="form-control" name="expire_date" placeholder="Enter ...">
                </div>

                <button type="submit" class="btn btn-info pull-right">Submit</button>

            </form>
        </div>
        <!-- /.box-body -->
    </div>

@stop
