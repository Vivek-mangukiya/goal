@extends('layouts.front')
@section('title', 'Effective REVIT Modelling')
@section('services', 'active')
@section('css')
@endsection
@section('content')
    <div class="main-wrapper">
        <!-- Banner start -->
        <section class="banner">
            <div class="banner-inner">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="banner-text text-center">
                                <div class="heading">
                                    <h2 class="line-clamp-5">Whatever Heating, Ventilation & Air Conditioning
                                        [HVAC] system is right for your building? We prepare
                                        sustainable and reliable HVAC system solutions
                                        tailored to your needs, for maximum comfort at
                                        minimal construction cost.
                                    </h2>
                                    <a href="javascript:void(0)" class="my-button">Request a proposal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner end -->
        <!--  -->
        <section class="service-mechanical section-pt d-block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">
                            <h2 class="my-0">We will prioritize your project's mechanical needs</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mechanical-needs-box d-flex align-items-start">
                                    <div class="mechanical-ico-box mechanical-blue">
                                        <img src="{{frontassets()}}/images/comfort1.svg" class="img-fluid" alt="" />
                                    </div>
                                    <div class="mechanical-need-content">
                                        <h4>Aesthetics concept</h4>
                                        <p>We provide carefully
                                            planned aesthetics especially
                                            in lighting design to make
                                            your project stand out.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mechanical-needs-box d-flex align-items-start">
                                    <div class="mechanical-ico-box mechanical-red">
                                        <img src="{{frontassets()}}/images/energy1.svg" class="img-fluid" alt="" />
                                    </div>
                                    <div class="mechanical-need-content">
                                        <h4>Accurate electrical
                                            capacity & connections
                                        </h4>
                                        <p>Regardless the size of your
                                            project, we determine an
                                            accurate, efficient and effective
                                            power design layout.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mechanical-needs-box d-flex align-items-start">
                                    <div class="mechanical-ico-box mechanical-cream">
                                        <img src="{{frontassets()}}/images/profit1.svg" class="img-fluid" alt="" />
                                    </div>
                                    <div class="mechanical-need-content">
                                        <h4>Low maintenance
                                            cost
                                        </h4>
                                        <p>We introduced energy-
                                            conservative systems
                                            across our projects, you
                                            can be confident your
                                            electrical system isn't over-
                                            using energy, lowering the
                                            costs to maintain.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonial section-mt">
            <div class="container">
                <div class="row">
                    <div class="heading">
                        <h2>Expert mechanical - HVAC engineering services </h2>
                        <p>delivered by qualified Engineers</p>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="expert-mechanical-box">
                            <div class="expert-mechanical-ico">
                                <img src="{{frontassets()}}/images/verified-user1.svg" class="img-fluid" alt="" />
                            </div>
                            <p>40% Faster Turnaround time
                                versus industry practice
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="expert-mechanical-box">
                            <div class="expert-mechanical-ico">
                                <img src="{{frontassets()}}/images/verified-user1.svg" class="img-fluid" alt="" />
                            </div>
                            <p>ZERO project delay, we capture
                                all your needs from onset.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="expert-mechanical-box">
                            <div class="expert-mechanical-ico">
                                <img src="{{frontassets()}}/images/verified-user1.svg" class="img-fluid" alt="" />
                            </div>
                            <p>80% First-Time Approval</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hvac-service-section section-pt">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3 mb-md-0">
                        <div class="heading text-center mb-4 mb-lg-0">
                            <h2 class="my-0">Most Requested Electrical Services</h2>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <ul class="hvac-services-list hvac-services-wrap">
                            <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" /> Air
                                Conditioning System Design </li>
                            <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" /> VRF System
                                Design </li>
                            <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" /> Chiller System
                                Design </li>
                            <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" /> Equipment
                                Sizing </li>
                            <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" /> Ventilation
                                System Design </li>
                            <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" /> Commercial
                                Kitchen Hood Exhaust </li>
                            <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" />Indoor Air
                                Quality Filtration Systems </li>
                        </ul>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <div class="hvac-services-img-box hvac-services-wrap">
                            <img src="{{frontassets()}}/images/small-banner01.png" class="img-fluid img-cover" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonial section-mt">
            <div class="container">
                <div class="row">
                    <div class="heading">
                        <h2>Testimonials</h2>
                        <p>What our clients says</p>
                    </div>
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="text-box">
                                <p>Amet minim mollit non
                                    deserunt ullamco est sit
                                    aliqua dolor do amet sint.
                                    Velit officia consequat duis
                                    enim velit mollit. Exercitation
                                    veniam consequat sunt nostr
                                    ud amet.
                                </p>
                            </div>
                            <div class="heading">
                                <h2>Jane Doe</h2>
                                <p>Location / Position / Company</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="text-box">
                                <p>Amet minim mollit non
                                    deserunt ullamco est sit
                                    aliqua dolor do amet sint.
                                    Velit officia consequat duis
                                    enim velit mollit. Exercitation
                                    veniam consequat sunt nostr
                                    ud amet.
                                </p>
                            </div>
                            <div class="heading">
                                <h2>Jane Doe</h2>
                                <p>Location / Position / Company</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="text-box">
                                <p>Amet minim mollit non
                                    deserunt ullamco est sit
                                    aliqua dolor do amet sint.
                                    Velit officia consequat duis
                                    enim velit mollit. Exercitation
                                    veniam consequat sunt nostr
                                    ud amet.
                                </p>
                            </div>
                            <div class="heading">
                                <h2>Jane Doe</h2>
                                <p>Location / Position / Company</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="text-box">
                                <p>Amet minim mollit non
                                    deserunt ullamco est sit
                                    aliqua dolor do amet sint.
                                    Velit officia consequat duis
                                    enim velit mollit. Exercitation
                                    veniam consequat sunt nostr
                                    ud amet.
                                </p>
                            </div>
                            <div class="heading">
                                <h2>Jane Doe</h2>
                                <p>Location / Position / Company</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="request">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="request-text">
                            <div class="heading text-center">
                                <h2>Request a proposal</h2>
                                <p>Optional – Book a 1:1 With Our Consultants </p>
                                <a href="javascript:void(0)" class="my-button">Request a proposal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
