<!DOCTYPE html>
<html>
<head>
    {{-- cssssss---link plugin------------------------------------------------ --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <base href="{{ asset('') }}">
    <link rel="icon" type="text/css" href="">
    {{-- CSS --}}
    <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" type="text/css" href="libs/OwlCarousel2/css/owl.carousel.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="libs/OwlCarousel2/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="libs/WOW-master/css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    {{-- JS --}}
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/40e36cd30a.js"></script>
    <script type="text/javascript" src="libs/OwlCarousel2/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="libs/WOW-master/js/wow.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    {{-- cssssss---link plugin------------------------------------------------ --}}
</head>
<body>
@include('header')
@yield('content')
@include('footer')
{{-- Go top --}}
{{-- <div class="go-top rounded-circle">
    <i class="far fa-hand-pointer"></i>
</div> --}}
{{-- Hotline phone ring --}}
{{-- <div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle">
        <a href="tel:0919 756 006" class="pps-btn-img">
            <img src="images/icon-call-nh.png" alt="Gọi điện thoại" width="50">
        </a>
        </div>
    </div>
    <div class="hotline-bar">
        <a href="tel:0919822986">
            <span class="text-hotline">0919 822 986</span>
        </a>
    </div>
</div> --}}

{{-- --------------------------------------------------------------------- --}}
{{-- jssssssss --}}

{{-- jssssssss --}}
</body>
</html>