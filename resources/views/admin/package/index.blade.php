@extends('admin.includes.master')
@section('content')
    <div class="content-wrapper">

        <section class="content">

            <div class="row">
                <div class="col-lg-12">

                    <section class="content-header">
                        <h1>
                            Package Table
                        </h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="iconsmind-Library"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                            <li class="breadcrumb-item active">Package tables</li>
                        </ol>
                    </section>
                    @if(session()->has('success_message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-success">x</span></button>
                            {{ session()->get('success_message') }}
                        </div>
                    @endif

                    @if(session()->has('update_message'))
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-info">x</span></button>
                            {{ session()->get('update_message') }}
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
                                <a href="{{route('package.create')}}" class="btn btn-primary">CreatePackage</a>
                                <div class="box box-solid box-primary">

                                    <div class="box-header with-border">
                                        <h4 class="box-title">Package Table</h4>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="box-body">
                                            <div class="table-responsive">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Title</th>
                                                        <th>Destination</th>
                                                        <th>Short Description</th>
                                                        <th>Content</th>
                                                        <th>Duration</th>
                                                        <th>Departure Date</th>
                                                        <th>Departure Time</th>
                                                        <th>Return Date</th>
                                                        <th>Return Time</th>
                                                        <th>No of People</th>
                                                        <th>Price</th>
                                                        <th>Discount</th>
                                                        <th>Location</th>
                                                        <th>Category Name</th>
                                                        <th>Itineraries</th>
                                                        <th>Show In Home</th>
                                                        <th>Image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($packages as $package)
                                                        <tr>
                                                            <td>{{$loop -> index+1}}</td>
                                                            <td>{{$package->title}}</td>
                                                            <td>{{$package->destination}}</td>
                                                            <td>{!! substr($package->shortDescription,0,10) !!}</td>
                                                            <td>{!! substr($package->content,0,10) !!}</td>
                                                            <td>{{$package->duration}}</td>
                                                            <td>{{$package->departureDate}}</td>
                                                            <td>{!! substr($package->departureTime,0,10)!!}</td>
                                                            <td>{{$package->returnDate}}</td>
                                                            <td>{{$package->returnTime}}</td>
                                                            <td>{{$package->noofpeople}}</td>
                                                            <td>{{$package->price}}</td>
                                                            <td>{{$package->discount}}</td>
                                                            <td>{{$package->location}}</td>
                                                            <td>{{$package->category->name}}</td>
                                                            <td>{!! substr($package->itineraries,0,10) !!}</td>
                                                            <td>@if($package->showinhome==0) False @else True @endif</td>
                                                            <td>
                                                                <img src="{{asset('public/adminpanel/uploads/package/'.$package->image)}}" alt="{{$package->title}}" width="100px">
                                                            </td>
                                                            <td>
                                                                <a href="{{route('package.edit',$package->id)}}" class="btn btn-primary">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                                <a rel="{{$package->id}}" rel1="package-delete" href="javascript:" class="btn btn-danger deleteRecord">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                                <a href="{{route('image.add',$package->id)}}" class="btn btn-success">
                                                                    <i class="fa fa-image"></i>
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