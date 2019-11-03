@extends('frontend.includes.master')

@section('content')


<!--// Main Wrapper \\-->
<div class="touristpoint-main-wrapper">



    <!--// Main Banner \\-->
    <div class="touristpoint-banner">

        <div class="touristpoint-banner-layer">
            <img src="{{asset('public/adminpanel/uploads/slider/'.$_SLIDER->image)}}" alt="">
            <span class="blue-transparent"></span>
            <div class="touristpoint-banner-caption"> <div class="container"> <h1>{{$_SLIDER->title}}</h1> </div> </div>
        </div>

    </div>
    <!--// Main Banner \\-->

    <!--// Main Content \\-->
    <div class="touristpoint-main-content touristpoint-content-padding">

        <!--// Main Section \\-->
        <div class="touristpoint-main-section touristpoint-tab-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <!--// Tabs \\-->
                        <div class="touristpoint-ticket-tabs">
                            <!-- Nav tabs -->
                            <ul class="nav-tabs" role="tablist">
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane active" id="profile">
                                    <div class="touristpoint-tab-form">
                                        <form>
                                            <ul>
                                                <li>
                                                    <input type="text" value="Enter Your Package" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }">
                                                    <i class="far fa-box-open"></i>
                                                </li>
                                                <li>
                                                    <input type="text" value="Location" onblur="if(this.value == '') { this.value ='Location'; }" onfocus="if(this.value =='Location') { this.value = ''; }">
                                                    <i class="fa fa-location-arrow"></i>
                                                </li>

                                                <li>
                                                    <input type="text" id="amount" readonly style="border:0; color:#808285;">
                                                </li>
                                                <li><div id="slider-range"></div></li>
                                                <li><input type="submit" value="Search Tour"></li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Tabs \\-->
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="touristpoint-main-section touristpoint-services-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="touristpoint-fancy-title">
                            <h2>Why Choose Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non est massa. Praesent rutrum aliquet.</p>
                        </div>
                        <div class="touristpoint-services">
                            <ul class="row">
                                <li class="col-md-3">
                                    <span><i class="icon-bag"></i></span>
                                    <h5>Shops</h5>
                                    <p>Cras a lectus non ante ullamcor per pharetra. Phasellus temp scelerisque nisl dapi.</p>
                                </li>
                                <li class="col-md-3">
                                    <span><i class="icon-restaurant"></i></span>
                                    <h5>Restaurants</h5>
                                    <p>Cras a lectus non ante ullamcor per pharetra. Phasellus temp scelerisque nisl dapi.</p>
                                </li>
                                <li class="col-md-3">
                                    <span><i class="icon-holidays"></i></span>
                                    <h5>Hotels</h5>
                                    <p>Cras a lectus non ante ullamcor per pharetra. Phasellus temp scelerisque nisl dapi.</p>
                                </li>
                                <li class="col-md-3">
                                    <span><i class="icon-circle4"></i></span>
                                    <h5>Info & FAQ</h5>
                                    <p>Cras a lectus non ante ullamcor per pharetra. Phasellus temp scelerisque nisl dapi.</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="touristpoint-main-section touristpoint-destination-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="touristpoint-fancy-title">
                            <h2>Most Popular Destinations</h2>
                            <p>Check our popular destination so that you can make a mind to visit the places.</p>
                        </div>
                        <div class="touristpoint-destination touristpoint-destination-modern">
                            <ul class="row">
                                <?php
                                $count=1;
                                foreach ($destination as $d){
                                    if($count==1){?>
                                    <li class="col-md-8">
                                        <figure><a href="{{route('front.tour_details',$d->id)}}"><img src="{{asset('public/frontend/extra-images/destination-img-1.jpg')}}" alt=""><span></span></a>
                                            <figcaption>
                                                <span>{{$d->title}}</span>
                                                <h5><a href="{{route('front.tour_details',$d->id)}}">{{$d->destination}}</a></h5>
                                                <ul class="touristpoint-destination-comment">
                                                    <li><a href="{{route('front.404')}}" class="fa fa-heart-o" data-toggle="tooltip" title="Like"></a></li>
                                                    <li><a href="{{route('front.404')}}" class="fa fa-comment-o" data-toggle="tooltip" title="comment"></a></li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <?php
                                    }

                                    else{?>
                                    <li class="col-md-4">
                                        <figure><a href="{{route('front.tour_details',$d->id)}}"><img src="{{asset('public/frontend/extra-images/destination-img-2.jpg')}}" alt=""><span></span></a>
                                            <figcaption>
                                                <span>{{$d->title}}</span>
                                                <h5><a href="{{route('front.tour_details',$d->id)}}">{{$d->destination}}</a></h5>
                                                <ul class="touristpoint-destination-comment">
                                                    <li><a href="{{route('front.404')}}" class="fa fa-heart-o" data-toggle="tooltip" title="Like"></a></li>
                                                    <li><a href="{{route('front.404')}}" class="fa fa-comment-o" data-toggle="tooltip" title="comment"></a></li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <?php
                                    }
                                    $count++;
                                }
                                ?>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="touristpoint-main-section touristpoint-tour-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="touristpoint-fancy-title">
                            <h2>Top Tour Packages</h2>
                            <p>Check our top tour packages.</p>
                        </div>
                        <div class="touristpoint-tour touristpoint-tour-modern">
                            <ul class="row">
                                @foreach($package as $p)
                                    @if($p->showinhome == 1)
                                <li class="col-md-4">

                                    <figure><a href="{{route('front.tour_details',$p->id)}}"><img src="{{asset('public/adminpanel/uploads/package/'.$p->image)}}" alt=""><i class="fa fa-briefcase"></i></a>
                                        <span>Rs. {{$p->price}}</span>
                                        <div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>

                                        <div class="touristpoint-tour-modern-text" style="padding-top:20px">
                                            <span>{{$p->category->name}}</span>
                                            <h5><a href="{{route('front.tour_details',$p->id)}}">{{$p->title}}</a></h5>
                                            <ul class="touristpoint-tour-option">
                                                <li><a href="{{route('front.404')}}"><i class="fa fa-calendar-o"></i>No Of Days : {{$p->duration}}</a></li>
                                                <li><a href="{{route('front.404')}}"><i class="fa fa-user"></i>People :  {{$p->noofpeople}}</a></li>
                                            </ul>
                                            <p>{{$p->shortDescription}}</p>
                                        </div>
                                    </figure>
                                </li>
                                    @endif
                                    @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="touristpoint-main-section touristpoint-content-post-full">
            <span class="post-transpernt"></span>
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="touristpoint-post-text">
                            <h2>Awesome Experienc for Tourism & Travel</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non est massa. Praesent rutrum aliquet arcu odio, non porttitor quam tristique nec. Vestibulum ante ipsum primis in faucibus cubaailiaCurae; Phasellus gravida sed arcu mattis sodales.</p>
                            <div class="clearfix"></div>
                            <a href="{{route('front.404')}}" class="touristpoint-simple-btn">Book Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="touristpoint-main-section touristpoint-blog-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="touristpoint-fancy-title">
                            <h2>Latest From Our Blog</h2>
                            <p>Check our latest blog.</p>
                        </div>
                        <div class="touristpoint-blog touristpoint-blog-modern">
                            <ul class="row">
                                @foreach($blog as $b)
                                    @if($b->showinhome==1)
                                <li class="col-md-4">
                                    <figure><a href="{{route('front.blog_details',$b->id)}}"><img src="{{asset('public/adminpanel/uploads/blog/'.$b->image)}}" alt=""><i class="fa fa-link"></i></a></figure>
                                    <div class="touristpoint-blog-modern-text">
                                        <time datetime="2008-02-14 20:00">{{substr($b->date,9,10)}} {{substr($b->date,5,-3)}}</time>
                                        <h5><a href="{{route('front.blog_details',$b->id)}}">{{$b->title}}</a></h5>
                                        <ul class="touristpoint-blog-option">
                                            <li><a href="{{route('front.404')}}"><i class="fa fa-user"></i>{{$b->user->name}}</a></li>
                                        </ul>
                                    </div>
                                </li>
                                    @endif
                                    @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="touristpoint-main-section touristpoint-testimonial-full">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="touristpoint-fancy-title">
                            <h2>Our Testimonials</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non est massa. Praesent rutrum aliquet.</p>
                        </div>
                        <div class="touristpoint-testimonial">
                            <ul class="row">
                                <li class="col-md-6">
                                    <div class="touristpoint-testimonial-wrap">
                                        <figure><img src="{{asset('public/frontend/extra-images/testimonial-img1.jpg')}}" alt="">
                                            <figcaption>
                                                <h4><a href="404.html">Siti Rogayah</a></h4>
                                                <div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
                                            </figcaption>
                                        </figure>
                                        <div class="touristpoint-testimonial-text">
                                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit pulv Sed non est massa. Praesent rutrum aliquet turpis in inar pulvinar. Aenean mattis arcu odio”</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="touristpoint-testimonial-wrap">
                                        <figure><img src="{{asset('public/frontend/extra-images/testimonial-img2.jpg')}}" alt="">
                                            <figcaption>
                                                <h4><a href="404.html">Siti Rogayah</a></h4>
                                                <div class="star-rating"><span class="star-rating-box" style="width:100%"></span></div>
                                            </figcaption>
                                        </figure>
                                        <div class="touristpoint-testimonial-text">
                                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit pulv Sed non est massa. Praesent rutrum aliquet turpis in inar pulvinar. Aenean mattis arcu odio”</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
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