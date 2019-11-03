@extends('frontend.includes.master')

@section('content')
    <!--// Main Wrapper \\-->
    <div class="touristpoint-main-wrapper">

        <!--// Header \\-->
        <header id="touristpoint-header" class="touristpoint-header-one">

            <aside class="touristpoint-logo"><a href="{{route('front.index')}}"><img src="{{asset('public/frontend/images/logo.png')}}" alt=""></a></aside>
            <aside class="touristpoint-navbar-open"> <a href="#"><i class="icon-three4"></i></a> </aside>

        </header>
        <!--// Header \\-->

        <!--// Sub Header \\-->
        <div class="touristpoint-subheader">
            <span class="touristpoint-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Error 404</h1>
                        <ul class="touristpoint-breadcrumb">
                            <li><a href="{{route('front.index')}}">Home</a></li>
                            <li>Error 404</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--// Sub Header \\-->

        <!--// Main Content \\-->
        <div class="touristpoint-main-content touristpoint-padding-bottom">

            <!--// Main Section \\-->
            <div class="touristpoint-main-section touristpoint-error-background-pic">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="touristpoint-error-page-text">
                                <span>Sorry the Page Could not be Found here!</span>
                                <a class="touristpoint-error-btn" href="{{route('front.index')}}">Back To Homepage</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

        </div>
        <!--// Main Content \\-->
        <div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    @endsection