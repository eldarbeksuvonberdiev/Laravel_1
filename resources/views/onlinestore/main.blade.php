<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href={{ asset('images/favicon.png') }} />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/font-awesome.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/animate.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/jquery-ui.css') }}>
    <link rel="stylesheet" href={{ asset('css/slick.css') }}>
    <link rel="stylesheet" href={{ asset('css/chosen.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/pe-icon-7-stroke.css') }}>
    <link rel="stylesheet" href={{ asset('css/magnific-popup.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/lightbox.min.css') }}>
    <link rel="stylesheet" href={{ asset('js/fancybox/source/jquery.fancybox.css') }}>
    <link rel="stylesheet" href={{ asset('css/jquery.scrollbar.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/mobile-menu.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
</head>

<body class="home">
    <header class="header style7">
        <div class="top-bar">
            <div class="container">
                <div class="top-bar-left">
                    <div class="header-message">
                        Welcome to our online store!
                    </div>
                </div>
                <div class="top-bar-right">
                    <div class="header-language">
                        <div class="vereesa-language vereesa-dropdown">
                            <a href="#" class="active language-toggle" data-vereesa="vereesa-dropdown">
                                <span>
                                    English (USD)
                                </span>
                            </a>
                            <ul class="vereesa-submenu">
                                <li class="switcher-option">
                                    <a href="#">
                                        <span>
                                            French (EUR)
                                        </span>
                                    </a>
                                </li>
                                <li class="switcher-option">
                                    <a href="#">
                                        <span>
                                            Japanese (JPY)
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="header-user-links">
                        <li>
                            <a href="/">ADMIN PAGE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="main-header">
                <div class="row">
                    <div class="col-lg-3 col-sm-4 col-md-3 col-xs-7 col-ts-12 header-element">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo.png" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-8 col-md-6 col-xs-5 col-ts-12">
                        <div class="block-search-block">
                            <form class="form-search form-search-width-category">
                                <div class="form-content">
                                    <div class="inner">
                                        <input type="text" class="input" name="s" value=""
                                            placeholder="Search here">
                                    </div>
                                    <button class="btn-search" type="submit">
                                        <span class="icon-search"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav-container rows-space-20">
            <div class="container">
                <div class="header-nav-wapper main-menu-wapper">
                    <div class="header-nav">
                        <div class="container-wapper">
                            <ul class="vereesa-clone-mobile-menu vereesa-nav main-menu " id="menu-main-menu">
                                <li class="menu-item  menu-item-has-children">
                                    <a href="index.html" class="vereesa-menu-item-title" title="Home">Home</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="/tostore">Home 01</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/store2">Home 02</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/store3">Home 03</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="/about" class="vereesa-menu-item-title" title="About">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="footer style7">
        <div class="container">
            <div class="container-wapper">
                <div class="row">
                    <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="widget-box">
                            <div class="single-img">
                                <a href="index.html"><img src="assets/images/logo.png" alt="img"></a>
                            </div>
                            <div class="text-content-elememnt">
                                <p>
                                    Shop the latest products right from
                                    your home .
                                </p>
                                <p>We have furniture supplies & accessories from top brands.</p>
                            </div>
                        </div>
                        <div class="vereesa-socials">
                            <ul class="socials">
                                <li>
                                    <a href="#" class="social-item" target="_blank">
                                        <i class="icon fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-item" target="_blank">
                                        <i class="icon fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-item" target="_blank">
                                        <i class="icon fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-2">
                        <div class="vereesa-custommenu default">
                            <h2 class="widgettitle">Links</h2>
                            <ul class="menu">
                                <li class="menu-item">
                                    <a href="#">Tables</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Lighting</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Lighting</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Gift Vouchers</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Accessories</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-2">
                        <div class="vereesa-custommenu default">
                            <h2 class="widgettitle">Information</h2>
                            <ul class="menu">
                                <li class="menu-item">
                                    <a href="#">FAQs</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Track Order</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Delivery</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Contact Us</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Return</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="vereesa-newsletter style1">
                            <div class="newsletter-head">
                                <h3 class="title">Newsletter</h3>
                            </div>
                            <div class="newsletter-form-wrap">
                                <div class="list">
                                    Get notified of new products, limited releases, and more.
                                </div>
                                <input type="email" class="input-text email email-newsletter"
                                    placeholder="Your email letter">
                                <button class="button btn-submit submit-newsletter">SUBSCRIBE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 border-custom">
                        <span></span>
                    </div>
                </div>
                <div class="footer-end">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="coppyright">
                                Copyright © 2019
                                <a href="#">Vereesa</a>
                                . All rights reserved
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="vereesa-payment">
                                <img src="assets/images/payments.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-device-mobile">
        <div class="wapper">
            <div class="footer-device-mobile-item device-home">
                <a href="index.html">
                    <span class="icon">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </span>
                    Home
                </a>
            </div>
            <div class="footer-device-mobile-item device-home device-wishlist">
                <a href="#">
                    <span class="icon">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </span>
                    Wishlist
                </a>
            </div>
            <div class="footer-device-mobile-item device-home device-cart">
                <a href="#">
                    <span class="icon">
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        <span class="count-icon">
                            0
                        </span>
                    </span>
                    <span class="text">Cart</span>
                </a>
            </div>
            <div class="footer-device-mobile-item device-home device-user">
                <a href="login.html">
                    <span class="icon">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                    Account
                </a>
            </div>
        </div>
    </div>
    <a href="#" class="backtotop">
        <i class="pe-7s-angle-up"></i>
    </a>
    <script src={{ asset('js/jquery-1.12.4.min.js') }}></script>
    <script src={{ asset('js/jquery.plugin-countdown.min.js') }}></script>
    <script src={{ asset('js/jquery-countdown.min.js') }}></script>
    <script src={{ asset('js/bootstrap.min.js') }}></script>
    <script src={{ asset('js/owl.carousel.min.js') }}></script>
    <script src={{ asset('js/magnific-popup.min.js') }}></script>
    <script src={{ asset('js/isotope.min.js') }}></script>
    <script src={{ asset('js/jquery.scrollbar.min.js') }}></script>
    <script src={{ asset('js/jquery-ui.min.js') }}></script>
    <script src={{ asset('js/mobile-menu.js') }}></script>
    <script src={{ asset('js/chosen.min.js') }}></script>
    <script src={{ asset('js/slick.js') }}></script>
    <script src={{ asset('js/jquery.elevateZoom.min.js') }}></script>
    <script src={{ asset('js/jquery.actual.min.js') }}></script>
    <script src={{ asset('js/fancybox/source/jquery.fancybox.js') }}></script>
    <script src={{ asset('js/lightbox.min.js') }}></script>
    <script src={{ asset('js/owl.thumbs.min.js') }}></script>
    <script src={{ asset('js/jquery.scrollbar.min.js') }}></script>
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
    <script src={{ asset('js/frontend-plugin.js') }}></script>
</body>

</html>
