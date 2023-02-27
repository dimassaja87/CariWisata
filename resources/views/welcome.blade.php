<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templates.hibootstrap.com/jaunt/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Feb 2023 13:19:59 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Author: HiBootstrap, Category: Tourism, Multipurpose, HTML, SASS, Bootstrap" />

    <title>Jaunt - Travel & Tour Booking HTML Template</title>

    <link rel="stylesheet"
        href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/bootstrap.min.css') }}" />

    <link rel="stylesheet"
        href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/fontawesome.min.css') }}" />

    <link rel="stylesheet"
        href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/boxicons.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/animate.min.css') }}" />

    <link rel="stylesheet"
        href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/bootstrap-datepicker.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/nice-select.css') }}">

    <link rel="stylesheet"
        href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/magnific-popup.min.css') }}" />

    <link rel="stylesheet"
        href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/owl.carousel.min.css') }}" />

    <link rel="stylesheet"
        href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/meanmenu.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/style.css') }}" />

    <link rel="stylesheet"
        href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/responsive.css') }}" />

    <link rel="stylesheet"
        href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/css/theme-dark.css') }}" />

    <link rel="icon" href="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/favicon.png') }}"
        type="image/png" />
</head>

<body>

    <div id="loading">
        <div class="loader"></div>
    </div>


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
                                <a
                                    href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#0f676a6363604f656e7a617b216c6062"><span
                                        class="__cf_email__"
                                        data-cfemail="f098959c9c9fb09a91859e84de939f9d">[email&#160;protected]</span></a>
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
                                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/flag-uk.png') }}"
                                                    alt="flag">
                                                English
                                            </a>
                                        </li>
                                        <li class="menu-item"><a href="#" class="menu-link">
                                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/flag-germany.png') }}"
                                                    alt="flag">
                                                Deutsch</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#" class="menu-link">
                                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/flag-jordan.png') }}"
                                                    alt="flag">
                                                العربية
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#" class="menu-link">
                                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/flag-china.png') }}"
                                                    alt="flag">
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
                            <a href="index-2.html">
                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/logo.png') }}"
                                    width="50px" class="logo1" alt="Logo">
                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/logo.png') }}"
                                    width="50px" class="logo2" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index-2.html">
                            <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/logo.png') }}"
                                width="50px" class="logo1" alt="Logo">
                            <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/logo.png') }}"
                                width="50px" class="logo2" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="/" class="nav-link active toggle">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/destinasi" class="nav-link toggle">Destinasi</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/aboutus" class="nav-link">Tentang Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/contactus" class="nav-link">Hubungi Kami</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>


    <div id="home" class="home-banner-area home-style-two">
        <div class="container-fluid p-0">
            <div class="banner-slider-two owl-carousel">
                <div class="slider-item">
                    <div class="row">
                        <div class="col-lg-5 align-self-end">
                            <div class="banner-image">
                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/banner/banner1.png') }}"
                                    alt="Demo Image">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-content">
                                <span class="sub-title">Tempat Yang Menakjukan</span>
                                <h1>
                                    Jelajahi negara <span>Indonesia</span> kemana saja yang anda inginkan
                                </h1>
                                <p>
                                    Kami akan menyediakan wisata yang anda butuhkan.
                                </p>
                                <a href="destinations.html" class="btn-primary">Destinasi</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-shape">
                        <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/banner/banner-bg.png') }}"
                            alt="Demo Image">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="row">
                        <div class="col-lg-5 align-self-end">
                            <div class="banner-image">
                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/banner/banner2.png') }}"
                                    alt="Demo Image">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-content">
                                <span class="sub-title">Tempat Yang Menakjukan</span>
                                <h1>
                                    Jelajahi negara <span>Indonesia</span> kemana saja yang anda inginkan
                                </h1>
                                <p>
                                    Kami akan menyediakan wisata yang anda butuhkan.
                                </p>
                                <a href="destinations.html" class="btn-primary">Destinasi</a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <section id="top-destination" class="top-destination-section pb-70">
            <div class="container">
                <div class="section-title">
                    <br>
                    <br>
                    <h8>TEMPAT YANG BAGUS UNTUK DI KUNJUNGI</h8>
                    <h1 class="fw-light">Cari <span class="fw-bold">Dan Nikmati</span></h1>
                    <p>Secara paksa merangkul e-bisnis yang diberdayakan setelah modal intelektual yang ramah pengguna.
                        Secara interaktif mengaktualisasikan proses front-end dengan konvergensi yang efektif.</p>
                </div>
            </div>

            <section id="tours" class="tours-section tours-style-two ptb-100 bg-bold">
                <div class="container">
                    <div class="section-title"></div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="item-single mb-30">
                                <div class="image">
                                    <img src="https://asset.kompas.com/crops/ASrd8SDELxvy5W746vwTgKyY52A=/0x0:780x520/750x500/data/photo/2021/09/29/6153ca424f2bc.jpg"
                                        alt="Demo Image" />
                                </div>
                                <div class="content">
                                    <div class="review">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <span>39 Review</span>
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="tours.html">Kota Bandung</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item-single mb-30">
                                <div class="image">
                                    <img src="https://asset.kompas.com/crops/T2o0W94mqoZnRqMl0xRtoIo7FeM=/49x0:638x393/750x500/data/photo/2022/03/24/623c7f47e99c6.jpg"
                                        alt="Demo Image" />
                                </div>
                                <div class="content">
                                    <div class="review">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <span>69 Review</span>
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="tours.html">Kota Semarang</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item-single mb-30">
                                <div class="image">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQV3iVWMEzbuzV51BqJ-WsPFAwwBxNiukwQfg&usqp=CAU"
                                        alt="Demo Image" />
                                </div>
                                <div class="content">
                                    <div class="review">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <span>56 Review</span>
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="tours.html">Kota Bali</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item-single mb-30">
                                <div class="image">
                                    <img src="https://asset.kompas.com/crops/IsUlrgdbSo9jwwtI4TM2_a-KbKY=/0x0:960x640/750x500/data/photo/2021/08/12/6114b664ae31e.jpg"
                                        alt="Demo Image" />
                                </div>
                                <div class="content">
                                    <div class="review">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <span>69 Review</span>
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="tours.html">Kota Banyuwangi</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item-single mb-30">
                                <div class="image">
                                    <img src="https://d3p0bla3numw14.cloudfront.net/news-content/img/2021/05/27095214/Tinggal-di-Malang.jpg"
                                        alt="Demo Image" />
                                </div>
                                <div class="content">
                                    <div class="review">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <span>39 Review</span>
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="tours.html">Kota Malang</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="item-single mb-30">
                                <div class="image">
                                    <img src="https://asset.kompas.com/crops/GAuUyrwhmqnVAt7HRQnTw1s7K6g=/0x7:740x500/750x500/data/photo/2022/01/21/61ea96a857637.jpg"
                                        alt="Demo Image" />
                                </div>
                                <div class="content">
                                    <div class="review">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <span>39 Review</span>
                                    </div>
                                    <div class="title">
                                        <h3>
                                            <a href="tours.html">Kota Surabaya</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    </div>
    </section>
    </section>






    <section id="destination" class="destination-section destination-style-two pt-100 pb-70 bg-bold">
        <div class="container">
            <div class="section-title">
                <h5>Jenis Liburan Anda</h5>
                <h2 class="fw-light">Duniamu,<span class="fw-bold"> Jalanmu</span></h2>
                <p>Perjalanan telah membantu kita memahami arti hidup dan membantu kita menjadi orang yang lebih baik.
                    Setiap kali kita bepergian, kita melihat dunia dengan mata baru.</p>
            </div>

            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="filter-group">

                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="tours" class="recent-tours-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="https://asset.kompas.com/crops/ZXmxhiXwfTv2aYF8_QlPdvMYADI=/0x0:720x480/750x500/data/photo/2021/10/31/617e75ab7283d.jpg"
                                alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="content">
                                <div class="review">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <span>39 Review</span>
                                </div>
                                <div class="title">
                                    <h3>
                                        <a href="#">Raja Ampat</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="flip-content">
                            <span class="location"><i class='bx bx-map'></i>Papua</span>
                            <h3>
                                <a href="tours.html">Raja Ampat</a>
                            </h3>
                            <div class="review mb-15">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>25 Review</span>
                            </div>
                            <p>
                                Raja Ampat merupakan salah satu objek wisata Indonesia yang mendunia dan diakui Unesco.
                                Keindahan pemandangan bawah lautnya menjadi daya tarik utama Pulau yang ada di ujung
                                timur Indonesia ini.
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="https://asset.kompas.com/crops/QnQTE6gxIk2p6bL5pKGeYsFtwZc=/110x0:1094x656/750x500/data/photo/2022/07/30/62e4dedbd40d5.png"
                                alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="content">
                                <div class="review">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <span>27 Review</span>
                                </div>
                                <div class="title">
                                    <h3>
                                        <a href="#">Labuhan Bajo</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="flip-content">
                            <span class="location"><i class='bx bx-map'></i>Nusa Tenggara Barat</span>
                            <h3>
                                <a href="tours.html">Labuhan Bajo</a>
                            </h3>
                            <div class="review mb-15">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>27 Review</span>
                            </div>
                            <p>
                                Labuan Bajo dikenal sebagai surga tersembunyi di Indonesia bagian timur. Desa ini berada
                                di Kecamatan Komodo, Kabupaten Manggarai Barat, Provinsi Nusa Tenggara Timur yang
                                berbatasan dengan Nusa Tenggara Barat dan dipisahkan Selat Sape.
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 m-auto">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="https://asset.kompas.com/crops/pSDkxMeCzYKRRlvHeXx5lpqCkr8=/0x41:1600x841/750x500/data/photo/2022/02/03/61fbee143eaca.jpg"
                                alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="content">
                                <div class="review">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <span>46 Review</span>
                                </div>
                                <div class="title">
                                    <h3>
                                        <a href="#">Bintan</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="flip-content">
                            <span class="location"><i class='bx bx-map'></i>Tanjung Pinang</span>
                            <h3>
                                <a href="tours.html">Bintan</a>
                            </h3>
                            <div class="review mb-15">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>46 Review</span>
                            </div>
                            <p>
                                Pulau Bintan menyimpan keindahan alam yang tak kalah apik dibandingkan pulau wisata
                                lainnya di Indonesia.
                            </p>
                            <hr>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>7 Days</li>
                                <li><i class='bx bx-group'></i>160+</li>
                                <li>$1090</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial" class="testimonial-section ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Apa Kata Klien Kami</h2>
                <p>Perjalanan telah membantu kita memahami arti hidup dan membantu kita menjadi orang yang lebih baik.
                    Setiap kali kita bepergian, kita melihat dunia dengan mata baru.</p>
            </div>
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="testimonial-slider owl-carousel">
                        <div class="slider-item">
                            <div class="client-img">
                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/client1.jpg') }}"
                                    alt="client-1" />
                            </div>
                            <div class="content">
                                <div class="client-info">
                                    <h3>Jordan Alin</h3>
                                    <span>Bloger & Youtuber</span>
                                </div>
                                <div class="quote">
                                    <i class='bx bxs-quote-left'></i>
                                </div>
                                <p>
                                    Akademi Agen Perjalanan Pribadi adalah program pelatihan 12 bulan yang memungkinkan
                                    siapa pun yang tidak memiliki pengalaman perjalanan sebelumnya untuk memulai bisnis
                                    perjalanan mereka sendiri. Ini adalah kursus lanjutan untuk membantu membangun
                                    pengetahuan dalam perjalanan dan mengembangkan keterampilan penjualan.
                                </p>
                                <div class="review">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="client-img">
                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/client2.jpg') }}"
                                    alt="client-1" />
                            </div>
                            <div class="content">
                                <div class="client-info mb-30">
                                    <h3>David Milan</h3>
                                    <span>Photographer</span>
                                </div>
                                <div class="quote">
                                    <i class='bx bxs-quote-left'></i>
                                </div>
                                <p>
                                    Akademi Agen Perjalanan Pribadi adalah program pelatihan 12 bulan yang memungkinkan
                                    siapa pun yang tidak memiliki pengalaman perjalanan sebelumnya untuk memulai bisnis
                                    perjalanan mereka sendiri. Ini adalah kursus lanjutan untuk membantu membangun
                                    pengetahuan dalam perjalanan dan mengembangkan keterampilan penjualan.
                                </p>
                                <div class="review mt-15">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="client-img">
                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/client3.jpg') }}"
                                    alt="client-1" />
                            </div>
                            <div class="content">
                                <div class="client-info mb-30">
                                    <h3>Thomas Alva</h3>
                                    <span>Journalist</span>
                                </div>
                                <div class="quote">
                                    <i class='bx bxs-quote-left'></i>
                                </div>
                                <p>
                                    Akademi Agen Perjalanan Pribadi adalah program pelatihan 12 bulan yang memungkinkan
                                    siapa pun yang tidak memiliki pengalaman perjalanan sebelumnya untuk memulai bisnis
                                    perjalanan mereka sendiri. Ini adalah kursus lanjutan untuk membantu membangun
                                    pengetahuan dalam perjalanan dan mengembangkan keterampilan penjualan.
                                </p>
                                <div class="review mt-15">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="client-img">
                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/client4.jpg') }}"
                                    alt="client-1" />
                            </div>
                            <div class="content">
                                <div class="client-info mb-30">
                                    <h3>Emma Watson</h3>
                                    <span>Actress & Model</span>
                                </div>
                                <div class="quote">
                                    <i class='bx bxs-quote-left'></i>
                                </div>
                                <p>
                                    Akademi Agen Perjalanan Pribadi adalah program pelatihan 12 bulan yang memungkinkan
                                    siapa pun yang tidak memiliki pengalaman perjalanan sebelumnya untuk memulai bisnis
                                    perjalanan mereka sendiri. Ini adalah kursus lanjutan untuk membantu membangun
                                    pengetahuan dalam perjalanan dan mengembangkan keterampilan penjualan.
                                </p>
                                <div class="review mt-15">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="client-img">
                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/client5.jpg') }}"
                                    alt="client-1" />
                            </div>
                            <div class="content">
                                <div class="client-info mb-30">
                                    <h3>Jordan Alin</h3>
                                    <span>Bloger & Youtuber</span>
                                </div>
                                <div class="quote">
                                    <i class='bx bxs-quote-left'></i>
                                </div>
                                <p>
                                    Akademi Agen Perjalanan Pribadi adalah program pelatihan 12 bulan yang memungkinkan
                                    siapa pun yang tidak memiliki pengalaman perjalanan sebelumnya untuk memulai bisnis
                                    perjalanan mereka sendiri. Ini adalah kursus lanjutan untuk membantu membangun
                                    pengetahuan dalam perjalanan dan mengembangkan keterampilan penjualan.
                                </p>
                                <div class="review mt-15">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='clients-img'>
                <img class="image image-1"
                    src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/client1.jpg') }}"
                    alt="Demo Image">
                <img class="image image-2"
                    src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/client2.jpg') }}"
                    alt="Demo Image">
                <img class="image image-3"
                    src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/client3.jpg') }}"
                    alt="Demo Image">
                <img class="image image-4"
                    src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/client4.jpg') }}"
                    alt="Demo Image">
                <img class="image image-5"
                    src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/client5.jpg') }}"
                    alt="Demo Image">
            </div>
        </div>
        <div class="shape">
            <img src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/img/shape1.png') }}"
                alt="Background Shape">
        </div>
    </section>


    <div id="video" class="video-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="video-content">
                        <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="tours" class="recent-tours-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Wisata Terbaru</h2>
                <p>Wisata terbaru dan terupdate yang ada di Indonesia.jika ke Indonesia</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="https://asset.kompas.com/crops/Zjqh5aq2Rg2qxQ7C25m3etgxmoA=/0x39:1280x893/750x500/data/photo/2020/03/10/5e6756ed23145.jpg"
                                alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="content">
                                <div class="review">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <span>39 Review</span>
                                </div>
                                <div class="title">
                                    <h3>
                                        <a href="#">Pantai Pandawa</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="flip-content">
                            <span class="location"><i class='bx bx-map'></i>Bali</span>
                            <h3>
                                <a href="tours.html">Pantai Pandawa</a>
                            </h3>
                            <div class="review mb-15">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>25 Review</span>
                            </div>
                            <p>
                                Pantai Pandawa adalah pantai paling populer yang ada di bali.
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="https://asset.kompas.com/crops/NwUxznt2nYwzDRPdEBOpXkkIUj4=/39x0:573x356/750x500/data/photo/2019/07/19/5d317cc27b36e.jpeg"
                                alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="content">
                                <div class="review">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <span>27 Review</span>
                                </div>
                                <div class="title">
                                    <h3>
                                        <a href="#">Kawah Ijen</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="flip-content">
                            <span class="location"><i class='bx bx-map'></i>Banyuwangi</span>
                            <h3>
                                <a href="tours.html">Kawah Ijen</a>
                            </h3>
                            <div class="review mb-15">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>27 Review</span>
                            </div>
                            <p>
                                Kawah Ijen adalah salah satu dari fenomena alam yang ada di indonesia.
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 m-auto">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="https://asset.kompas.com/crops/jNJCw78jRpATerjMmadbBwqblkE=/0x0:1800x1200/750x500/data/photo/2021/05/10/6099375e04acb.jpg"
                                alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="content">
                                <div class="review">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <span>46 Review</span>
                                </div>
                                <div class="title">
                                    <h3>
                                        <a href="#">Gunung Bromo</a>
                                    </h3>
                                </div>
                                <ul class="list">
                                    <li><i class='bx bx-time'></i>7 Days</li>
                                    <li><i class='bx bx-group'></i>160+</li>
                                    <li>$1090</li>
                                </ul>
                            </div>
                        </div>
                        <div class="flip-content">
                            <span class="location"><i class='bx bx-map'></i>Lumajang</span>
                            <h3>
                                <a href="tours.html">Gunung Bromo</a>
                            </h3>
                            <div class="review mb-15">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>46 Review</span>
                            </div>
                            <p>
                                Gunung Bromo atau dalam bahasa Tengger dieja "Brama", juga disebut Kaldera Tengger,
                                adalah sebuah gunung berapi aktif di Jawa
                            </p>
                            <hr>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>7 Days</li>
                                <li><i class='bx bx-group'></i>160+</li>
                                <li>$1090</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <br>
    <br>
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

    <script
        src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script
        src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/bootstrap-datepicker.min.js') }}"></script>

    <script
        src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/jquery.nice-select.min.js') }}"></script>

    <script
        src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/jquery.magnific-popup.min.js') }}"></script>

    <script
        src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/jquery.filterizr.min.js') }}"></script>

    <script src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/meanmenu.min.js') }}"></script>

    <script src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/form-validator.min.js') }}"></script>

    <script src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/contact-form-script.js') }}"></script>

    <script
        src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('user/templates.hibootstrap.com/jaunt/default/assets/js/script.js') }}"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/jaunt/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Feb 2023 13:20:26 GMT -->

</html>
