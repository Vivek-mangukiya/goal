@extends('layouts.front')
@section('title', 'Detailed MEP Design')
@section('services', 'active')
@section('css')
@endsection
@section('content')
    <div class="main-wrapper">
        <!-- Banner start -->
        <section class="banner">
            <div class="banner-inner" style="background: url({{frontassets()}}'/images/'{{$home['detailedMEPdesign_banner_background']}});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="banner-text text-center">
                                <div class="heading">
                                    <h3>{{$home['detailedMEPdesign_banner_h3']}}</h3>
                                    <h2>{{$home['detailedMEPdesign_banner_h2']}}</h2>
                                    <p>{{$home['detailedMEPdesign_banner_p']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner end -->
        <!--  -->
        <section class="detailedMEPdesign section-pt d-block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">
                            <h2 class="mt-0">{{$home['detailedMEPdesign_content_heading']}}</h2>
                        </div>
                        <div class="w-100">
                            {!! html_entity_decode($home['detailedMEPdesign_content']) !!}
                        </div>
                        <div class="w-100 program-work-wrap">
                            <div class="program-work-col">
                                <img src="{{asset('storage/app/public/frontassests/images/project-1.png')}}" class="img-fluid img-cover" alt="" />
                                <div class="program-work-content">
                                    <h4>Mechanical page</h4>
                                </div>
                            </div>
                            <div class="program-work-col">
                                <img src="{{asset('storage/app/public/frontassests/images/project-2.png')}}" class="img-fluid img-cover" alt="" />
                                <div class="program-work-content">
                                    <h4>Electrical page</h4>
                                </div>
                            </div>
                            <div class="program-work-col">
                                <img src="{{asset('storage/app/public/frontassests/images/project-3.png')}}" class="img-fluid img-cover" alt="" />
                                <div class="program-work-content">
                                    <h4>Plumbing page</h4>
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
