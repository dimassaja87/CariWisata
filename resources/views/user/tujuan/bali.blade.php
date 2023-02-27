<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templates.hibootstrap.com/jaunt/default/destination-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Feb 2023 13:21:34 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Author: HiBootstrap, Category: Tourism, Multipurpose, HTML, SASS, Bootstrap" />

    <title>Jaunt - Travel & Tour Booking HTML Template</title>

    <link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/css/fontawesome.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/css/animate.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/css/bootstrap-datepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/css/nice-select.css') }}">

    <link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/css/magnific-popup.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/css/owl.carousel.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/css/meanmenu.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/css/style.css') }}" />

    <link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/css/responsive.css') }}" />

    <link rel="stylesheet" href="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/css/theme-dark.css') }}" />

    <link rel="icon" href="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/img/favicon.png') }}" type="image/png" />
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
                                <a
                                    href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#a2cac7cececde2c8c3d7ccd68cc1cdcf"><span
                                        class="__cf_email__"
                                        data-cfemail="f199949d9d9eb19b90849f85df929e9c">[email&#160;protected]</span></a>
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
                                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/img/flag-uk.png') }}" alt="flag">
                                                English
                                            </a>
                                        </li>
                                        <li class="menu-item"><a href="#" class="menu-link">
                                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/img/flag-germany.png') }}" alt="flag">
                                                Deutsch</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#" class="menu-link">
                                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/img/flag-jordan.png') }}" alt="flag">
                                                العربية
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#" class="menu-link">
                                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/img/flag-china.png') }}" alt="flag">
                                                中文
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#" class="btn-secondary">
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
                            <a href="index.html">
                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/img/logo1.png') }}" class="logo1" alt="Logo">
                                <img src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/img/logo2.png') }}" class="logo2" alt="Logo">
                            </a>
                        </div>
                        <div class="cart responsive">
                            <a href="#" class="cart-btn"><i class='bx bx-cart'></i>
                                <span class="badge">0</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/img/logo1.png') }}" class="logo1" alt="Logo">
                            <img src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/img/logo2.png') }}" class="logo2" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="../default/index-2.html" class="nav-link toggle">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link toggle">Pages<i class='bx bxs-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="testimonials.html" class="nav-link">Testimonials</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="booking.html" class="nav-link">Booking</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="cart.html" class="nav-link">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">FAQ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="error-404.html" class="nav-link">404 Error</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="login.html" class="nav-link">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="register.html" class="nav-link">Register</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="terms-of-service.html" class="nav-link">Terms of Service</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="forgot-password.html" class="nav-link">Forgot Password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link active toggle">Destinations<i
                                            class='bx bxs-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="destinations.html" class="nav-link">Destinations</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="destination-details.html" class="nav-link active">Destinations
                                                Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link toggle">Tours<i
                                            class='bx bxs-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="tours.html" class="nav-link">Tours</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="special-offers.html" class="nav-link">Trip Offers</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="about-us.html" class="nav-link">About</a>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link toggle">Blog<i
                                            class='bx bxs-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog-style-1.html" class="nav-link">Blog Style One</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-style-2.html" class="nav-link">Blog Style Two</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-style-3.html" class="nav-link">Blog Style Three</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact</a>
                                </li>
                            </ul>
                            <div class="cart">
                                <a href="#" class="cart-btn"><i class='bx bx-cart'></i>
                                    <span class="badge">0</span>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>


    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Bali</h1>
                <ul>
                    <li class="item"><a href="index.html">Home</a></li>
                    <li class="item"><a href="destination-details.html"><i class='bx bx-chevrons-right'></i>Destinations
                            Details</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/img/page-title-area/destination-details.jpg') }}" alt="Demo Image">
        </div>
    </div>


    <section id="destination" class="destination-section ptb-100 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Kota Bali</h2>
                <p>Pulau Bali adalah bagian dari Kepulauan Sunda Kecil sepanjang 153 km dan selebar 112 km sekitar 3,2
                    km dari Pulau Jawa. Secara geografis, Bali terletak di 8°25′23″ Lintang Selatan dan 115°14′55″ Bujur
                    Timur yang membuatnya beriklim tropis seperti bagian Indonesia yang lain.</p>
            </div>
            <hr>
            <br>
            <br>
            <div class="tabs ">
                <input type="radio" class="tabs__radio" name="tabs-example" id="tab1" checked>
                <label for="tab1" class="tabs__label">Informasi</label>
                <div class="tabs__content">
                    <br>
                    <br>
                    <div class="mb-30">
                        <p>Bali (juga dikenal sebagai Kepulauan Bali, Bali: ᬩᬮᬶ) adalah sebuah wilayah provinsi yang
                            terletak di Indonesia. Ibu kotanya adalah Denpasar. Provinsi Bali terletak di bagian barat
                            Kepulauan Nusa Tenggara. Di awal kemerdekaan Indonesia, pulau ini termasuk dalam Provinsi
                            Sunda Kecil yang beribu kota di Singaraja, dan kini terbagi menjadi 3 provinsi, yakni Bali,
                            Nusa Tenggara Barat, dan Nusa Tenggara Timur .[11][12] Pada tahun 2020, penduduk provinsi
                            Bali berjumlah 4.317.404 jiwa, dengan kepadatan 747 jiwa/km2.[5]</p>
                    </div>
                    <div>
                        <h3 class="fs-2 fw-bold">Kota Penghubung</h3>
                    </div>
                    <div class="mb-3">
                        <p>Selain terdiri dari pulau Bali, wilayah provinsi Bali juga terdiri dari pulau-pulau yang
                            lebih kecil di sekitarnya, yaitu pulau Nusa Penida, pulau Nusa Lembongan, pulau Nusa
                            Ceningan, Pulau Serangan, dan Pulau Menjangan. Secara geografis, Bali terletak di antara
                            Pulau Jawa dan Pulau Lombok. Mayoritas penduduk Bali adalah pemeluk agama Hindu.[6] Di
                            dunia, Bali terkenal sebagai tujuan pariwisata dengan keunikan berbagai hasil
                            seni-budayanya, khususnya bagi para wisatawan Jepang dan Australia. Bali juga dikenal dengan
                            julukan Pulau Dewata dan Pulau Seribu Pura.</p>
                    </div>
                    <div>
                        <h3 class="fs-2 fw-bold">Destinasi</h3>
                    </div>
                    <div class="mb-3">
                        <p>Tidak ada pulau yang membuat wisatawan terpesona seperti Bali. Meski berukuran kurang dari
                            separuh pulau besar di Hawaii, Bali berhasil menghadirkan berbagai petualangan. Pantai yang
                            memukau mengundang para pencinta pantai dan peselancar di sepanjang pesisir barat daya
                            pulau, sementara pura kuno dan komunitas kebugaran yang berkembang pesat menarik wisatawan
                            ke Ubud. D</p>
                    </div>
                    <div class="spacer"></div>
                    <div class="col col-md-12">
                        <div class="tours-slider owl-carousel mb-30">
                            <div class="slider-item">
                                <div class="image">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNOd0EfTM3VFHh13nRhGOycGkwg0WDBX6J7Q&usqp=CAU"
                                        alt="Demo Image" />
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="image">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNOd0EfTM3VFHh13nRhGOycGkwg0WDBX6J7Q&usqp=CAU"
                                        alt="Demo Image" />
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="image">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNOd0EfTM3VFHh13nRhGOycGkwg0WDBX6J7Q&usqp=CAU"
                                        alt="Demo Image" />
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="image">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNOd0EfTM3VFHh13nRhGOycGkwg0WDBX6J7Q&usqp=CAU"
                                        alt="Demo Image" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="fs-2 fw-bold">Kuliner</h3>
                        </div>
                        <div class="mb-3">
                            <p>Provinsi Bali memiliki beragam kuliner khas Bali. Berbagai makanan olahan daging ayam dan
                                babi, mendominasi kuliner di Bali. Makanan yang terkenal berasa dari Bali termasuk Ayam
                                betutu dan Babi guling.[38]</p>
                        </div>
                        <div>
                            <img src="https://cdn.idntimes.com/content-images/post/20211013/169281280-1089824911494428-1782060517954355884-n-040be48167cb3571a99064b14f5294ab_600x400.jpg"
                                alt="" width="100%">
                        </div>
                    </div>
                </div>
                <input type="radio" class="tabs__radio" name="tabs-example" id="tab2">
                <label for="tab2" class="tabs__label">Daftar Wisata</label>
                <div class="tabs__content">
                    <br>
                    <br>
                    <br>
                    <div class="card-group">
                        <div class="card mb-4 mx-3">
                            <a href="../bali/tg.html">
                                <img src="https://www.befreetour.com/img/attraction/tirta-gangga20191015144107.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tirta Gangga</h5>
                                </div>
                            </a>
                        </div>
                        <div class="card mb-4 mx-3">
                            <a href="../bali/tntb.html">
                                <img src="https://sweetrip.id/wp-content/uploads/2022/05/candi-gedong-songo.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vanaprastha Gedong Songo Park</h5>
                                </div>
                            </a>
                        </div>
                        <div class="card mb-4 mx-3">
                            <a href="">
                                <img src="https://pmb.ittelkom-pwt.ac.id/wp-content/uploads/2021/07/coming-soon-2579123_1920.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Cooming soon</h5>
                                </div>
                            </a>
                        </div>
                        <div class="card mb-4 mx-3">
                            <a href="">
                                <img src="https://pmb.ittelkom-pwt.ac.id/wp-content/uploads/2021/07/coming-soon-2579123_1920.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Cooming soon</h5>
                                </div>
                            </a>
                        </div>
                    </div>

                    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                    <link rel="preconnect" href="https://fonts.googleapis.com" />
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
                    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap"
                        rel="stylesheet" />
                    <br>
                    <br>
                    <br>
                </div>
                <input type="radio" class="tabs__radio" name="tabs-example" id="tab3">
                <label for="tab3" class="tabs__label">Lokasi</label>
                <div class="tabs__content">
                    <br>
                    <br>
                    <br>
                    <div id="map" style="width:1300px;height:600px;background:green"></div>
                    <script>
                        function Map123() {
                            var mapOptions = {
                                center: new google.maps.LatLng(51.508742, -0.120850),
                                zoom: 10,
                                mapTypeId: google.maps.MapTypeId.HYBRID
                            }
                            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
                        }
                    </script>
                    <script
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=Map123"></script>
                </div>
            </div>

        </div>
        </div>
        </div>
    </section>


    <footer class="footer-area">
        <div class="container">
            <div class="footer-top pt-100 pb-70">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                        <div class="footer-widget">
                            <div class="navbar-brand">
                                <a href="index.html">
                                    <img src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/img/logo2.png') }}" alt="Logo" />
                                </a>
                            </div>
                            <p>You can dream, create, design, and build the most wonderful place.</p>
                            <div class="contact-info">
                                <div class="content">
                                    <a href="tel:+0123456987"><i class='bx bx-phone'></i>+0123 456 987</a>
                                </div>
                                <div class="content">
                                    <a
                                        href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#d2bab7bebebd92b8b3a7bca6fcb1bdbf"><i
                                            class='bx bx-envelope'></i><span class="__cf_email__"
                                            data-cfemail="a6cec3cacac9e6ccc7d3c8d288c5c9cb">[email&#160;protected]</span></a>
                                </div>
                                <div class="content">
                                    <a href="#"><i class='bx bx-map'></i>Mon-Fri: 8 AM – 7 PM</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5>Latest News</h5>
                            <ul class="footer-news">
                                <li class="content">
                                    <a href="blog-details.html">Surrounded by the peaceful waters of Lake Victoria.</a>
                                    <span>October 05, 2021</span>
                                    <hr>
                                </li>
                                <li class="content">
                                    <a href="blog-details.html">Morning came very early today. The alarm went off at 4
                                        am</a>
                                    <span>October 05, 2021</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5>Quick Links</h5>
                            <ul class="footer-links">
                                <li>
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a href="destinations.html">Destinations</a>
                                </li>
                                <li>
                                    <a href="blog-style-1.html">Latest Blog</a>
                                </li>
                                <li>
                                    <a href="team.html">Our Team</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5>Instagram Post</h5>
                            <ul class="instagram-post">
                                <li>
                                    <img src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/img/instagram1.jpg') }}" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                                <li>
                                    <img src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/img/instagram2.jpg') }}" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                                <li>
                                    <img src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/img/instagram3.jpg') }}" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                                <li>
                                    <img src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/img/instagram4.jpg') }}" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                                <li>
                                    <img src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/img/instagram5.jpg') }}" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                                <li>
                                    <img src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/img/instagram6.jpg') }}" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copy-right-area">
                <div class="container">
                    <div class="copy-right-content">
                        <p>
                            Copyright @
                            <script data-cfasync="false"
                                src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>document.write(new Date().getFullYear())</script> Jaunt. Designed By
                            <a href="https://hibootstrap.com/" target="_blank">
                                HiBootstrap.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/js/bootstrap-datepicker.min.js') }}"></script>

    <script src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/js/jquery.filterizr.min.js') }}"></script>

    <script src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/js/meanmenu.min.js') }}"></script>

    <script src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/js/form-validator.min.js') }}"></script>

    <script src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/js/contact-form-script.js') }}"></script>

    <script src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('user/templates.hibootstrap.com/jaunt/bali/assets/js/script.js') }}"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/jaunt/default/destination-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Feb 2023 13:21:40 GMT -->

</html>
