@extends('admin.includes.master')
@section('content')
    <div class="content-wrapper">

        <section class="content">

            <div class="row">
                <div class="col-lg-12">

                    <section class="content-header">
                        <h1>
                            Menu Table
                        </h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="iconsmind-Library"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                            <li class="breadcrumb-item active">Site Setting tables</li>
                        </ol>
                    </section>
                    @if(session()->has('message'))
                        <div class="alert alert-primary">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-success">x</span></button>
                            {{ session()->get('message') }}
                        </div>
                    @endif
                <!-- Main content -->
                    <section class="content">

                        <div class="row">
                            <div class="col-12">
                                <a href="{{route('site.create')}}" class="btn btn-primary">Create Site</a>
                                <div class="box box-solid box-primary">

                                    <div class="box-header with-border">
                                        <h4 class="box-title">Site Table</h4>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                        <th>Location</th>
                                                        <th>Facebook</th>
                                                        <th>Twitter</th>
                                                        <th>Instagram</th>
                                                        <th>Youtube</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($site as $s)
                                                        <tr>
                                                            <td>{{$loop -> index+1}}</td>
                                                            <td>{{$s->phone}}</td>
                                                            <td>{{$s->email}}</td>
                                                            <td>{{$s->location}}</td>
                                                            <td>{{$s->facebook}}</td>
                                                            <td>{{$s->twitter}}</td>
                                                            <td>{{$s->insta}}</td>
                                                            <td>{{$s->youtube}}</td>
                                                            <td>
                                                                <a href="{{route('site.edit',$s->id)}}" class="btn btn-primary">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                                <a rel="{{$s->id}}" rel1="sites" href="javascript:" class="btn btn-danger deleteRecord">
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
    @endsection

    @endsection