@extends('admin.includes.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-12 ">
                <div class="box box-body bg-primary">
                    <div class="flexbox">
                        <div id="spark1"></div>
                        <span class="font-size-40 font-weight-200">{{$usercount}}</span>
                    </div>
                    <div class="text-right">Users</div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12 ">
                <a href="{{route('package.index')}}">
                    <div class="box box-body bg-danger">
                        <div class="flexbox">
                            <div id="spark2"></div>
                            <span class="font-size-40 font-weight-200">{{$packagecount}}</span>
                        </div>
                        <div class="text-right">Packages</div>
                    </div>
                </a>
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <a href="{{route('blog.index')}}">
                    <div class="box box-body bg-warning">
                        <div class="flexbox">
                            <div id="spark3"></div>
                            <span class="font-size-40 font-weight-200">{{$blogcount}}</span>
                        </div>
                        <div class="text-right">Blog</div>
                    </div>
                </a>
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <a href="{{route('slider.index')}}">
                    <div class="box box-body bg-info">
                        <div class="flexbox">
                            <div id="spark4"></div>
                            <span class="font-size-40 font-weight-200">{{$slidercount}}</span>
                        </div>
                        <div class="text-right">Slider</div>
                    </div>
                </a>

            </div>
            <!-- /.col -->

            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <a href="{{route('book.index')}}">
                    <div class="box box-body bg-info">
                        <div class="flexbox">
                            <div id="spark4"></div>
                            <span class="font-size-40 font-weight-200">{{$bookcount}}</span>
                        </div>
                        <div class="text-right">Booking</div>
                    </div>
                </a>
                </div>

            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <a href="{{route('enquiry.index')}}">
                    <div class="box box-body bg-warning">
                        <div class="flexbox">
                            <div id="spark3"></div>
                            <span class="font-size-40 font-weight-200">{{$enquirycount}}</span>
                        </div>
                        <div class="text-right">Enquiry</div>
                    </div>
                </a>
            </div>
            <!-- /.col -->
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

    @endsection