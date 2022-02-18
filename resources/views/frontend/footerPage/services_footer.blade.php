@extends('layouts.master')
@section('title') {{'Services Footer'}} @endsection
@section('main-container')
<section class="section">
    <div class="container">
        <div class="row row-eq-height">
            <div class="col-12 pt-5">
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
@endsection
