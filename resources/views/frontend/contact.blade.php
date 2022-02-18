@extends('layouts.master')
@section('title') {{'Contact Us'}} @endsection
@section('main-container')
    <!-- content start -->
    <div class="main-content-wrapper">
        <section class="breadcrumb-section about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-5">
                        <div class="breadcrumb-wrapper">
                            <h2>Contact Us</h2>
                            <nav>
                                <ul>
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active"><a href="#">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7">
                        <div class="main-heading-block">
                            <h2 class="main-heading">Find our Location</h2> </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-4 text-center item">
                        <div class="contact-block-wrapper"> <span class="icon-box">
                                <i class="material-icons">location_on</i></span>
                            <h2 class="contact-box-heading">visit our office</h2>
                            <p class="contact-box-info">New Winstion Road, New York</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 text-center item">
                        <div class="contact-block-wrapper"> <span class="icon-box"><i class="material-icons">email</i></span>
                            <h2 class="contact-box-heading">email us</h2>
                            <p class="contact-box-info"><a href="#">office@construct.com</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 text-center item">
                        <div class="contact-block-wrapper"> <span class="icon-box"><i class="material-icons">call</i></span>
                            <h2 class="contact-box-heading">call us</h2>
                            <p class="contact-box-info"><a href="#">+123 456 7890</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <section class="contact-us-section ptb-100">
            <div class="container contact">
                <div class="col-12 pb-3 message-box d-none">
                    <div class="alert alert-danger"></div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-md-6">
                        <div class="contact-form-wrapper">
                            <h2 class="main-heading" >Have You Any Query?</h2>

                            <form class="contact-us-form" method="POST" action="{{route('send.email')}}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Your Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="Your mobile number" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-md-12">
                                        <div class="contact-form-group float-right">
                                            <button type="submit" class="learn-more-btn float-right"> <i class="icons-mail"> Send message</i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="contact-form-wrapper">
                            <h2 class="main-heading1">Looking For Make Your Business Online?</h2>
                            <p class="lead">We are best in Website & Software development, Digital Marketing, App Development and other related services.</p>
                            <div>
                            <h2 class="main-heading1">Head Office</h2>
                            <h2 class="main-heading2">BCSP SERVICSE (OPC) PRIVATE LIMITED</h2>
                            <address class="lead">
                                Sixmile Panajabari Road,Guwahati- 781022, Assam
                            </address>
                            <br>
                            <span class="lead"><b> Customer Care : +91 7030305080 </b></span> <br>
                            <span class="lead"><b> Email: <a href="mailto:support@bcsp.net.in" class="link-color">support@bcsp.net.in</a></span></b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us section end-->

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="map-wrapper">
                                <h2>&nbsp;</h2>
                                    <div class="gmap_canvas">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.9527024056247!2d91.81331751434796!3d26.133085099508143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a594b5b0e23f9%3A0x6371b9a0397f28e7!2sBCSP%20SERVICES%20(OPC)%20PRIVATE%20LIMITED!5e0!3m2!1sen!2sin!4v1642094097652!5m2!1sen!2sin"
                                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- content end -->
    @include('sweetalert::alert')
@endsection
