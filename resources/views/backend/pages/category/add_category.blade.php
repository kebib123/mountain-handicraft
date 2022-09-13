@extends('backend.layouts.master')
@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{route('add-category')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Add Category</h3>
                                </div>
                                <hr>
                                <!-- form start -->
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Category</label>
                                        <input class="form-control" placeholder="Name" name="name" type="text">

                                    </div>

                                    <div class="form-group">
                                        <label for="name" class="control-label">Parent Category</label>
                                        <select name="parent_id" id="parent" class="form-control select2">
                                            <option value="0">Select Parent Category</option>
                                            @foreach($category as $value)
                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                                @include('backend.pages.category.category_dropdown',['category'=>$value])
                                            @endforeach

                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Image:</label>
                                        <input type="file" name="image" class="form-control" id="formGroupExampleInput">
                                    </div>

                                    <div class="form-group special-link">
                                        <label for="name" class="control-label">Special:</label>
                                        <select class="form-control" name="is_special" >
                                            <!--<option selected disabled>Select any option</option>-->
                                            <option value="0" selected>No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                  Choose if this is in home page </span>
                                    </div>


                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <input class="btn btn-danger btn-xs pull-right" type="submit" value="Save">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.box -->
        </form>


@stop
