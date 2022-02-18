@include('sweetalert::alert')
<!-- footer start -->
<footer>
    <div class="footer-top">
        <div class="container-fluid">
            <div class="row align-item-center">
                <div class="col-lg-3 col-md-3">
                    <div class="footer-logo">
                        <a href="#">
                            <img src="{{asset('frontend')}}/assets/images/Logos/logo-footer2.png" alt="footer-logo"> </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="footer-top-right-info">
                                <div class="footer-top-info-icon"> <span><i class="fas fa-envelope-open-text"></i></span> </div>
                                <div class="footer-top-info-text">
                                    <h2>Subscribe To Our Newsletter</h2>
                                    <p>Stay in touch with us to get latest news and discount coupons.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 footer-form">
                            <div class="footer-top-right-form">
                                <form action="{{route('send.Subscribe')}}" method="POST">
                                    @csrf
                                    <input name="email" class="subscribe-input" type="email" placeholder="Email" required>
                                    <button type="submit" class="submit-btn-btn">
                                        <i class="fa fa-envelope"></i></button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-3 col-md-6 item">
                    <div class="footer-block-list">
                        <h2 class="footer-middle-heading">About Us</h2>
                        <p class="footer-middle-text">Lorem ipsum dolort amet, consectetur adipimag A ms pum sociis natoque penatibus.A ms pum sociis natoque penatibus.</p>
                        <h2 class="footer-middle-heading">Get Free Estimate</h2>
                        <p class="footer-middle-text">Our online scheduling and payment system is safe.</p>
                        <a href="{{url('/error_404')}}" class="footer-request-btn">Request with Online Form</a> </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 item">
                    <div class="footer-block-list">
                        <h2 class="footer-middle-heading">Useful Links</h2>
                        <div class="footer-menu-list-wrapper">
                            <ul class="footer-menu-list">
                                <li> <a href="{{url('/')}}">Home</a> </li>
                                <li> <a href="{{url('/services_footer')}}">Services</a> </li>
                                <li> <a href="{{url('/aboutUs')}}">About</a> </li>
                                <li> <a href="{{url('/error_404')}}url('/')}}">Project</a> </li>
                                <li> <a href="{{url('/error_404')}}/')}}">Our Team</a> </li>
                                <li> <a href="{{url('/error_404')}}">Coming Soon</a> </li>
                            </ul>
                            <ul class="footer-menu-list">
                                <li> <a href="{{url('/error_404')}}">FAQ</a> </li>
                                <li> <a href="{{url('/error_404')}}">404 Error</a> </li>
                                <li> <a href="{{url('/error_404')}}">Testimonials</a> </li>
                                <li> <a href="{{url('/error_404')}}">Brands</a> </li>
                                <li> <a href="{{url('/error_404')}}">Single Service</a> </li>
                                <li> <a href="{{url('/error_404')}}">Single News</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 item">
                    <div class="footer-block-list">
                        <h2 class="footer-middle-heading">Contact Us</h2>
                        <div class="footercontact-list-item">
                            <div class="footercontact-list-icon"> <i class="fas fa-map-marked-alt"></i> </div>
                            <div class="footercontact-list-info">
                                <h2>OFFICIAL ADDRESS</h2>
                                <p>H.No. 41, Panjabari Road, Sixmile Kamrup,
                                    <br> Guwahati Assam,
                                    <br> 781022, India</p>
                            </div>
                        </div>
                        <div class="footercontact-list-item">
                            <div class="footercontact-list-icon">
                                <i class="fas fa-phone-alt"></i> </div>
                            <div class="footercontact-list-info">
                                <h2>Contact details</h2>
                                <p>
                                    <a href="#">+91 7030305080</a>
                                    <br><a href="#">support@bcsp.net.in</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 item">
                    <div class="footer-block-list">
                        <h2 class="footer-middle-heading">Mobile App</h2>
                        <div class="footer-post-list">
                            <div class="footer-post-icon">
                                <a href=""><img src="{{asset('frontend')}}/assets/images/mobileApp/plays.png" alt="img"> </a>
                                <a href=""><img src="{{asset('frontend')}}/assets/images/mobileApp/app.png" alt="img"> </a>
                            </div>
                        </div>
                        <div class="footer-post-list p-20px-t">
                            <div class="footer-post-icon">
                                <a href=""><img src="{{asset('frontend')}}/assets/images/mobileApp/sq.png" alt="img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-6">
                    <p>Copyright © 2019 BCSP SERVICES (OPC) PVT. LTD. All rights reserved.</p>
                </div>
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="terms-policy">
                        <span><a class="divide-icon" href="{{url('/terms')}}">Terms & Conditions</a></span>
                        <span><a href="{{url('/privacy')}}">Privacy Policy</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>




<!--===================================== Modal ===========================================-->
<div class="modal fade quote" id="getquote" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="{{url('add_data')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <h2 class="sub-heading-medium m-15px-b">Request Quote</h2>
                        </div>
                        <div class="col-12">
                            <div class="quote-form-wrapper">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-input" name="fname" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="quote-form-wrapper">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-input" name="lname" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="quote-form-wrapper">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-input" name="mobile" placeholder="Mobile" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="quote-form-wrapper">
                                <label class="form-label">Services</label>
                                <input type="text" class="form-input" name="services" placeholder="Services Rquate" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="quote-form-wrapper">
                                <label class="form-label">Message</label>
                                <textarea class="form-input-textarea" rows="4" name="message" placeholder="Your Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="request-quote-btn">Request A Quote</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- footer end -->
<a href="#" class="back-to-top">
    <i class="material-icons">expand_less</i>
</a>
<!-- Script tag -->
<script src="{{asset('frontend')}}/assets/js/jquery-2.2.4.js"></script>
<script src="{{asset('frontend')}}/assets/js/popper.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/bootstrap.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/owl.carousel.js"></script>
<script src="{{asset('frontend')}}/assets/js/slick.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/main.js"></script>

</body>
</html>
