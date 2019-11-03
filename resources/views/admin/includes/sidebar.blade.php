<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span>Site Setting</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('site.create')}}"><i class="iconsmind-Arrow-Through"></i>Create Site Setting</a></li>
                    <li><a href="{{route('site.index')}}"><i class="iconsmind-Arrow-Through"></i>View Site Setting</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-reorder"></i>
                    <span>Package Category</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('category.create')}}"><i class="iconsmind-Arrow-Through"></i>Create Package Category</a></li>
                    <li><a href="{{route('category.index')}}"><i class="iconsmind-Arrow-Through"></i>View Package Category</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-bag"></i>
                    <span>Package</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('package.create')}}"><i class="iconsmind-Arrow-Through"></i>Create Package</a></li>
                    <li><a href="{{route('package.index')}}"><i class="iconsmind-Arrow-Through"></i>View Package</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-rss-square"></i>
                    <span>Blog</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('blog.create')}}"><i class="iconsmind-Arrow-Through"></i>Create Blog</a></li>
                    <li><a href="{{route('blog.index')}}"><i class="iconsmind-Arrow-Through"></i>View Blog</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-image"></i>
                    <span>Slider</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('slider.create')}}"><i class="iconsmind-Arrow-Through"></i>Create Slider</a></li>
                    <li><a href="{{route('slider.index')}}"><i class="iconsmind-Arrow-Through"></i>View Slider</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-address-book"></i>
                    <span>Book</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('book.index')}}"><i class="iconsmind-Arrow-Through"></i>View Booking</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-address-book"></i>
                    <span>Enquiry</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('enquiry.index')}}"><i class="iconsmind-Arrow-Through"></i>View Enquiry</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-address-book"></i>
                    <span>Contact</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('contact.index')}}"><i class="iconsmind-Arrow-Through"></i>View Contact</a></li>
                </ul>
            </li>

        </ul>
    </section>
</aside>