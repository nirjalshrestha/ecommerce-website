@extends('adminlte::page')
@section('js')
    <script>$('#lfm').filemanager('image');</script>
    <script>$('#lfm2').filemanager('image');</script>

@stop

@section('content')

    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Category</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" method="post" action="/category/{{$categories->id}}">
            @method('PATCH')
            @csrf
            <!-- text input -->
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="{{$categories -> title}}">
                </div>
                <div class="form-group">
                    <label>Position</label>
                    <input type="integer" class="form-control" name="position" placeholder="Enter ..." value="{{$categories->position}}">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="integer" class="form-control" name="status" placeholder="Enter ..." value="{{$categories->status}}">
                </div>

                <div class="input-group">
                   <span class="input-group-btn">
                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                       <i class="fa fa-picture-o"></i> Choose Image
                     </a>
                   </span>
                    <input id="thumbnail" class="form-control" type="text" name="cover_image" value="{{$categories->c_image}}">
                </div>
                <img id="holder">

                <div class="input-group">
                    <span class="input-group-btn">
                         <a id="lfm2" data-input="thumbnail2" data-preview="holder" class="btn btn-primary">
                           <i class="fa fa-picture-o"></i> Choose Picture
                         </a>
                    </span>
                    <input id="thumbnail2" class="form-control" type="text" name="pictures" value="{{$categories->pictures}}">
                </div>
                <img id="holder">
                <button type="submit" class="btn btn-info pull-right">Update</button>

            </form>
        </div>
        <!-- /.box-body -->
    </div>

@stop
