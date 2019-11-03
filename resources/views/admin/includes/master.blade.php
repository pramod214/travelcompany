<!DOCTYPE html>
<html lang="en">
@include('admin.includes.head')
@yield('head')

<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

    @include('admin.includes.header')

   @include('admin.includes.sidebar')

 @yield('content')

    @include('admin.includes.footer')


    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


@include('admin.includes.script')
@yield('script')

</body>
</html>
