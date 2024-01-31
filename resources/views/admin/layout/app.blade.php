<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>:: Coupons Percent Off - Admin ::</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/plugins/morrisjs/morris.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/plugins/toastr/build/toastr.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">
    
    @stack('styles')
</head>
<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{asset('assets/images/logo.jpeg')}}" width="48" height="48" alt="couponspercentoff"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
@include('admin.includes.topbar')

<!-- Left Sidebar -->
@include('admin.includes.sidebar')

<!-- Right Sidebar -->
{{-- @include("admin.includes.right_sidebar") --}}

<!-- Chat-launcher -->
{{-- @include("admin.includes.chat_launcher") --}}

<!-- Main Content -->
@yield('content')
<!-- Jquery Core Js --> 
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->
<script src="{{asset('assets/plugins/bootstrap-notify/bootstrap-notify.js')}}"></script> <!-- Bootstrap Notify Plugin Js -->
<script src="{{asset('assets/bundles/morrisscripts.bundle.js')}}"></script><!-- Morris Plugin Js -->
<script src="{{asset('assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob Plugin Js -->
<script src="{{asset('assets/bundles/sparkline.bundle.js')}}"></script> <!-- Sparkline Plugin Js -->
<script src="{{asset('assets/plugins/toastr/toastr.js')}}"></script>

<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/ui/notifications.js')}}"></script> <!-- Custom Js -->
<script src="{{asset('assets/js/pages/index.js')}}"></script>
<script>
$(document).ready(function(){
	$.ajaxSetup({
      	headers: {
       		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      	}
   	});
})
</script>
@stack('script')
</body>

<!-- Mirrored from www.wrraptheme.com/templates/compass/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Sep 2019 07:02:41 GMT -->
</html>