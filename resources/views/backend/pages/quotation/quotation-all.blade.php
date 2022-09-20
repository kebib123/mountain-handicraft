@extends('backend.layouts.master')
@section('content') 
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="box-header">
                    <h3 class="box-title">All Quotations</h3>
                </div>
                <div class="box-body">
                    <table id="package_table" class="table table-bordered datatable123">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>E-mail</th>
                           
                            <th>Country</th>
                            <th>Created At</th>
                            <th class="sorting-false">Action</th>
                        </tr>
                        </thead>
                        @foreach($quotations as $key=>$value)
                            <tbody>
                            <td>{{$key+=1}}</td>
                            <td>{{$value->full_name}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->country}}</td>
                            <td>{{$value->created_at->format('M d Y')}}</td>
                            <td>
                                <a class="btn btn-danger btn btn-sm confirm" href="{{route('delete-quotation',$value->id)}}"  onclick="return confirm('Confirm Delete?')"><i class="fa fa fa-trash"></i> </a>
                                <a class="btn btn-outline-primary btn btn-sm confirm"  href="{{route('view-quotation',$value->id)}}"><i class="fa fa fa-eye"></i> </a>
                            </td>
                          
                            </tbody>
                        @endforeach
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th class="sorting-false">Parent</th>
                           
                            <th>Show in Home</th>
                            <th class="sorting-false">Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->

                <!-- /.box -->
            </div>
        </div>
    </div>

@stop
@push('scripts')
   

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $('.datatable123').DataTable({

        });
    </script>
@endpush
