<header class="main-header">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Logo -->
    <a href="{{route('admin.dashboard')}}" class="logo">
        <!-- mini logo -->
        <b class="logo-mini">
            <span class="light-logo"><img src="{{asset('public/adminpanel/images/logo-light.png')}}" alt="logo"></span>
            <span class="dark-logo"><img src="{{asset('public/adminpanel/images/logo-dark.png')}}" alt="logo"></span>
        </b>
        <!-- logo-->
        <span class="logo-lg">
			  <img src="{{asset('public/adminpanel/images/logo-light-text.png')}}" alt="logo" class="light-logo">
			  <img src="{{asset('public/adminpanel/images/logo-dark-text.png')}}" alt="logo" class="dark-logo">
		  </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="iconsmind-User"></i>
                    </a>
                    <ul class="dropdown-menu scale-up">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{asset('public/adminpanel/images/user5-128x128.jpg')}}" class="float-left rounded-circle" alt="User Image">

                            <p>
                                
                                <small class="mb-5">jb@gmail.com</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row no-gutters">
                                <div class="col-12 text-left">
                                    <a href="#"><i class="ion ion-person"></i> My Profile</a>
                                </div>
                                <div class="col-12 text-left">
                                    <a href="#"><i class="ion ion-settings"></i> Change Password</a>
                                </div>
                                <div role="separator" class="divider col-12"></div>
                            
                                <div role="separator" class="divider col-12"></div>
                                <div class="col-12 text-left">
                                    <a href="{{route('admin.logout')}}"><i class="fa fa-power-off"></i> Logout</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->

            </ul>
        </div>
    </nav>
</header>