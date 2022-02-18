@extends('layouts.master')
@section('title') {{'About Us'}} @endsection
@section('main-container')
    <!-- content start -->
    <div class="main-content-wrapper">
        <section class="breadcrumb-section about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-5">
                        <div class="breadcrumb-wrapper">
                            <h2>About Us</h2>
                            <nav>
                                <ul>
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                    <li class="breadcrumb-item active"><a href="{{url('/aboutUs')}}">About Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="row row-eq-height">
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="company-overview-wrapper">
                            <h2 class="main-heading m-0">company overview</h2>
                            <hr>
                            <p class="text-justify">BCSP SERVICES OPC PVT LTD. It is completely a digital platform.
                                In mid of 2019 we started our journey. In a very short time,
                                we have achieved our goal and created our own brand PEINDIA.
                                We started our journey only with four services and now we have
                                more than twenty services live in our portal. Recently we started CSC ACADEMY,
                                Business partner of ICICI bank, ICICI Direct, RELIGARE, BHARAT POST COURIER, SBI,
                                and Master Franchise of HITACHI PAYMENTS SERVICES in Eastern Region. AADHAAR
                                services we are doing best, recently we are going to launch PEINDIA Mobile Banking Apps,
                                PEINDIA Cab services.</p>
                            <div class="company-overview-features">
                                <div class="overview-feature-item">
                                    <i class="material-icons">campaign</i>
                                    <h2 class="sub-heading-medium-cap">Creative Websites Design</h2> </div>
                                <div class="overview-feature-item">
                                    <i class="material-icons">campaign</i>
                                    <h2 class="sub-heading-medium-cap">Professional Web Portal</h2> </div>
                                <div class="overview-feature-item">
                                    <i class="material-icons">campaign</i>
                                    <h2 class="sub-heading-medium-cap">Customize Software Development</h2> </div>
                                <div class="overview-feature-item">
                                    <i class="material-icons">campaign</i>
                                    <h2 class="sub-heading-medium-cap">Mobile Application</h2> </div>
                                <div class="overview-feature-item">
                                    <i class="material-icons">campaign</i>
                                    <h2 class="sub-heading-medium-cap">Digital Marketing</h2> </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="company-overview-wrapper">
                            <div class="overview-image-top pt-5">
                                <div class="overview-top-image item">
                                    <img src="{{asset('frontend')}}/assets/images/project/project-1.jpg" alt="img"> </div>
                                <div class="overview-top-image item">
                                    <img src="{{asset('frontend')}}/assets/images/project/project-2.jpg" alt="img"> </div>
                            </div>
                            <div class="overview-image-bottom item">
                                <img src="{{asset('frontend')}}/assets/images/project/project-3.jpg" alt="img"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-client-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5 item">
                        <div class="about-client-wrapper">
                            <h2 class="about-client-heading">We Are Always Dedicated And Devoted With Clients.</h2>
                            <p class="about-client-des">There are many variations of passages of Lorem Ipsum available the majority have suffered alteration in some form by injected humour.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="about-client-counter-wrapper">
                            <div class="about-client-counter-item item">
                                <h2>136</h2>
                                <p>Team Member</p>
                            </div>
                            <div class="about-client-counter-item item">
                                <h2>1806</h2>
                                <p>Total Clients</p>
                            </div>
                            <div class="about-client-counter-item item">
                                <h2>1066</h2>
                                <p>Project Done</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 item">
                        <div class="company-overview-wrapper">
                            <h2 class="main-heading m-0 pt-5"> History of the Company </h2>
                            <hr>
                            <p class="text-justify">The Company was founded by Mr. RABI CHOUDHURY, Guwahati-781022, Assam.
                                A young dedicated person with the aspiration to serve the people who
                                initially formed a company named CHOUDHURY SERVICE AGENCY later on
                                converted the company as BCSP SERVICES (OPC) PVT. LTD. and started its
                                journey from Guwahati itself with only with few Nos of employees. At
                                the outset it launched it project in banking sector and bring the banking
                                facilities to very door steps of the people living in rural of INDIA specially
                                for North-East, which makes very easy for the rural people to opt the banking
                                correspondent. With this project a huge job market is created for the educated
                                youths, in the crises period for the job hunters. Expand your business services
                                into recharge, ticket bookings, Banking, Pan card service and Many More Grow revenue,
                                generate new customers and drive footfalls at your store by becoming a
                                PEINDIA DIGITAL SEVA. Also, you can offer multiple services like Mobile recharges,
                                BBPS, AEPS, Airline, Indian Railways Tickets (IRCTC) with a small handheld Micro ATM.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="company-overview-wrapper">
                            <h2 class="main-heading m-0 pt-5">you should know</h2>
                            <hr>
                            <div class="collapse-paneel-wrapper">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Board of Directors :-
                                                    <i class="material-icons">expand_more</i>
                                                </button>

                                            </h5> </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body text-justify"> Being it is ONE PERSON COMPANY , there is no other Board member ,
                                                I am the sole person of the company , but for the continence of service I have a group
                                                of Advisers from different field , such as Business experts, Charters Accounts , and a
                                                group of well trained , educated youths who are experts in their own discipline. After
                                                through discussion and meetings with the teams then finalise. </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Career Opportunities: -
                                                    <i class="material-icons">expand_more</i>
                                                </button>

                                            </h5> </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body text-justify"> As it is mentioned earlier that the main motto of the company it is create job market,
                                                we always give due priorities for the educated youths. we are expanding in different districts of north
                                                east by opening our new franchise where a good number of young boys and girls irrespective of caste,
                                                community and creed getting an ample opportunity to serve and can easily survive as every centre need
                                                two / three employee. Besides when we launch the cab services at the very outset, we will engage not
                                                less 100 Nos of drivers both male and female, to whom we will provide training and make them experts.
                                                Our boys and girls are doing works in NSDL related services, Insurance sectors independently. </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Meetings and Notice: -
                                                    <i class="material-icons">expand_more</i>
                                                </button>

                                            </h5> </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body text-justify"> Whenever are required or permitted to take any action at a meeting, a written
                                                notice (including by email) of the meeting shall be provided to each member including the Franchise
                                                of the company which shall state the place, date, and hour of the meeting, as well as the purpose
                                                or purposes for which the meeting is called. Unless otherwise provided by law, written notice of
                                                any meeting shall be given not less than ten (10) days before the date of the meeting. Accordingly,
                                                the convene, if the situations do not permit, they organise even Zoom /Google meet. The meetings of
                                                the company are presided over by the director of the company; in case of his absence his nominee or
                                                authorised person will conduct the meeting. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <!-- content end -->
@endsection
