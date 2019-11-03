@extends('admin.includes.master')
@section('content')

    <div class="content-wrapper">
        <section class="content">

            <div class="row">
                <div class="col-lg-12">


                    <section class="content-header">
                        <h1>
                            Package
                        </h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="iconsmind-Library"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Package </a></li>
                            <li class="breadcrumb-item activew">Edit Package</li>
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
                        <a href="{{route('package.index')}}" class="btn btn-primary">View Package</a>
                        <div class="box box-solid box-primary">
                            <div class="box-header with-border">
                                <h6 class="box-subtitle text-white">Edit Package</h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col">


                                        <form  action="{{route('package.update',$package->id)}}" method="POST" id="site" enctype="multipart/form-data">

                                            {!! Session::has('fail_msg') ? '<p style="color:red;">'.Session::get('fail_msg').'</p>' : '' !!}
                                            {!! Session::has('success_msg') ? '<p style="color:green;">'.Session::get('success_msg').'</p>' : '' !!}

                                            @csrf
                                            <div class="form-group">
                                                <h5>Title<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="title" id="title" class="form-control" value="{{$package->title}}"> </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Destination<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="destination" id="destination" class="form-control" value="{{$package->destination}}"> </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Short Description<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="shortDescription" class="form-control">{{$package->shortDescription}} </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Content<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="content" class="form-control">{{$package->content}} </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Duration<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="duration" value="{{$package->duration}}" class="form-control" >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Departure Date<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="departureDate" id="departureDate" value="{{$package->departureDate}}" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Return Date<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="returnDate" id="returnDate" value="{{$package->returnDate}}" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Departure Time<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="departureTime" id="departureTime" value="{{$package->departureTime}}" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Return Time<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="returnTime" id="returnTime" value="{{$package->returnTime}}" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>No of People<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="noofpeople" id="noofpeople" value="{{$package->noofpeople}}" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Price <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="price" value="{{$package->price}}" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Discount In Percent(%)  <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="discount" value="{{$package->discount}}" placeholder="place 0 if there is no any discount" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Location<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="location" value="{{$package->location}}" class="form-control" >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Category<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="category" class="form-control">
                                                        <option value="">Select Category</option>
                                                        @foreach ($categories as $category)
                                                            <option Value="{{$category->id}}" @if($package->category_id==$category->id) selected @endif>{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Show in home<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="showinhome" class="form-control">
                                                        <option value="" >Select</option>
                                                        <option value="0" @if($package->showinhome==0) selected @endif>False</option>
                                                        <option value="1" @if($package->showinhome==1) selected @endif>True</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Itineraries<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="itineraries" id="editor1" class="form-control">{{$package->itineraries}} </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Image<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <img src="{{asset('public/adminpanel/uploads/package/'.$package->image)}}" alt="{{$package->title}}" height="150px">
                                                    <input type="file" name="image" value="#" class="form-control" >
                                                </div>
                                            </div>

                                            <div class="text-xs-right">
                                                <button type="submit" id="submit" class="btn btn-info">Edit Package </button>
                                            </div>

                                        </form>

                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </section>


                </div>
            </div>

        </section>
    </div>

@endsection

@section('head')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('script')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "departureDate" ).datepicker({
                dateFormat:'yy-mm-dd',
                maxDate:0,
                changeMonth:true,
                changeYear:true,
            });
        });
    </script>

    <script>
        $( function() {
            $( "returnDate" ).datepicker({
                dateFormat:'yy-mm-dd',
                minDate:0,
                changeMonth:true,
                changeYear:true,
            });
        });
    </script>
@endsection