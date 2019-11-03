<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('public/adminpanel/images/favicon.ico')}}">

    <title>All Flags - Log in </title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{asset('public/adminpanel/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{asset('public/adminpanel/css/bootstrap-extend.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('public/adminpanel/css/master_style.css')}}">

    <!-- NeoX Admin skins -->
    <link rel="stylesheet" href="{{asset('public/adminpanel/css/skins/_all-skins.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition bg-img" style="background-image:url({{asset('public/adminpanel//images/bg-2.jpg')}})" data-overlay=5>

<div class="container pt-3 h-p100">
    <div class="row h-p100 justify-content-sm-center align-items-center">
        <div class="col-sm-6 col-md-4">

            <div class="card border-info text-center">
                <div class="card-header">
                    Sign in to continue
                </div>
                <div class="card-body">
                    <img src="{{asset('public/adminpanel//images/avatar/2.jpg')}}" class="img-fluid rounded-circle w-150 mb-10">
                    <h4 class="text-center mb-20">All Flags</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <input id="email" type="email" placeholder="Enter Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror
                        <br>
                        <input id="password" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <br>



                        <button class="btn btn-lg btn-primary btn-block mb-20" type="submit">  {{ __('Login') }}</button>
                        @if (Route::has('password.request'))
                            <a href="" class="txt1">
                                Forgot Password?
                            </a>

                            {{--					  {{ __('Forgot Your Password?') }}--}}
                            {{--                </a>--}}
                        @endif
                        <div class="checkbox float-left">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                    </form>
                </div>
            </div>
            <a href="register.html" class="float-right text-white">Create an account </a>
        </div>
    </div>
</div>


<!-- jQuery 3 -->
<script src="{{asset('public/adminpanel/assets/vendor_components/jquery/dist/jquery.min.js')}}"></script>

<!-- popper -->
<script src="{{asset('public/adminpanel/assets/vendor_components/popper/dist/popper.min.js')}}"></script>

<!-- Bootstrap 4.0-->
<script src="{{asset('public/adminpanel/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
