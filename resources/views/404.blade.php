@extends('Client.Layouts.master')
@section('title','درباره ما')
@section('breadcrumb')
    @include('Client.Layouts.breadcrumb')
@endsection
@section('content')
    <div class="blog_main_wrapper blog_toppadder100 blog_bottompadder100">
        <div class="blog_innerpages blog_aboutpage">

            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="blog_error_img">
                    <img src="https://via.placeholder.com/500x580" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="blog_error_data">
                    <h1>خطا</h1>
                    <h2>404</h2>
                    <h3 dir="rtl">صفحه مورد نظر پیدا نشد!</h3>
                    <a href="index.html" class="blog_btn blog_bg_pink">صفحه اصلی</a>
                </div>
            </div>
        </div>
    </div>
@endsection
