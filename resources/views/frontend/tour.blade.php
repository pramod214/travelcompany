@extends('frontend.includes.master')

@section('content')

    <!--// Main Wrapper \\-->
    <div class="touristpoint-main-wrapper">


    <!--// Sub Header \\-->
    <div class="touristpoint-subheader">
        <span class="touristpoint-subheader-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Tour </h1>
                    <ul class="touristpoint-breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Tour </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--// Sub Header \\-->

    <!--// Main Content \\-->
    <div class="touristpoint-main-content">

        <!--// Main Section \\-->
        <div class="touristpoint-main-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="touristpoint-tour-filterable">
                            <ul class="filters-button-group">
                                <li><a data-filter="*" class="is-checked" href="javascript:void(0)">All
                                        <span class="gshape-one"></span>
                                        <span class="gshape-two"></span>
                                        <span class="gshape-three"></span>
                                    </a></li>

                            @foreach($categories as $category)
                                <li><a data-filter=".{{$category->name}}" href="javascript:void(0)">{{$category->name}}
                                        <span class="gshape-one"></span>
                                        <span class="gshape-two"></span>
                                        <span class="gshape-three"></span>

                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="touristpoint-tour touristpoint-tour-grid touristpoint-tour-grid-filter">
                            <ul class="row">
                                @foreach($categories as $category)
                                @foreach($category->getTour as $t)
                                <li class="col-md-4 element-item {{$category->name}}">
                                    <figure><a href="{{route('front.tour_details',$t->id)}}"><img src="{{asset('public/adminpanel/uploads/package/'.$t->image)}}" alt=""><span><i class="fa fa-briefcase"></i>Book Now</span></a>
                                        <span>Featured</span>
                                    </figure>
                                    <div class="touristpoint-tour-grid-text">
                                        <h5><a href="{{route('front.tour_details',$t->id)}}">{{$t->title}}</a></h5>
                                        <div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
                                        <small>( 03 Review )</small>
                                        <span>Rs.{{$t->price}}</span>
                                        <p>{!! $t->shortDescription !!}</p>
                                        <a href="{{route('front.tour_details',$t->id)}}" class="touristpoint-readmore-btn">Read More</a>
                                    </div>
                                </li>
                                    @endforeach
                                    @endforeach
                            </ul>
                        </div>
                        <!--// Pagination \\-->
                        <div class="touristpoint-pagination">
                            <ul class="page-numbers">
                                <li><a class="previous page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-double-left"></i> Previous Post</span></a></li>
                                <li><span class="page-numbers current">01</span></li>
                                <li><a class="page-numbers" href="404.html">02</a></li>
                                <li><a class="page-numbers" href="404.html">03</a></li>
                                <li><a class="page-numbers" href="404.html">...</a></li>
                                <li><a class="page-numbers" href="404.html">10</a></li>
                                <li><a class="next page-numbers" href="404.html"><span aria-label="Next">Next Post<i class="fa fa-angle-double-right"></i></span></a></li>
                            </ul>
                        </div>
                        <!--// Pagination \\-->

                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->
    </div>
    </div>
    <!--// Main Content \\-->
    @endsection