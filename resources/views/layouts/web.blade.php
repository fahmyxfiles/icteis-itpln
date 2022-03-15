<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awsome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!-- header-area -->
    <header>
        <div id="main-header" class="header-area">
            <div class="header-topbar padding-10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-xl-8 col-md-8 col-12">
                            <div class="contact-details">
                                <div><span><i class="icofont-ui-call"></i></span> +62 21 5440342</div>
                                <div><span><i class="icofont-ui-message"></i></span> icteis2022@itpln.ac.id</div>
                                <div><span><i class="icofont-ui-home"></i></span> Jakarta Barat, DKI Jakarta-11750</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-4 col-md-4 col-12">
                            <div class="social-icons text-center text-md-right">
                                <a href="#"> <span class="si3"><i class="fab fa-pinterest-p"></i> </span></a>
                                <a href="#"> <span class="si3"> <i class="fab fa-linkedin-in"></i></span></a>
                                <a href="#"> <span class="si1"><i class="fab fa-facebook-f"></i> </span> </a>
                                <a href="#"> <span class="si2"> <i class="fab fa-twitter"></i></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="container position-relative">
                    <div class="header-bottom">
                        <div class="row align-items-center justify-content-start justify-content-lg-between">
                            <div class="col-lg-2 col-md-3 col-sm-3 col-3">
                                <div class="logo">
                                    <a href="#"> <img src="assets/logo.svg" alt="" style="width: 190px;"></a>
                                </div>
                            </div>
                            <div class="col-lg-8 d-none d-lg-block">
                                <nav id="mobile-menu">
                                    <ul class="main-menu">
                                        <li><a href="#">home </a></li>
                                        <li><a href="#">call for paper</a></li>
                                        <li class="has-submenu"><a href="#">guideline</a>
                                            <ul class="submenu">
                                                <li><a href="#">abstract guideline</a></li>
                                                <li><a href="#">full paper guideline</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu"><a href="#">download docs</a>
                                            <ul class="submenu">
                                                <li><a href="#">all docs</a></li>
                                                <li><a href="#">all guideline</a></li>
                                                <li><a href="#">event gallery</a></li>
                                                <li><a href="#">article preparation</a></li>
                                                <li><a href="#">paper template</a></li>
                                                <li><a href="#">copyright checklist</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">fees</a></li>
                                        <li><a href="#">publication</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-8 col-6">
                                <div class="header-btn text-center text-lg-right">
                                    <a class="btn1" href="#">submit</a>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{ $slot }}

    <footer>
        <div class="footer-area">
            <div class="foo_top padding-top-120 padding-bottom-65">
                <div class="foo_top_shapes">
                    <img src="assets/images/fo_vec1.png" alt="" class="shp_1">
                    <img src="assets/images/fo_vec2.png" alt="" class="shp_2 item-zooming">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                            <div class="foo-widget">
                                <div class="logo">
                                    <a href="#"> <img src="assets/images/logo.png" alt=""></a>
                                </div>
                                <p>Outsource your HR functions to industry-specialized experts.</p>
                                <div class="social-links margin-top-10">
                                    <a href="#"><span class="active"><i class="icofont-pinterest"></i></span></a>

                                    <a href="#"><span><i class="icofont-facebook"></i></span></a>

                                    <a href="#"><span><i class="fab fa-linkedin-in"></i></span></a>

                                    <a href="#"><span><i class="icofont-twitter"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                            <div class="foo-widget">
                                <h4 class="margin-bottom-20">usefull links</h4>
                                <ul>
                                    <li><a href="#">home</a> </li>
                                    <li><a href="#">about</a> </li>
                                    <li><a href="#">schedule</a> </li>
                                    <li><a href="#">speakers</a></li>
                                    <li><a href="#">blog</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                            <div class="foo-widget">
                                <h4 class="margin-bottom-20">contact us</h4>
                                <ul>
                                    <li>
                                        <span><i class="icofont-clock-time"></i></span> agencify HR Serice
                                    </li>
                                    <li>
                                        <span><i class="icofont-phone"></i></span> +1 561-318-5142
                                    </li>
                                    <li>
                                        <span><i class="icofont-email"></i></span> hr@agencifyllc.com
                                    </li>
                                    <li>
                                        <span><i class="icofont-ui-home"></i></span>
                                        uttara, West
                                        dhaka, Bangladesh
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".8s">
                            <div class="foo-widget">
                                <h4 class="margin-bottom-20">Instagram Feed</h4>
                                <div class="foo-gal-wrapper">
                                    <div class="single-gal">
                                        <a href="#"><img src="assets/images/f_img1.png" alt=""></a>
                                    </div>
                                    <div class="single-gal">
                                        <a href="#"><img src="assets/images/f_img2.png" alt=""></a>
                                    </div>
                                    <div class="single-gal">
                                        <a href="#"><img src="assets/images/f_img3.png" alt=""></a>
                                    </div>
                                    <div class="single-gal">
                                        <a href="#"><img src="assets/images/f_img4.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foo_btm">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text">
                                <span> &copy; copyright by <a href="{{ asset('https://softtechitltd.com/') }}"><b>SoftTech-IT</b></a>
                                    2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- scroll to up -->
    <div class="scrollup"><i class="fas fa-angle-double-up"></i></div>
    <!-- Javascript Files -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/counterup.min.js"></script>
    <script src="assets/js/vendor/jquery.meanmenu.min.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendor/waypoints.min.js"></script>
    <script src="assets/js/vendor/easing.min.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/countdown.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>