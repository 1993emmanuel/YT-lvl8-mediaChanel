<!DOCTYPE html>
<html lang="en">

<head>
    <title>SOENGSOUY.COM </title>

      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
      <meta name="keywords" content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes">
      <!-- Favicon icon -->
      <link rel="icon" href="{{URL::to('assets/images/favicon.ico')}}" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/bootstrap/css/bootstrap.min.css')}}">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{URL::to('assets/icon/themify-icons/themify-icons.css')}}">
	  <link rel="stylesheet" type="text/css" href="{{URL::to('assets/icon/font-awesome/css/font-awesome.min.css')}}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{URL::to('assets/icon/icofont/css/icofont.css')}}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/jquery.mCustomScrollbar.css')}}">
  </head>

  <body>
  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            {{-- navbar --}}
            @include('navbar.navbar')
            <div class="pcoded-main-container">
                @yield('contain')
            </div>
        </div>
       
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="{{URL::to('assets/js/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('assets/js/popper.js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{URL::to('assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{URL::to('assets/js/modernizr/modernizr.js')}}"></script>
<!-- am chart -->
<script src="{{URL::to('assets/pages/widget/amchart/amcharts.min.js')}}"></script>
<script src="{{URL::to('assets/pages/widget/amchart/serial.min.js')}}"></script>
<!-- Chart js -->
<script type="text/javascript" src="{{URL::to('assets/js/chart.js/Chart.js')}}"></script>
<!-- Todo js -->
<script type="text/javascript " src="{{URL::to('assets/pages/todo/todo.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{URL::to('assets/pages/dashboard/custom-dashboard.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('assets/js/script.js')}}"></script>
<script type="text/javascript " src="{{URL::to('assets/js/SmoothScroll.js')}}"></script>
<script src="{{URL::to('assets/js/pcoded.min.js')}}"></script>
<script src="{{URL::to('assets/js/vartical-demo.js')}}"></script>
<script src="{{URL::to('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

{{-- validate --}}
<script src="{{URL::to('assets/js/query.validate.js')}}"></script>


@yield('script')

</body>
</html>
