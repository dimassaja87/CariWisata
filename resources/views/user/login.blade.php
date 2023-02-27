<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templates.hibootstrap.com/jaunt/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Feb 2023 13:21:15 GMT -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Author: HiBootstrap, Category: Tourism, Multipurpose, HTML, SASS, Bootstrap" />

<title>Jaunt - Travel & Tour Booking HTML Template</title>

<link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/bootstrap.min.css') }}" />

<link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/fontawesome.min.css') }}" />

<link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/boxicons.min.css') }}">

<link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/animate.min.css') }}" />

<link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/bootstrap-datepicker.min.css') }}">

<link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/nice-select.css') }}">

<link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/magnific-popup.min.css') }}" />

<link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/owl.carousel.min.css') }}" />

<link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/meanmenu.min.css') }}" />

<link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/style.css') }}" />

<link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/responsive.css') }}" />

<link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/theme-dark.css') }}" />

<link rel="icon" href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/favicon.png') }}" type="image/png" />
</head>
<body>

<header class="header-area">

<div class="top-header-area">
<div class="container">
<div class="row align-items-center">
<div class="col-xl-6 col-lg-7">
<div class="contact-info">
<div class="content">
<i class='bx bx-phone'></i>
<a href="tel:+0123456987">+0123 456 987</a>
</div>
<div class="content">
<i class='bx bx-envelope'></i>
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#640c0108080b240e05110a104a070b09"><span class="__cf_email__" data-cfemail="4b232e2727240b212a3e253f65282426">[email&#160;protected]</span></a>
</div>
<div class="content">
<i class='bx bx-map'></i>
<a href="#">Mon-Fri: 8 AM – 7 PM</a>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-5">
<div class="side-option">
<div class="item">
<div class="language">
<a href="#language" id="languageButton" class="btn-secondary">
Language <i class='bx bxs-chevron-down'></i>
</a>
<ul class="menu">
<li class="menu-item">
<a href="#" class="menu-link">
<img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/flag-uk.png') }}" alt="flag">
English
</a>
</li>
<li class="menu-item"><a href="#" class="menu-link">
<img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/flag-germany.png') }}" alt="flag">
 Deutsch</a>
</li>
<li class="menu-item">
<a href="#" class="menu-link">
<img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/flag-jordan.png') }}" alt="flag">
العربية
</a>
</li>
<li class="menu-item">
<a href="#" class="menu-link">
<img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/flag-china.png') }}" alt="flag">
中文
</a>
</li>
</ul>
</div>
</div>
<div class="item">
<a href="/login" class="btn-secondary">
Login <i class='bx bx-log-in-circle'></i>
</a>
</div>
<div class="item">
<a href="#searchBox" id="searchButton" class="btn-search" data-effect="mfp-zoom-in">
<i class='bx bx-search-alt'></i>
</a>
<div id="searchBox" class="search-box mfp-with-anim mfp-hide">
<form class="search-form">
<input class="search-input" name="search" placeholder="Search" type="text">
<button class="btn-search">
<i class='bx bx-search-alt'></i>
</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="main-navbar-area">
<div class="main-responsive-nav">
<div class="container">
<div class="main-responsive-menu">
<div class="logo">
        <a href="/">
        <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/logo.png') }}" width="50px" class="logo1" alt="Logo">
        <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/logo.png') }}" width="50px" class="logo2" alt="Logo">
        </a>
        </div>
        </div>
        </div>
        </div>
        <div class="main-nav">
        <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="/">
        <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/logo.png') }}" width="50px" class="logo1" alt="Logo">
        <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/logo.png') }}" width="50px" class="logo2" alt="Logo">
</a>
<div class="collapse navbar-collapse mean-menu">
    <ul class="navbar-nav ms-auto">
    <li class="nav-item">
    <a href="/" class="nav-link">Beranda</a>
    </li>
    <li class="nav-item">
    <a href="/destinasi" class="nav-link ">Destinasi</a>
    </li>
    <li class="nav-item">
    <a href="/aboutus" class="nav-link">Tentang Kami</a>
    </li>
    <li class="nav-item">
    <a href="/contactus" class="nav-link active toggle">Hubungi Kami</a>
    </li>
    </ul>
    </div>
</nav>
</nav>
</div>
</div>
</div>

</header>


<div class="page-title-area ptb-100">
<div class="container">
<div class="page-title-content">
<h1>Login</h1>
<ul>
<li class="item"><a href="/">Beranda</a></li>
<li class="item"><a href="/login"><i class='bx bx-chevrons-right'></i>Login</a></li>
</ul>
</div>
</div>
<div class="bg-image">
<img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/page-title-area/login.jpg') }}" alt="Demo Image">
</div>
</div>


<div class="authentication-section">
<div class="container">
<div class="main-form ptb-100">
<form id="#authForm">
<div class="content">
<h3>Selamat Datang Kembali</h3>
<p>Silahkan Login jika Anda sudah punya akun</p>
</div>
<div class="form-group">
<div class="input-icon"><i class='bx bx-user'></i></div>
<input type="text" class="form-control" placeholder="Username" required>
</div>
<div class="form-group">
<div class="input-icon"><i class='bx bx-at'></i></div>
<input type="text" class="form-control" placeholder="Email Address" required>
</div>
<div class="row align-items-center mb-30">
<div class="col-lg-6 col-sm-6 col-6">
<div class="checkbox">
<input type="checkbox" id="remember">
<label for="remember">Ingat Aku</label>
</div>
</div>
<div class="col-lg-6 col-sm-6 col-6">
<div class="link">
<a href="forget-password.html">Lupa password?</a>
</div>
</div>
</div>
<button type="submit" class="btn-primary">
Login
</button>
</form>
</div>
</div>
</div>


<footer class="footer-area">
        <div class="container">
        <div class="footer-top pt-100 pb-70">
        <div class="row">
        <div class="col-lg-3 col-md-5 col-sm-6 col-12">
        <div class="footer-widget">
        <div class="navbar-brand">
        <a href="index.html">
        <img src="{{ asset('user/templates.hibootstrap.com/jaunt/Bandung/assets/img/logo.png') }}" width="200px" alt="Logo" />
        </a>
        </div>
        <p>Anda dapat bermimpi, membuat, mendesain, dan membangun tempat yang paling indah.</p>
        <div class="contact-info">
        <div class="content">
        <a href="tel:+0123456987"><i class='bx bx-phone'></i>+62 0123 456 987</a>
        </div>
        <div class="content">
        <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#59313c3535361933382c372d773a3634"><i class='bx bx-envelope'></i><span class="__cf_email__" data-cfemail="8de5e8e1e1e2cde7ecf8e3f9a3eee2e0">[email&#160;protected]</span></a>
        </div>
        <div class="content">
        <a href="#"><i class='bx bx-map'></i>Senin-Jumat: 08.00 – 19.00</a>
        </div>
        </div>
        </div>
        </div>
        <!-- <div class="col-lg-3 col-md-5 col-sm-6 col-12">
        <div class="footer-widget">
        <h5>Latest News</h5>
        <ul class="footer-news">
        <li class="content">
        <a href="blog-details.html">Surrounded by the peaceful waters of Lake Victoria.</a>
        <span>October 05, 2021</span>
        <hr>
        </li>
        <li class="content">
        <a href="blog-details.html">Morning came very early today. The alarm went off at 4 am</a>
        <span>October 05, 2021</span>
        </li>
        </ul>
        </div>
        </div> -->
        <div class="col-lg-2 col-md-5 col-sm-6 col-12">
        <div class="footer-widget">
        <h5>Selengkapnya</h5>
        <ul class="footer-links">
        <li>
        <a href="about-us.html">Tentang Kami</a>
        </li>
        <li>
        <a href="destinations.html">Destinasi</a>
        </li>
        <!-- <li>
        <a href="blog-style-1.html">Latest Blog</a>
        </li> -->
        <li>
        <a href="team.html">Tim Kami</a>
        </li>
        <li>
        <a href="contact.html">Hubungi Kami</a>
        </li>
        </ul>
        </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-6 col-12">
        <div class="footer-widget">
        <h5>Postingan Instagram</h5>
        <ul class="instagram-post">
        <li>
        <img src="https://www.surabayarollcake.com/wp-content/uploads/2018/10/Kya-Kya-Kembang-Jepun.jpg" alt="Demo Image">
        <i class='bx bxl-instagram'></i>
        </li>
        <li>
        <img src="https://www.mindatour.com/wp-content/uploads/2016/12/WisataPulauPeucangBanten-1024x683.jpg" alt="Demo Image">
        <i class='bx bxl-instagram'></i>
        </li>
        <li>
        <img src="https://storage.googleapis.com/allindonesiatoursim/2017/05/Batu.jpg" alt="Demo Image">
        <i class='bx bxl-instagram'></i>
        </li>
        <li>
        <img src="https://www.biggigjersey.com/wp-content/uploads/2020/10/jodipan-malang-warna-1536x1025.jpg" alt="Demo Image">
         <i class='bx bxl-instagram'></i>
        </li>
        <li>
        <img src="https://ik.imagekit.io/tvlk/blog/2020/01/shutterstock_431660431.jpg?tr=dpr-2,w-675" alt="Demo Image">
        <i class='bx bxl-instagram'></i>
        </li>
        <li>
        <img src="https://2.bp.blogspot.com/-GlsJlQ6q2u4/VB0Dt-BC3UI/AAAAAAABc0g/5emV7v_1ii8/s1600/Borobudur%2BTime%2BTravel%2BBells%2BDie%2BGlocke%2BDawn%2Bsunlight%2Bbreaks%2Bthrough%2Bthe%2Bclouds%2Bat%2Bthe%2BBorobudur%2BBuddhist%2Btemple%2Bin%2BJava%2C%2BIndonesia%2BTrevThompson%2Bflickr%2B8665832932_545d1ba0c7.jpg" alt="Demo Image">
        <i class='bx bxl-instagram'></i>
        </li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        <hr>
        <!-- <div class="copy-right-area">
        <div class="container">
        <div class="copy-right-content">
        <p>
        Copyright @<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> Jaunt. Designed By
        <a href="https://hibootstrap.com/" target="_blank">
        HiBootstrap.com
        </a>
        </p>
        </div>
        </div>
        </div> -->
        </div>
        </footer>


<script src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/jquery.min.js') }}"></script>

<script src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/bootstrap-datepicker.min.js') }}"></script>

<script src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/jquery.nice-select.min.js') }}"></script>

<script src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/jquery.filterizr.min.js') }}"></script>

<script src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/meanmenu.min.js') }}"></script>

<script src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/form-validator.min.js') }}"></script>

<script src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/contact-form-script.js') }}"></script>

<script src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/jquery.ajaxchimp.min.js') }}"></script>

<script src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/script.js') }}"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/jaunt/default/destinations.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 00:55:42 GMT -->
</html>
