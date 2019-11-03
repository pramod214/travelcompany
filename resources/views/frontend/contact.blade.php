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
                        <h1>Contact Us</h1>
                        <ul class="touristpoint-breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Contact Us</li>
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
                    
                        <div class="col-md-8">
                            <div class="touristpoint-contact-us-text">
                                <div class="touristpoint-fancy-title">
                                    <h2>Contact With Us</h2>
                                    <p>You can contact us through the given details</p>
                                </div>
                                <form method="POST" action="{{route('contact.store')}}">
                                    @csrf
                                    <ul>
                                        <li>
                                            <label>Name:</label>
                                             <input type="text" value="{{old('name')}}" placeholder="Name" name="name">
                                            <i class="fa fa-user"></i>
                                        </li>
                                        <li>
                                            <label>Your Email:</label>
                                            <input type="text" placeholder="Email" value="{{old('email')}}" name="email">
                                            <i class="fa fa-envelope"></i>
                                        </li>
                                        <li class="masg-box">
                                            <label>Your Message:</label>
                                            <textarea name="message" placeholder="Type Here" name="message">{{old('message')}}</textarea>
                                            <i class="fa fa-commenting"></i>
                                        </li>
                                        <li>
                                            <label class="submit-btn">
                                                <input type="submit" value="Send Now">
                                                <i class="fa fa-paper-plane"></i>
                                            </label>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="touristpoint-contact-us">
                                <div class="touristpoint-fancy-title">
                                    <h2>Get In Touch</h2>
                                
                                </div>
                                <ul>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <div class="touristpoint-contact-info">
                                            <h4>Call Us At:</h4>
                                            <p>{{$_SITE->phone}}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <div class="touristpoint-contact-info">
                                            <h4>Mail Us At:</h4>
                                            <a href="mailto:yourdomain@name.com">{{$_SITE->email}}</a>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <div class="touristpoint-contact-info">
                                            <h4>Find Us At:</h4>
                                            <p>{{$_SITE->location}} </p>
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