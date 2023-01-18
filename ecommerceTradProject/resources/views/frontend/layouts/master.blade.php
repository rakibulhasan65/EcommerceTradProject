<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>{{ $siteSetting->siteTitle }}</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('frontend') }}/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('frontend') }}/css/font-awesome-all.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/flaticon.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/owl.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/animate.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/color.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/rtl.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->

<body class="boxed_wrapper ltr">

    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">Preloader Close</div>
        </div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>


    <!-- main header -->
    @include('frontend.layouts.includes.header')
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    @include('frontend.layouts.includes.mobile-menu')
    <!-- End Mobile Menu -->


    @yield('content')


    <!-- main-footer -->
    @include('frontend.layouts.includes.footer')
    <!-- main-footer end -->



    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>



    <!-- jequery plugins -->
    <script src="{{ asset('frontend') }}/js/jquery.js"></script>
    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/owl.js"></script>
    <script src="{{ asset('frontend') }}/js/wow.js"></script>
    <script src="{{ asset('frontend') }}/js/validation.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.fancybox.js"></script>
    <script src="{{ asset('frontend') }}/js/appear.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.countTo.js"></script>
    <script src="{{ asset('frontend') }}/js/scrollbar.js"></script>
    <script src="{{ asset('frontend') }}/js/nav-tool.js"></script>
    <script src="{{ asset('frontend') }}/js/TweenMax.min.js"></script>
    <script src="{{ asset('frontend') }}/js/circle-progress.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.nice-select.min.js"></script>

    <!-- main-js -->
    <script src="{{ asset('frontend') }}/js/script.js"></script>

</body><!-- End of .page_wrapper -->

</html>
