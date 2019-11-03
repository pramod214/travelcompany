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
                            <li class="breadcrumb-item"><a href="#">Package Category</a></li>
                            <li class="breadcrumb-item activew">Create Package Category</li>
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
                        <a href="{{route('category.index')}}" class="btn btn-primary">View Package Category</a>
                        <div class="box box-solid box-primary">
                            <div class="box-header with-border">
                                <h6 class="box-subtitle text-white">Create Package Category</h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col">


                                        <form method="POST" action="{{route('category.store')}}" id="site">

                                            {!! Session::has('fail_msg') ? '<p style="color:red;">'.Session::get('fail_msg').'</p>' : '' !!}
                                            {!! Session::has('success_msg') ? '<p style="color:green;">'.Session::get('success_msg').'</p>' : '' !!}

                                            @csrf
                                            <div class="form-group">
                                                <h5>Country</h5>
                                                <div class="controls">
                                                    <input type="text" name="name" id="name" class="form-control"  data-validation--message="This field is " value="{{old('name')}}"> </div>
                                            </div>

                                            <div class="text-xs-right">
                                                <button type="submit" id="submit" class="btn btn-info">Create Package Category</button>
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