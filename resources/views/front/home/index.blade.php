@extends('layouts.front')
@section('title', 'Home')
@section('home', 'active')
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
                                    <h3>For your detailed</h3>
                                    <h2>Mechanical, Electrical and Plumbing
                                        Design & Engineering Services</h2>
                                    <p>Residential | Office space | Hotel | Hospital | Factory | Estates | School | Sport
                                        Complex </p>
                                    <a href="javascript:void(0)" class="my-button">Request proposal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner end -->
        <section class="tab">
            <div class="container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Engineering</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Academy</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Engipreneurs</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="heading text-center">
                            <h2>Engineering</h2>
                            <p>Cut your construction cost, maximize energy efficiency with our strategic
                                Mechanical, Electrical and Plumbing (MEP) Design and Engineering.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="heading text-center">
                            <h2>Academy</h2>
                            <p>Cut your construction cost, maximize energy efficiency with our strategic
                                Mechanical, Electrical and Plumbing (MEP) Design and Engineering.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="heading text-center">
                            <h2>Engipreneurs</h2>
                            <p>Cut your construction cost, maximize energy efficiency with our strategic
                                Mechanical, Electrical and Plumbing (MEP) Design and Engineering.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="portfolio section">
            <div class="container">
                <div class="heading">
                    <h2>Our projects</h2>
                    <p class="gray-txt-color">Lorem ipsum mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                        Velit officia consequat duis enim velit mollit. Exercitation veniam consequat
                        sunt nostrud amet.</p>
                </div>
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">All work</li>
                        <li data-filter=".residential">Residential</li>
                        <li data-filter=".office">Office space</li>
                        <li data-filter=".hotel">Hotel</li>
                        <li data-filter=".hospital">Hospital</li>
                        <li class="m-0" data-filter=".residential">Factory</li>
                    </ul>
                </div>
                <div class="filters-content">
                    <div class="row grid">
                        <div class="col-sm-4 all residential">
                            <div class="item">
                                <div class="main">
                                    <img src="{{asset('storage/app/public/frontassests/images/project-4.png')}}" alt="">
                                    <div class="portfolio-hoover-box">
                                        <h2>Project title</h2>
                                        <a href="javascript:void(0)" class="my-button">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 all office">
                            <div class="item">
                                <div class="main">
                                    <img src="{{asset('storage/app/public/frontassests/images/project-3.png')}}" alt="">
                                    <div class="portfolio-hoover-box">
                                        <h2>Project title</h2>
                                        <a href="javascript:void(0)" class="my-button">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 all hotel">
                            <div class="item">
                                <div class="main">
                                    <img src="{{asset('storage/app/public/frontassests/images/project-2.png')}}" alt="">
                                    <div class="portfolio-hoover-box">
                                        <h2>Project title</h2>
                                        <a href="javascript:void(0)" class="my-button">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 all hospital">
                            <div class="item">
                                <div class="main">
                                    <img src="{{asset('storage/app/public/frontassests/images/project-1.png')}}" alt="">
                                    <div class="portfolio-hoover-box">
                                        <h2>Project title</h2>
                                        <a href="javascript:void(0)" class="my-button">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="feature-wrapper">
            <div class="container">
                <div class="heading">
                    <h2 class="text-center mt-0">Why choose us for your MEP Enginnering Design</h2>
                </div>
                <div class="feature-box">
                    <div class="row justify-content-center wow fadeInUp" data-wow-duration="1.5s">
                        <div class="col-md-4">
                            <div class="feature-block">
                                <div class="feature-block-details">
                                    <div class="icon">
                                        <img src="{{asset('storage/app/public/frontassests/images/feature-icon.svg')}}" alt="feature">
                                    </div>
                                    <p>Comprehensive and
                                        detailed design</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-block">
                                <div class="feature-block-details align-items-center">
                                    <div class="icon">
                                        <img src="{{asset('storage/app/public/frontassests/images/feature-icon.svg')}}" alt="feature">
                                    </div>
                                    <p>80% first-time approval</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-block">
                                <div class="feature-block-details mb-0">
                                    <div class="icon">
                                        <img src="{{asset('storage/app/public/frontassests/images/feature-icon.svg')}}" alt="feature">
                                    </div>
                                    <p>40% faster turnaround
                                        time versus industry
                                        practice</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="counter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 stats">
                        <div class="counting-box">
                            <div class="icon">
                                <img src="{{asset('storage/app/public/frontassests/images/counter-1.svg')}}" alt="">
                            </div>
                            <div class="counting-details">
                                <div class="counting counting-after" data-count="500">0</div>
                                <p>Happy clients</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 stats">
                        <div class="counting-box">
                            <div class="icon red">
                                <img src="{{asset('storage/app/public/frontassests/images/counter-2.svg')}}" alt="">
                            </div>
                            <div class="counting-details">
                                <div class="counting" data-count="1000">1000+</div>
                                <p>Projects done</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 stats">
                        <div class="counting-box mb-0">
                            <div class="icon green">
                                <img src="{{asset('storage/app/public/frontassests/images/counter-3.svg')}}" alt="">
                            </div>
                            <div class="counting-details">
                                <div class="counting" data-count="50">50+</div>
                                <p>Awesome staff</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="training">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="training-text">
                            <div class="heading text-center">
                                <h2>Training</h2>
                                <p>Upskill yourself with our training videos at Design Goal.</p>
                                <a href="javascript:void(0)" class="my-button">Join our training</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial">
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
                                    ud amet.</p>
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
                                    ud amet.</p>
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
                                    ud amet.</p>
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
                                    ud amet.</p>
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
