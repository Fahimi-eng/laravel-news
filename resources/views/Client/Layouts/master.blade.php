<!DOCTYPE html>
<!--
Template Name: Wlog - Blog and Magazine HTML template
Version: 1.0.0
Author: fahimi-eng
Website:
Purchase:
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html>
<!--<![endif]-->
<!-- Begin Head -->

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Blog">
    <meta name="keywords" content="">
    <meta name="author" content="fahimi-eng">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="Client/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="Client/js/plugins/swiper/swiper.css">
    <link rel="stylesheet" type="text/css" href="Client/js/plugins/magnific/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="Client/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    @stack('link')
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="Client/images/favicon.png">
</head>
<body class="homepage2">

<div id="blog_preloader_wrapper">
    <div id="blog_preloader_box">
        <div class="blog_loader">
            <div></div>
            <div></div>
        </div>
    </div>
</div>

<div class="blog_main_wrapper">
    <!-- start header -->
    @include('Client.Layouts.header')
    <!-- end header -->

    <!-- sidebar -->
    @include('Client.Layouts.sidebar')
    <!-- end sidebar -->

    <!-- start breadcrumb -->
    @yield('breadcrumb')
    <!-- end breadcrumb -->

    @yield('content')

    @include('Client.Layouts.footer')
</div>
<!--Main js file Style-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="Client/js/jquery.js"></script>
<script src="Client/js/bootstrap.min.js"></script>
<script src="Client/js/theia-sticky-sidebar.js"></script>
<script src="Client/js/plugins/swiper/swiper.min.js"></script>
<script src="Client/js/plugins/magnific/jquery.magnific-popup.min.js"></script>
<script src="Client/js/wow.min.js"></script>
<script src="Client/js/custom.js"></script>
@stack('script')
<!--Main js file Style-->
</body>
</html>
