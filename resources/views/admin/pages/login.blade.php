<!doctype html>
<html class="no-js " lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Coupons Percent Off - Admin Login ::</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/authentication.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">
</head>

<body class="theme-cyan authentication sidebar-collapse">
<!-- Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:url({{asset('assets/images/login.jpg')}})"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="post" action="{{route('admin.authenticate')}}">
                    @csrf
                    <div class="header">
                        <div class="logo-container">
                            <img src="{{asset('assets/images/logo.svg')}}" alt="">
                        </div>
                        <h5>Admin Log in</h5>
                    </div>
                    
                    @if ($errors->has('msg'))
                    <p style="color:red;">{{ $errors->first('msg') }}</p>
                    @endif
                    <div class="content">                                                
                        <div class="input-group input-lg">
                            <input type="email" name="email" value="{{old('email')}}" id="email" class="form-control" placeholder="Enter email address">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        {{ $errors->first('email') }}
                      
                      
                        <div class="input-group input-lg">
                            <input type="password" name="password" value="{{old('password')}}" id="password" placeholder="Password" class="form-control" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                        {{ $errors->first('password') }}
                    </div>
                   
                    <div class="footer text-center">
                        <button type="submit" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">SIGN IN</button>
                        {{-- <h6 class="m-t-20"><a href="forgot-password.html" class="link">Forgot Password?</a></h6> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->

<script>
   $(".navbar-toggler").on('click',function() {
    $("html").toggleClass("nav-open");
});
//=============================================================================
$('.form-control').on("focus", function() {
    $(this).parent('.input-group').addClass("input-group-focus");
}).on("blur", function() {
    $(this).parent(".input-group").removeClass("input-group-focus");
});
</script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/compass/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Sep 2019 07:02:48 GMT -->
</html>