@extends('admin.includes.master')
@section('content')

    <div class="content-wrapper">
        <section class="content">

            <div class="row">
                <div class="col-lg-12">


                    <section class="content-header">
                        <h1>
                            Package Image
                        </h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="iconsmind-Library"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Package Image </a></li>
                            <li class="breadcrumb-item activew">Add Package Image</li>
                        </ol>
                    </section>

                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-success">x</span></button>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-success">x</span></button>
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if(session()->has('error_message'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-success">x</span></button>
                            {{ session()->get('error_message') }}
                        </div>
                    @endif


                    <section class="content">
                        <div class="box box-solid box-primary">
                            <div class="box-header with-border">
                                <h6 class="box-subtitle text-white">Add Package Image</h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col">


                                        <form  action="{{route('image.add',$images->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" value="{{$images->id}}" name="package_id">

                                            <div class="form-group">
                                                <h5>Image<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="image[]" multiple='multiple' value="#" class="form-control" required data-validation-required-message="This field is required"> </div>
                                            </div>

                                            <div class="text-xs-right">
                                                <button type="submit" id="submit" class="btn btn-info">Add Package Image</button>
                                            </div>

                                        </form>

                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </section>

                                    <section class="content">
                                        <a href="{{route('package.index')}}" class="btn btn-primary">View Packages</a>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="box box-solid box-primary">
                                                  <div class="box-header with-border">
                                                        <h4 class="box-title">View Package Image Table</h4>
                                                    </div>
                                                    <!-- /.box-header -->
                                                    <div class="box-body">
                                                        <div class="box-body">
                                                            <div class="table-responsive">
                                                                <table id="example1" class="table table-bordered table-striped">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>S.N</th>
                                                                        <th>Image</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @foreach($photos as $p)
                                                                        <tr>
                                                                            <td>{{$loop -> index+1}}</td>
                                                                            <td>
                                                                                <img src="{{asset('public/adminpanel/uploads/package/photos/'.$p->image)}}" alt="" width="100px">
                                                                            </td>
                                                                            <td>
                                                                                <a rel="{{$p->id}}" rel1="delete-package-image" href="javascript:" class="btn btn-danger deleteRecord">
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


    </div>
    </div>

    </section>
    </div>

@endsection
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


