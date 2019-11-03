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
                            <li class="breadcrumb-item"><a href="#">Site</a></li>
                            <li class="breadcrumb-item activew">Create Site Setting</li>
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
                        <a href="" class="btn btn-primary">View Site</a>
                        <div class="box box-solid box-primary">
                            <div class="box-header with-border">
                                <h6 class="box-subtitle text-white">Create Site</h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col">


                                        <form method="POST" action="{{route('site.store')}}" id="site">

                                            {!! Session::has('fail_msg') ? '<p style="color:red;">'.Session::get('fail_msg').'</p>' : '' !!}
                                            {!! Session::has('success_msg') ? '<p style="color:green;">'.Session::get('success_msg').'</p>' : '' !!}

                                            @csrf
                                            <div class="form-group">
                                                <h5>Phone</h5>
                                                <div class="controls">
                                                    <input type="text" name="phone" id="phone" class="form-control"  data-validation--message="This field is " value="{{old('phone')}}"> </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Email</h5>
                                                <div class="controls">
                                                    <input type="email" name="email" id="email" class="form-control"  data-validation--message="This field is " value="{{old('email')}}"> </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Location</h5>
                                                <div class="controls">
                                                    <input type="text" name="location" class="form-control"  data-validation--message="This field is " value="{{old('location')}}"> </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Facebook</h5>
                                                <div class="controls">
                                                    <input type="text" name="facebook" class="form-control"  value="{{old('facebook')}}"> </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Twitter<span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="text" name="twitter" class="form-control"  value="{{old('twitter')}}"> </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Instagram<span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="text" name="insta" class="form-control"  value="{{old('insta')}}"> </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Youtube<span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="text" name="youtube" class="form-control" value="{{old('youtube')}}"> </div>
                                            </div>



                                            <div class="text-xs-right">
                                                <button type="submit" id="submit" class="btn btn-info">Create Site</button>
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