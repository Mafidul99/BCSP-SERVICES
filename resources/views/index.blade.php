@extends('layouts.master')
@section('title') {{'Digital Seva, Bank Of Baroda CSP, ICICI Bank CSP provider'}} @endsection
@section('main-container')
<!-- main content wrapper -->
<div class="main-content-wrapper">
    <!---------------------------------------------- content section --------------------------------------->
    <section class="slider-section">
        <div class="slider-container">
            <ul class="site-slider">
                <li>
                    <div class="slider-img">
                        <img src="{{asset('frontend')}}/assets/images/img/banner_main/banner-1.jpg" alt="Sldie 1" />
                    </div>
                    <div class="slider-text">
                        <h3>WE CREATE<br>SPACE FOR LIFE
                        </h3>
                        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></p>
                        <div class="banner-btns">
                            <a href="{{url('/aboutUs')}}" class="banner-learn-btn">learn more</a>
                            <a href="#" data-toggle="modal" data-target="#getquote" class="banner-quote-btn">get a quote</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-img">
                        <img src="{{asset('frontend')}}/assets/images/img/banner_main/banner-2.jpg" alt="Sldie 2" /></div>
                    <div class="slider-text">
                        <h3>WE CREATE<br>SPACE FOR LIFE
                        </h3>
                        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></p>
                        <div class="banner-btns">
                            <a href="pages/about-us.html" class="banner-learn-btn">learn more</a>
                            <a href="#" data-toggle="modal" data-target="#getquote" class="banner-quote-btn">get a quote</a> </div>
                    </div>
                </li>
                <li>
                    <div class="slider-img">
                        <img src="{{asset('frontend')}}/assets/images/img/banner_main/banner-3.jpg" alt="Sldie 3" />
                    </div>
                    <div class="slider-text">
                        <h3>WE CREATE<br>SPACE FOR LIFE
                        </h3>
                        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></p>
                        <div class="banner-btns">
                            <a href="pages/about-us.html" class="banner-learn-btn">learn more</a>
                            <a href="#" data-toggle="modal" data-target="#getquote" class="banner-quote-btn">get a quote</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!------------------------------------------------------- aboutus start -------------------------------------------->
    <section class="home-aboutus">
        <div class="top-tab-block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="nav-tab-block">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="who-we-tab" data-toggle="tab" href="#who-we" role="tab" aria-controls="who-we" aria-selected="true">
                                    <div class="tab-info-block">
                                        <div class="tab-info-icon">
                                            <i class="material-icons">settings</i>
                                        </div>
                                        <div class="tab-info-text">
                                            <h2>Website Design</h2>
                                            <p>Website layouts Very Good </p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-item nav-link" id="our-mission-tab" data-toggle="tab" href="#our-mission" role="tab" aria-controls="our-mission" aria-selected="false">
                                    <div class="tab-info-block">
                                        <div class="tab-info-icon">
                                            <i class="material-icons">memory</i> </div>
                                        <div class="tab-info-text">
                                            <h2>Digital Marketing</h2>
                                            <p>Mobile friendly layout with secure.</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-item nav-link" id="what-we-tab" data-toggle="tab" href="#what-we" role="tab" aria-controls="what-we" aria-selected="false">
                                    <div class="tab-info-block">
                                        <div class="tab-info-icon">
                                            <i class="material-icons">dvr</i> </div>
                                        <div class="tab-info-text">
                                            <h2>Design & Development</h2>
                                            <p>Digitally and make your brand.</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-item nav-link" id="safety-tab" data-toggle="tab" href="#safety" role="tab" aria-controls="safety" aria-selected="false">
                                    <div class="tab-info-block">
                                        <div class="tab-info-icon">
                                            <i class="material-icons">support_agent</i> </div>
                                        <div class="tab-info-text">
                                            <h2>24/7 Support</h2>
                                            <p>Technical support available 24/7.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content-block">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="about-info-left">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="who-we" role="tabpanel" aria-labelledby="who-we-tab">
                                    <div class="tab-content-wrapper">
                                        <img src="{{asset('frontend')}}/assets/images/icon-1.svg" alt="img">
                                        <h2>ANY KIND PROJECT PLANNING</h2>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="our-mission" role="tabpanel" aria-labelledby="our-mission-tab">
                                    <div class="tab-content-wrapper">
                                        <img src="{{asset('frontend')}}/assets/images/icon-1.svg" alt="img">
                                        <h2>ANY KIND PROJECT PLANNING</h2>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="what-we" role="tabpanel" aria-labelledby="what-we-tab">
                                    <div class="tab-content-wrapper">
                                        <img src="{{asset('frontend')}}/assets/images/icon-1.svg" alt="img">
                                        <h2>ANY KIND PROJECT PLANNING</h2>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="safety" role="tabpanel" aria-labelledby="safety-tab">
                                    <div class="tab-content-wrapper">
                                        <img src="{{asset('frontend')}}/assets/images/icon-1.svg" alt="img">
                                        <h2>ANY KIND PROJECT PLANNING</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="about-home-right-info">
                            <h3 class="sub-heading-small">About Us</h3>
                            <h2 class="main-heading">Company Introduction :–</h2>
                            <p class="text-justify">It was in the year 2019 the company is formally launched with its Brand name
                                “BCSP SERVICES (OPC) PVT.LTD” our main purpose is to serve the people in different field, more
                                specifically in-service related field, which enable the people to excess in
                                E-Services world. We also deal with the Human Resources and try to generate
                                employment opportunities for the educated unemployed youths. </p>
                            <a class="learn-more-btn" href="{{url('/aboutUs')}}">About Us</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------------------------------------------------- aboutus end ------------------------------------------------------------>
    <!--------------------------------------------------- services start ------------------------------------------------------------>
    <section class="section">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-12">
                    <div class="main-heading-block">
                        <h2 class="main-heading">our special services</h2>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="services-info-more-wrapper">
                        <div class="services-info-more-inner">
                            <div class="sinfo-more-icon">
                                <img src="{{asset('frontend')}}/assets/images/services_icon/aadhaar.png" alt="img">
                            </div>
                            <div class="sinfo-more-content">
                                <h2 class="sub-heading-medium-camel">Aadhaar Centre</h2>
                                <p>Get exterior design ideas for your modern house elevation with our 50 unique modern house facades.</p>
                                <a href="{{url('/')}}" class="services-more">
                                    <i class="material-icons">arrow_forward</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="services-info-more-wrapper">
                        <div class="services-info-more-inner">
                            <div class="services-info-more-inner">
                                <div class="sinfo-more-icon">
                                    <img src="{{asset('frontend')}}/assets/images/services_icon/dmt.png" alt="img">
                                </div>
                                <div class="sinfo-more-content">
                                    <h2 class="sub-heading-medium-camel">AEPS & DMT</h2>
                                    <p>Get exterior design ideas for your modern house elevation with our 50 unique modern house facades.</p>
                                    <a href="{{url('/')}}" class="services-more">
                                        <i class="material-icons">arrow_forward</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="services-info-wrapper">
                        <div class="services-inner-box">
                            <div class="services-inner-icon">
                                <!--<i class="material-icons">-->
                                    <img src="{{asset('frontend')}}/assets/images/services_icon/icici1.png" alt="img">
                                    <!--<span class="material-icons-outlined">miscellaneous_services</span>-->
                                </i>
                            </div>
                            <h3>Provide Variety</h3>
                            <h3>Construction Services</h3>
                            <div class="services-inner-discount">
                                <p></p>
                                <h3>ICICI Provider</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="services-info-more-wrapper">
                        <div class="services-info-more-inner">
                            <div class="sinfo-more-icon">
                                <img src="{{asset('frontend')}}/assets/images/services_icon/ayush.png" alt="img">
                            </div>
                            <div class="sinfo-more-content">
                                <h2 class="sub-heading-medium-camel">Ayushman Bharat</h2>
                                <p>Get exterior design ideas for your modern house elevation with our 50 unique modern house facades.</p>
                                <a href="{{url('/')}}" class="services-more"><i class="material-icons">arrow_forward</i></a> </div>
                        </div>
                    </div>
                    <div class="services-info-more-wrapper">
                        <div class="services-info-more-inner">
                            <div class="services-info-more-inner">
                                <div class="sinfo-more-icon">
                                    <img src="{{asset('frontend')}}/assets/images/services_icon/pan.png" alt="img">
                                </div>
                                <div class="sinfo-more-content">
                                    <h2 class="sub-heading-medium-camel">NSDL PAN & UTI PAN</h2>
                                    <p>Get exterior design ideas for your modern house elevation with our 50 unique modern house facades.</p>
                                    <a href="{{url('/')}}" class="services-more"><i class="material-icons">arrow_forward</i></a>                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services end -->
    <!-- latest project start -->
    <section class="section latest-project-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-7">
                    <div class="main-heading-block">
                        <h2 class="main-heading white-color">our latest projects</h2>
                        <!--<p class="white-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="latest-project-wrapper">
                        <!-- Project Carousel -->
                        <div class="latest-project">
                            <!-- Project -->
                            <div>
                                <div class="box">
                                    <div class="content">
                                        <div class="content-overlay"></div>
                                        <img class="content-image" src="{{asset('frontend')}}/assets/images/project.png" alt="project">
                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">Peindia Payments</h3>
                                            <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            <a href="{{url('/')}}" class="learn-more-project-btn">learn more</a> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / Project -->
                            <!-- Project -->
                            <div>
                                <div class="box">
                                    <div class="content">
                                        <div class="content-overlay"></div>
                                        <img class="content-image" src="{{asset('frontend')}}/assets/images/project2.png" alt="project">
                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">Peindia cab</h3>
                                            <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            <a href="{{url('/')}}" class="learn-more-project-btn">learn more</a> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / Project -->
                            <!-- Project -->
                            <div>
                                <div class="box">
                                    <div class="content">
                                        <div class="content-overlay"></div>
                                        <img class="content-image" src="{{asset('frontend')}}/assets/images/project3.png" alt="project">
                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">CSC Academy</h3>
                                            <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            <a href="{{url('/')}}" class="learn-more-project-btn">learn more</a> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / Project -->
                            <!-- Project -->
                            <div>
                                <div class="box">
                                    <div class="content">
                                        <div class="content-overlay"></div>
                                        <img class="content-image" src="{{asset('frontend')}}/assets/images/project4.png" alt="project">
                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">Aadhaar</h3>
                                            <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            <a href="{{url('/')}}" class="learn-more-project-btn">learn more</a> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / Project -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest project end -->
    <!-- experts start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-heading-block">
                        <h2 class="main-heading pt-5">our best experts</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-3 col-md-6 item">
                    <div class="experts-info-wrapper">
                        <div class="content-experts">
                            <div class="content-experts-overlay"></div>
                            <img class="content-experts-image" src="{{asset('frontend')}}/assets/images/our-team-1.jpg" alt="team">
                            <div class="content-experts-details fadeIn-bottom">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-expert-info">
                            <h2>CMD</h2>
                            <p>Programming Guru</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 item">
                    <div class="experts-info-wrapper">
                        <div class="content-experts">
                            <div class="content-experts-overlay"></div>
                            <img class="content-experts-image" src="{{asset('frontend')}}/assets/images/our-team-2.jpg" alt="team">
                            <div class="content-experts-details fadeIn-bottom">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-expert-info">
                            <h2>OM</h2>
                            <p>Creative Leader</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 item">
                    <div class="experts-info-wrapper">
                        <div class="content-experts">
                            <div class="content-experts-overlay"></div>
                            <img class="content-experts-image" src="{{asset('frontend')}}/assets/images/our-team-3.jpg" alt="team">
                            <div class="content-experts-details fadeIn-bottom">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-expert-info">
                            <h2>GM</h2>
                            <p>Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 item">
                    <div class="experts-info-wrapper">
                        <div class="content-experts">
                            <div class="content-experts-overlay"></div>
                            <img class="content-experts-image" src="{{asset('frontend')}}/assets/images/our-team-4.jpg" alt="team">
                            <div class="content-experts-details fadeIn-bottom">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-expert-info">
                            <h2>RM</h2>
                            <p>Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- experts end -->
    <!-- small contactus bar start -->
    <section class="contactus-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 display-flex align-item-center">
                    <div class="contactus-bar-text">
                        <h2>LOOKING AN ADAQUATE SOLUTION FOR YOUUR PROJECT</h2>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="contactus-bar-button-block">
                        <a href="{{url('/contact')}}" class="contactus-bar-btn">contact us</a> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- small contactus bar end -->
    <br>
    <!-- special project info start -->
    <section class="section">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-12 col-lg-6 col-md-6 item">
                    <div class="special-project-info-img">
                        <img src="{{asset('frontend')}}/assets/images/img/banking/1 copy.png" alt="img"> </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="special-project-info-wrapper">
                        <h3>Banking Services</h3>
                        <h2>Bank Of Baroda (CSP)</h2>
                        <hr>
                        <p>BOB CSP -Fund Transfer, Account opening of zero balance saving accounts etc.</p>
                        <a href="{{url('/')}}" class="special-project-know-btn">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-12 col-lg-6 col-md-6 item">
                    <div class="special-project-info-wrapper flex-end">
                        <h3>Banking Services</h3>
                        <h2>Peindia Self Kiosk Machine</h2>
                        <hr>
                        <p>All Bank Cash Deposit and Withdrawal ATM & Fingerprint Accepted Here.</p>
                        <a href="{{url('/')}}" class="special-project-know-btn">Click Here</a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="special-project-info-img">
                        <img src="{{asset('frontend')}}/assets/images/img/banking/atm-banner.jpg" alt="img"> </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-12 col-lg-6 col-md-6 item">
                    <div class="special-project-info-img">
                        <img src="{{asset('frontend')}}/assets/images/img/banking/3 copy.png" alt="img"> </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="special-project-info-wrapper">
                        <h3>Banking Services</h3>
                        <h2>NSDL Payment Bank (CSP</h2>
                        <hr>
                        <p>NSDL Payments Bank CSP -Fund Transfer, zero balance saving accounts etc.</p>
                        <a href="{{url('/')}}" class="special-project-know-btn">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------ special project info end ------------->
    <!----------- counter start ---------------------->
    <section class="section counter-bg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 col-md-6 item">
                    <div class="company-counter-wrapper pt-5">
                        <div class="count-number-box">
                            <h3>100+</h3>
                        </div>
                        <h2 class="count-info-name">Project done</h2>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 item">
                    <div class="company-counter-wrapper pt-5">
                        <div class="count-number-box">
                            <h3>90</h3>
                        </div>
                        <h2 class="count-info-name">Happy clients</h2>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 item">
                    <div class="company-counter-wrapper pt-5">
                        <div class="count-number-box">
                            <h3>50</h3>
                        </div>
                        <h2 class="count-info-name">completed co.</h2>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 item">
                    <div class="company-counter-wrapper pt-5">
                        <div class="count-number-box">
                            <h3>50+</h3>
                        </div>
                        <h2 class="count-info-name">country cover</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counterr end -->
    <!-- features start -->
    <section class="section">
        <div class="home-feature-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="home-feature-box-wrapper">
                            <h3 class="sub-heading-small">core feature</h3>
                            <h2 class="main-heading">Build services for<br> developers</h2>
                            <div class="home-feature-list">
                                <div class="home-feature-listitem">
                                    <div class="feature-list-icon">
                                        <img src="{{asset('frontend')}}/assets/images/appdegin/website_design.png" alt="img"> </div>
                                    <div class="feature-list-info">
                                        <h2 class="sub-heading-medium">Creative Websites Design</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                                <div class="home-feature-listitem">
                                    <div class="feature-list-icon">
                                        <img src="{{asset('frontend')}}/assets/images/appdegin/app-development.png" alt="img"> </div>
                                    <div class="feature-list-info">
                                        <h2 class="sub-heading-medium">Mobile Application</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div> <a href="pages/services/services-1.html" class="learn-more-btn m-25px-t">learn more</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature end -->
    <!-- latest news start -->
    <!--<section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-heading-block">
                        <h2 class="main-heading">latest news & blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 item">
                    <div class="construction-news-wrapper">
                        <div class="construction-news-img"> <img src="assets/images/img/news-1.jpg" alt="img">
                            <div class="date-box">
                                <p>17</p>
                                <p>APR</p>
                            </div>
                        </div>
                        <div class="construction-new-info">
                            <h2>Commercial Design For Project</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipimagna aliqua. Ut minim veniam. Aenean massa. Cumus et magnis dis partu rient to montes. Cum sociis natoque penatibus.</p>
                        </div>
                        <div class="construction-news-action">
                            <div class="connews-action-box"> <i class="material-icons">chat_bubble_outline</i> <span>Comments</span> </div>
                            <div class="connews-action-box"> <i class="material-icons">person</i> <span>Alex</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 item">
                    <div class="construction-news-wrapper">
                        <div class="consnews-right-img">
                            <div class="construction-news-img"> <img src="assets/images/img/news-2.jpg" alt="img">
                                <div class="date-box">
                                    <p>17</p>
                                    <p>APR</p>
                                </div>
                            </div>
                        </div>
                        <div class="consnews-right-info">
                            <div class="construction-new-info">
                                <h2>Commercial Design For Project</h2>
                            </div>
                            <div class="construction-news-action">
                                <div class="connews-action-box"> <i class="material-icons">chat_bubble_outline</i> <span>Comments</span> </div>
                                <div class="connews-action-box"> <i class="material-icons">person</i> <span>Alex</span> </div>
                            </div>
                            <div class="construction-new-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipimagna aliqua. Ut minim veniam. Aenean massa. Cumus et magnis dis partu rient to montes. Cum sociis natoque penatibus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="construction-news-wrapper">
                        <div class="consnews-right-img">
                            <div class="construction-news-img"> <img src="assets/images/img/news-3.jpg" alt="img">
                                <div class="date-box">
                                    <p>17</p>
                                    <p>APR</p>
                                </div>
                            </div>
                        </div>
                        <div class="consnews-right-info">
                            <div class="construction-new-info">
                                <h2>Commercial Design For Project</h2>
                            </div>
                            <div class="construction-news-action">
                                <div class="connews-action-box"> <i class="material-icons">chat_bubble_outline</i> <span>Comments</span> </div>
                                <div class="connews-action-box"> <i class="material-icons">person</i> <span>Alex</span> </div>
                            </div>
                            <div class="construction-new-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipimagna aliqua. Ut minim veniam. Aenean massa. Cumus et magnis dis partu rient to montes. Cum sociis natoque penatibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- latest news end -->
    <!-- content section end -->
</div>
@endsection
