<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eyecix.com/html/touristpoint/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Jun 2019 08:33:37 GMT -->
@include('frontend.includes.head')
@yield('head')

@include('frontend.includes.header')
<body>

<!--// Main Wrapper \\-->
@yield('content')
<!--// Main Wrapper \\-->

<!--// Footer \\-->
@include('frontend.includes.footer')
<!--// Footer \\-->


<div class="clearfix"></div>
</div>
<!--// Main Wrapper \\-->
<!--// Header Menu \\-->
<div class="transparent-background"></div>
@include('frontend.includes.nav')

<!--// Header Menu \\-->


<!-- jQuery (necessary for JavaScript plugins) -->
@include('frontend.includes.script')
@yield('script')
</body>

<!-- Mirrored from eyecix.com/html/touristpoint/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Jun 2019 08:36:06 GMT -->
</html>