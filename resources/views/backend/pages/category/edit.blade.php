@extends('backend.layouts.master')
@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{route('edit-category',$value->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Edit Category</h3>
                                </div>
                                <hr>
                                <!-- form start -->
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Category</label>
                                        <input class="form-control" placeholder="Name" name="name" type="text" value="{{$value->name}}">

                                    </div>

                                    <div class="form-group">
                                        <label for="name" class="control-label">Parent Category</label>
                                        <select name="parent_id" id="parent"class="form-control select2">
                                        <option value="0">Select Parent Category
                                         </option>
                                        @foreach($category as $value1)
                                            <option
                                                @if($value->parent_id==$value1->id) selected
                                                @endif value="{{$value1->id}}">{{$value1->name}}</option>
                                            @include('backend.pages.category.category_dropdown',['category'=>$value1])

                                        @endforeach
                                    </select>

                                    </div>
                                    <div class="form-group">
                                       <label for="formGroupExampleInput">Image:</label>
                                       <input type="file" name="image" class="form-control" id="formGroupExampleInput">
                                    </div>

                                    <div class="form-group special-link">
                                        <label for="name" class="control-label">Special:</label>
                                        <select class="form-control" name="is_special" id="isSpecial">
                                        <option
                                            @if($value->is_special==0) selected
                                            @endif  value="0">No
                                        </option>
                                        <option
                                            @if($value->is_special==1) selected
                                            @endif value="1">Yes
                                        </option>
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