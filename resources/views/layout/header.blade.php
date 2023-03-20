<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@stack('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{ url('') }}/public/assets/users/img/unidell-logo.jpg" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ url('') }}/public/assets/users/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ url('') }}/public/assets/users/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ url('') }}/public/assets/users/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ url('') }}/public/assets/users/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/public/assets/css/custom.css">
    {{-- toastr --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>

<body>
<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-3) -->
    <header class="ltn__header-area ltn__header-3">       
        
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo">
                            <a href="{{ url('') }}/"><img src="{{ url('') }}/public/assets/users/img/unidell-logo.jpg" alt="Logo" height="70px"></a>
                        </div>
                    </div>
                    <div class="col header-contact-serarch-column d-none d-lg-block">
                        <div class="header-contact-search">
                            <!-- header-feature-item -->
                            <div class="header-feature-item">
                                <div class="header-feature-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="header-feature-info">
                                    <h6>Phone</h6>
                                    <p><a href="tel:7347899703">+91 7347899703</a></p>
                                </div>
                            </div>
                            <!-- header-search-2 -->
                            <div class="header-search-2">
                                <form id="#123" method="get"  action="#">
                                    <input type="text" name="search" value="" placeholder="Search here..."/>
                                    <button type="submit">
                                        <span><i class="icon-search"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- header-options -->
                        <div class="ltn__header-options">
                            <ul>
                                <li class="d-lg-none">
                                    <!-- header-search-1 -->
                                    <div class="header-search-wrap">
                                        <div class="header-search-1">
                                            <div class="search-icon">
                                                <i class="icon-search  for-search-show"></i>
                                                <i class="icon-cancel  for-search-close"></i>
                                            </div>
                                        </div>
                                        <div class="header-search-1-form">
                                            <form id="#" method="get"  action="#">
                                                <input type="text" name="search" value="" placeholder="Search here..."/>
                                                <button type="submit">
                                                    <span><i class="icon-search"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!-- mini-cart 2 -->
                                    <div class="ltn__top-bar-menu">
                                        <ul>
                                            <li><a href="mailto:info@unidelllifesciences.com"><i class="icon-mail"></i>info@unidelllifesciences.com</a></li>  
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
        <!-- header-bottom-area start -->
        <div class="header-bottom-area ltn__border-top ltn__header-sticky  ltn__sticky-bg-white--- ltn__sticky-bg-secondary ltn__secondary-bg section-bg-1 menu-color-white d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col header-menu-column justify-content-center">
                        <div class="sticky-logo">
                            <div class="site-logo">
                                <a href="{{ url('') }}/"><img src="{{ url('') }}/public/assets/users/img/unidell-logo.jpg" alt="Logo" height="70px"></a>
                            </div>
                        </div>
                        <div class="header-menu header-menu-2">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li><a href="{{ url('') }}">Home</a></li>
                                        <li class="active"><a href="{{ url('') }}/about535mgv6758g6gghvm67hc76vgj76Us">AboutUs</a></li>
                                        <li><a href="{{ url('') }}/team547cgtd324sadz54iukln9856bvsl">Dealership</a></li>
                                        <li><a href="{{ url('') }}/product547cgtd324sadz54iukln9856bvs">Popular Medicines</a></li>
                                        <!-- <li class="menu-icon"><a href="#">Novakind</a>
                                            <ul>
                                                <?php foreach ($data['catlist'] as $catrow) { ?>
                                                <li><a href="{{ url('') }}/cat54675hfghjg65ghd65fgh65pro/{{ base64_encode($catrow['cat_id'])}}">{{ ucfirst($catrow['cat_name']) }}</a></li>
                                                 <?php } ?>
                                            </ul>
                                        </li> -->
                                        <li><a href="{{ url('') }}/contact65857vjh34fxbc098n435dfgfjhUs">ContactUs</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-bottom-area end -->
    </header>
    <!-- HEADER AREA END -->

    <!-- MOBILE MENU START -->
    <div class="mobile-header-menu-fullwidth mb-30 d-block d-lg-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle d-lg-none">
                        <span>MENU</span>
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MOBILE MENU END -->
    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="{{ url('') }}/"><img src="{{ url('') }}/public/assets/users/img/unidell-logo.jpg" alt="Logo" height="70px"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <!-- <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div> -->
            <div class="ltn__utilize-menu">
                <!-- MobileMenu -->
                <ul>
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li class="active"><a href="{{ url('') }}/about535mgv6758g6gghvm67hc76vgj76Us">AboutUs</a></li>
                    <li><a href="{{ url('') }}/team547cgtd324sadz54iukln9856bvsl">Dealership</a></li>
                    <li><a href="{{ url('') }}/product547cgtd324sadz54iukln9856bvs">Popular Medicines</a></li>
                     <!-- <li class="menu-icon"><a href="#">Novakind</a>
                                            <ul>
                                                <?php foreach ($data['catlist'] as $catrow) { ?>
                                                <li><a href="{{ url('') }}/cat54675hfghjg65ghd65fgh65pro/{{ base64_encode($catrow['cat_id'])}}">{{ ucfirst($catrow['cat_name']) }}</a></li>
                                                 <?php } ?>
                                            </ul>
                                        </li> -->
                    <li><a href="{{ url('') }}/contact65857vjh34fxbc098n435dfgfjhUs">ContactUs</a></li>
                </ul>
            </div>
           <!--  <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                <ul>
                    <li>
                        <a href="account.html" title="My Account">
                            <span class="utilize-btn-icon">
                                <i class="far fa-user"></i>
                            </span>
                            My Account
                        </a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->
    <div class="ltn__utilize-overlay"></div>