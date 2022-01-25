@extends('layouts.front')
@section('title', 'Detailed MEP Design')
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
                                    <h3>For your detailed</h3>
                                    <h2>Mechanical, Electrical and Plumbing
                                        Design & Engineering Services</h2>
                                    <p>Residential | Office space | Hotel | Hospital | Factory | Estates | School | Sport
                                        Complex </p>
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
                            <h2 class="mt-0">Our MEP design programme of works</h2>
                        </div>
                        <div class="w-100">
                            <ul class="mep-design-list">
                                <li>
                                    <h2>Get your briefing</h2>
                                    <p>We start by understanding your needs while ensuring smooth communication and
                                        information exchange to deliver conceptual designs that
                                        align to your vision of the project.</p>
                                </li>
                                <li>
                                    <h2>Conduct survey and feasibility study on your site</h2>
                                    <p>We carry out detailed studies of the site to supplement the information provided and
                                        conduct appraisals on specific MEP areas. We research
                                        into constraints and opportunities evolving from the location of proposed project to
                                        the physical characteristics of the potential site.</p>
                                </li>
                                <li>
                                    <h2>Define scope of work & fee proposal</h2>
                                    <p>Once we do the feasibility study, we offer you detailed description of the works
                                        required on the project, significant milestones, a Programme
                                        of work with the expected timeframes for delivery with our professional fee
                                        breakdown.</p>
                                </li>
                                <li>
                                    <h2>Deliver preliminary design drawings for your feedback</h2>
                                    <p>Upon agreement between both parties, we deliver a conceptualized design for your
                                        project based on your earlier brief and our preparatory
                                        work, within the stipulated time frame. This is for your review and feedback.</p>
                                </li>
                                <li>
                                    <h2>Deliver comprehensive approval/construction design drawings</h2>
                                    <p>
                                        Here we deliver a comprehensive design that depicts your dream project, for both
                                        construction and authority approval.
                                        Here is what you will get:
                                    <ol class="ps-0">
                                        <li><span>></span> 5 set approval drawing, stamped and sealed by our professional
                                            and COREN certified engineer. This cover:</li>
                                        <li><span>></span> E-copy of the AutoCAD drawing delivered to your mailbox</li>
                                        <li><span>></span> 2 sets construction drawing</li>
                                    </ol>
                                    </p>
                                </li>
                            </ul>
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
