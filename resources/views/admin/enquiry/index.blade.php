@extends('admin.includes.master')
@section('content')
    <div class="content-wrapper">

        <section class="content">

            <div class="row">
                <div class="col-lg-12">

                    <section class="content-header">
                        <h1>
                            Enquiry Table
                        </h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="iconsmind-Library"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                            <li class="breadcrumb-item active">Enquiry Tables</li>
                        </ol>
                    </section>
                    @if(session()->has('success_message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-success">x</span></button>
                            {{ session()->get('success_message') }}
                        </div>
                    @endif

                    @if(session()->has('message'))
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-info">x</span></button>
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    @if(session()->has('error_message'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-danger">x</span></button>
                            {{ session()->get('error_message') }}
                        </div>
                @endif
                <!-- Main content -->
                    <section class="content">

                        <div class="row">
                            <div class="col-12">
                                <div class="box box-solid box-primary">

                                    <div class="box-header with-border">
                                        <h4 class="box-title">Enquiry Table</h4>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Message</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($enquiries as $enquiry)
                                                        <tr>
                                                            <td>{{$loop -> index+1}}</td>
                                                            <td>{{$enquiry->name}}</td>
                                                            <td>{{$enquiry->email}}</td>
                                                            <td>{{$enquiry->message}}</td>
                                                            <td>
                                                                <a rel="{{$enquiry->id}}" rel1="enquiry-delete" href="javascript:" class="btn btn-danger deleteRecord">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->


                                <!-- /.box -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </section>
                    <!-- /.content -->
                    <!-- content page -->


                </div>
            </div>

        </section>
    </div>
@section('head')
    <link rel="stylesheet" href="{{asset('public/css/sweetalert.css')}}">
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('public/js/sweetalert.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $(".deleteRecord").click(function(){
                var id = $(this).attr('rel');
                var deleteFunction = $(this).attr('rel1');
                swal({
                        title: "Are You Sure",
                        text: "You will not be able to recover this record again",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yes, Delete it!"
                    },
                    function(){
                        window.location.href="/travelcompany/admin/"+deleteFunction+"/"+id;
                    }
                );
            });
        });
    </script>

    <script src="{{asset('public/adminpanel/assets/vendor_components/datatable/datatables.min.js')}}"></script>
@endsection

@endsection