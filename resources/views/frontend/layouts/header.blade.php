<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', ' BCSP SERVICES') }} | | @yield('title') </title>

    <meta name="keywords" content="BCSP SERVICES, Services, Banking">
    <meta name="author" content="Bcsp-Services">
    <link rel="shortcut icon" type="image/jpg" href="{{asset('frontend')}}/assets/images/Logos/farvic.png" />
    <!-- Icon link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/fontawesome.main.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- Style link -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.main.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/OwlCarousel.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/slick-theme.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/slick.min.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/responsive.css"> </head>

<body>
<!---------------Loading Start----------------------------------->
<div id="loading">
    <img id="loading-image" src="{{asset('frontend')}}/assets/images/loader/loader.svg" alt="Loading...." />
</div>
<!---------------Loading End----------------------------------->
<!-- top header start -->
<div class="top-header  d-none d-lg-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5 offset-xl-3 col-lg-6 col-md-7 col-12 col-sm-5">
                <div class="header-top-left"> <span class="d-m-none">
                                <i class="material-icons">mail_outline</i>
                                <a href="#">support@bcsp.net.in</a>
                            </span> <span class="d-m-none">
                                <i class="material-icons">phone_enabled</i>
                                <a href="#">+91 7030305080</a>
                            </span> </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-12 col-sm-12">
                <div class="header-top-right">
                    <div class="header-top-right-flag f_right">
                        <ul>
                            <li class="language-dropdown dropdown">
                                <a href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN
                                    <i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">English</a>
                                    <a class="dropdown-item" href="#">Hindi</a>
                                    <a class="dropdown-item" href="#">Assamese</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="header-top-right-social f_right d-md-block">
                        <ul>
                            <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                            <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                            <li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
                            <li><a href="#"> <i class="fab fa-linkedin"></i> </a> </li>
                            <li><a href="#"> <i class="fab fa-youtube"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- top header end -->
<!-- main header start -->
<div class="penta__header header-menu">
    <div class="container-fluid  d-none d-lg-block">
        <div class="row">
            <div class="col-lg-3 col-8 col-md-5">
                <div class="header-logo">
                    <a href="{{url('/')}}"> <img src="{{asset('frontend')}}/assets/images/Logos/logo.png" alt="logo"> </a>
                </div>
            </div>
            <div class="col-lg-9 d-none d-lg-block">
                <div class="header-side-btn f-right d-none d-lg-block">
                    <a href="{{url('/getmodal')}}" data-toggle="modal" data-target="#getquote">Get A Quote</a> </div>
                <div class="main-menu">
                    <nav class="main-menu-nav">
                        <ul>
                            <li class="sub-menu-parent">
                                <a href="{{url('/')}}" class="active">Home</a></li>
                            <li class="sub-menu-parent">
                                <a href="{{url('/aboutUs')}}">about</a> </li>
                            <li class="sub-menu-parent">
                                <a href="#"> Govt. Project
                                    <i class = "material-icons">arrow_drop_down</i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/')}}">AADHAAR CENTER</a></li>
                                    <li><a href="{{url('/')}}">AYUSHMAN BHARAT</a></li>
                                    <li><a href="{{url('/')}}">NSDL PAN & TIN</a></li>
                                    <li><a href="{{url('/')}}">UTI PAN CENTER</a></li>

                                </ul>
                            </li>
                            <li class="sub-menu-parent">
                                <a href="#">Services
                                    <i class = "material-icons">arrow_drop_down</i></a>
                                <ul class="sub-menu">
                                        <li><a href="{{url('/')}}">Mobile Recharge</a></li>
                                        <li><a href="{{url('/')}}">DTH Recharge</a></li>
                                        <li><a href="{{url('/')}}">Bill Payment</a></li>
                                        <li><a href="{{url('/')}}">Direct money transfer</a></li>
                                        <li><a href="{{url('/')}}">aeps</a></li>
                                        <li><a href="{{url('/')}}">dsc certificate</a></li>
                                        <li><a href="{{url('/')}}">Insurance</a></li>
                                        <li><a href="{{url('/')}}">UTI PSA ID</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu-parent">
                                <a href="{{url('/contact')}}">contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main header end -->
<!-- mobile header start -->
<div class="mobile-header-menu d-lg-none d-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-9">
                <div class="mobile-menu-logo">
                    <a href="{{url('/')}}">
                        <img src="{{asset('frontend')}}/assets/images/Logos/logo.png" alt="logo"> </a>
                </div>
            </div>
            <div class="col-3">
                <div class="mobile-menu-toggler">
                    <a href="#" data-toggle="collapse" data-target="#navbar-main"> <i class="fal fa-bars"></i> </a>
                </div>
            </div>
            <div id="navbar-main" class="navbar-collapse mobile-collapse-menu collapse">
                <div class="mobile-menu-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="mobile-menu-header">
                                    <a href="#" data-toggle="collapse" data-target="#navbar-main">
                                        <i class="material-icons">close</i> </a>
                                    <img src="{{asset('frontend')}}/assets/images/Logos/logo.png" alt="img"> </div>
                            </div>
                            <div class="col-12">
                                <ul class="nav navbar-nav navbar-right mobile-menu">
                                    <li> <a href="{{url('/')}}" class="mobile-menu-link active"> Home </a> </li>
                                    <li> <a href="{{url('/aboutUs')}}">about</a> </li>
                                    <li class="dropdown">
                                        <a href="{{url('/')}}" class="mobile-menu-link" data-toggle="dropdown">Govt. Project
                                            <i class = "material-icons">arrow_drop_down</i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('/')}}">AADHAAR CENTER</a></li>
                                            <li><a href="{{url('/')}}">AYUSHMAN BHARAT</a></li>
                                            <li><a href="{{url('/')}}">NSDL PAN & TIN</a></li>
                                            <li><a href="{{url('/')}}">UTI PAN CENTER</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{url('/')}}" class="mobile-menu-link" data-toggle="dropdown">Services
                                            <i class = "material-icons">arrow_drop_down</i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('/')}}">Mobile Recharge</a></li>
                                            <li><a href="{{url('/')}}">DTH Recharge</a></li>
                                            <li><a href="{{url('/')}}">Bill Payment</a></li>
                                            <li><a href="{{url('/')}}">Direct money transfer</a></li>
                                            <li><a href="{{url('/')}}">aeps</a></li>
                                            <li><a href="{{url('/')}}">dsc certificate</a></li>
                                            <li><a href="{{url('/')}}">Insurance</a></li>
                                            <li><a href="{{url('/')}}">UTI PSA ID</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="{{url('/contact')}}">contact</a> </li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <div class="mobile-menu-contact">
                                    <h2 class="mobile-menu-heading">Contact Info</h2>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="material-icons">map</i>
                                                <span>H.No.41, Sixmile Panjabari Road, Guwahati Assam - 22</span> </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="material-icons">phone</i>
                                                <span>+91 700305080</span> </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="material-icons">email</i>
                                                <span>support@bcsp.net.in</span> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="#" class="quote-btn button">Get a Quote</a> </div>
                            <div class="col-12">
                                <div class="mobile-menu-social-wrapper">
                                    <ul>
                                        <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                                        <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
                                        <li><a href="#"> <i class="fab fa-linkedin"></i> </a></li>
                                        <li><a href="#"> <i class="fab fa-youtube"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile header end -->

@include('sweetalert::alert')
