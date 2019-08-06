<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
    <base href="{{asset('')}}">
	<!-- boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- reset css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700&display=swap" rel="stylesheet">
    <!-- WOW JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <!-- Slick css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <!-- style.css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/codong.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cogdong.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cogdong.css.map') }}">
    <link rel="stylesheet" href="{{ asset('css/cogdong.scss') }}">
    <link rel="stylesheet" href="{{ asset('css/danhsachsanpham.css') }}">
    <link rel="stylesheet" href="{{ asset('css/danhsachsanpham.css.map') }}">
    <link rel="stylesheet" href="{{ asset('css/danhsachsanpham.scss') }}">
    <link rel="stylesheet" href="{{ asset('css/gioithieu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-tintuc.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lienhe.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tuyendung.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.exzoom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chitiet-sanpham.css') }}">

    <link rel="stylesheet" href="{{ asset('css/header-footer.css') }}">

</head>
<body>
@include('header')
@yield('content')

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, facilis, expedita. Veniam alias numquam ducimus iure expedita cum voluptas nemo facilis impedit explicabo, earum ex temporibus error, libero. Quos, vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus doloribus nisi, est, tempora, architecto officiis ipsa itaque perspiciatis quam dolorem voluptas, animi numquam quaerat. Consectetur veritatis, quibusdam repellendus dolorem rerum.

@include('footer')
    
</body>

<!-- bootstrap -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Font-awesome -->
<script src="https://kit.fontawesome.com/df8fdd30a5.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<!-- Slick JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script src="{{ asset('js/jquery.exzoom.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>
{{-- <script src="{{ asset('js/main-product.js') }}"></script> --}}
<script>
    $(function(){
        $("#exzoom").exzoom({
            "autoPlay": false
        });
    });
</script>
<!-- WOW JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
    new WOW().init();
</script>
{{-- <script src="{{ asset('js/jquery.exzoom.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script> --}}
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/footer-header.js') }}"></script>
<script src="{{ asset('is/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('js/main1.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
</html>