<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="fahimi-eng">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="Admin/assets/images/favicon.png">
    <title>@yield('title')</title>
    <!-- Custom CSS -->
    <link href="Admin/assets/libs/morris.js/morris.css" rel="stylesheet">
    <link href="Admin/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="Admin/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="Admin/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @stack('link')
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @include('Admin.Layouts.header')
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    @include('Admin.Layouts.sidebar')
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    @yield('content')
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- customizer Panel -->
<!-- ============================================================== -->
@include('Admin.Layouts.customizer')
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="Admin/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="Admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="Admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<script src="Admin/dist/js/app.min.js"></script>
<script src="Admin/dist/js/app.init.js"></script>
<script src="Admin/dist/js/app-style-switcher.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="Admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="Admin/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="Admin/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="Admin/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="Admin/dist/js/custom.js"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="Admin/assets/libs/chartist/dist/chartist.min.js"></script>
<script src="Admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<!--c3 charts -->
<script src="Admin/assets/extra-libs/c3/d3.min.js"></script>
<script src="Admin/assets/extra-libs/c3/c3.min.js"></script>
<!-- chartjs -->
<script src="Admin/assets/libs/chart.js/dist/chart.min.js"></script>
<script src="Admin/assets/libs/raphael/raphael.min.js"></script>
<script src="Admin/assets/libs/morris.js/morris.min.js"></script>

<script src="Admin/dist/js/pages/dashboards/dashboard2.js"></script>
@stack('script')

</body>

</html>
