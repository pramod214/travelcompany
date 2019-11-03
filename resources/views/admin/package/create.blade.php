@extends('admin.includes.master')
@section('content')

    <div class="content-wrapper">
        <section class="content">

            <div class="row">
                <div class="col-lg-12">


                    <section class="content-header">
                        <h1>
                            Site
                        </h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="iconsmind-Library"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Package </a></li>
                            <li class="breadcrumb-item activew">Create Package</li>
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
                                <h6 class="box-subtitle text-white">Create Package</h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col">


                                        <form  action="{{route('package.store')}}" method="POST" id="site" enctype="multipart/form-data">

                                            {!! Session::has('fail_msg') ? '<p style="color:red;">'.Session::get('fail_msg').'</p>' : '' !!}
                                            {!! Session::has('success_msg') ? '<p style="color:green;">'.Session::get('success_msg').'</p>' : '' !!}

                                            @csrf
                                            <div class="form-group">
                                                <h5>Title<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}"> </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Destination<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="destination" id="destination" class="form-control" value="{{old('destination')}}"> </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Short Description<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="shortDescription" class="form-control">{{old('shortDescription')}} </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Content<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="content" class="form-control">{{old('content')}} </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Duration<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="duration" value="{{old('duration')}}" class="form-control" >
                                                </div>
                                            </div>

                                                <div class="form-group">
                                                    <h5>Departure Date<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <input type="text" name="departureDate" id="departureDate" value="{{old('departureDate')}}" class="form-control">
                                                     </div>
                                                 </div>

                                                <div class="form-group">
                                                    <h5>Return Date<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <input type="text" name="returnDate" id="returnDate" value="{{old('returnDate')}}" class="form-control">
                                                    </div>
                                                </div>

                                            <div class="form-group">
                                                <h5>Departure Time<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="departureTime" id="departureTime" value="{{old('departureTime')}}" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Return Time<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="returnTime" id="returnTime" value="{{old('returnTime')}}" class="form-control">
                                                </div>
                                            </div>

                                                <div class="form-group">
                                                    <h5>No of People<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <input type="text" name="noofpeople" id="noofpeople" value="{{old('noofpeople')}}" class="form-control">
                                                    </div>
                                                </div>

                                            <div class="form-group">
                                                <h5>Price <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="price" value="{{old('price')}}" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Discount In Percent(%)  <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="discount" value="{{old('discount')}}" placeholder="place 0 if there is no any discount" class="form-control">
                                                </div>
                                            </div>

                                                <div class="form-group">
                                                    <h5>Location<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="location" value="{{old('location')}}" class="form-control" >
                                                    </div>
                                                </div>

                                            <div class="form-group">
                                                <h5>Category<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="category" class="form-control">
                                                        <option value="">Select Category</option>
                                                        @foreach ($categories as $category)
                                                            <option Value="{{$category->id}}" @if(old('category')==$category->id) selected @endif>{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Itineraries<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="itineraries" id="editor1" class="form-control">{{old('itineraries')}} </textarea>
                                                </div>
                                            </div>

                                            {{--<div class="form-group">--}}
                                                {{--<h5>Show in home<span class="text-danger">*</span></h5>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<select name="category" class="form-control">--}}
                                                        {{--<option value="">Select</option>--}}
                                                        {{--<option value="1">True</option>--}}
                                                        {{--<option value="0">False</option>--}}
                                                    {{--</select>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            <div class="form-group">
                                                <h5>Image<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="image" value="#" class="form-control" > </div>
                                            </div>

                                            <div class="text-xs-right">
                                                <button type="submit" id="submit" class="btn btn-info">Create Package </button>
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