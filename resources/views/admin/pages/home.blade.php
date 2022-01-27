@extends('layouts.admin')
@section('title')
    Pages | Home
@endsection
@section('css')
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Home</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                {{-- <li class="breadcrumb-item active">Welcome to Dashboard</li> --}}
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="car-body">
                            <div class="main-wrapper">
                                <!-- Banner start -->
                                <section class="banner">
                                    <div class="banner-inner"
                                        style="background: url('{{ asset('storage/app/public/frontassests/images/' . $home['home_banner_background']) }}');background-repeat: no-repeat;">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-10">
                                                    <div class="banner-text text-center">
                                                        <div class="heading">
                                                            <h3 contenteditable data-key="home_banner_h3"
                                                                class="editable">{{ $home['home_banner_h3'] }}</h3>
                                                            <h2 class="editable" contenteditable
                                                                data-key="home_banner_h2">{{ $home['home_banner_h2'] }}
                                                            </h2>
                                                            <p class="editable" contenteditable
                                                                data-key="home_banner_p">{{ $home['home_banner_p'] }}</p>
                                                            <a href="javascript:void(0)" class="my-button editable"
                                                                contenteditable
                                                                data-key="home_banner_a">{{ $home['home_banner_a'] }}</a><br>
                                                            <div class="my-button" style="margin-top: 20px;">
                                                                <p>Change Background</p>
                                                                <input type="file" name="home_banner_background">
                                                            </div>
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
                                                <button class="nav-link active editable" id="home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                                    aria-selected="true" contenteditable
                                                    data-key="home_tab_heading_1">{{ $home['home_tab_heading_1'] }}</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link editable" id="profile-tab" data-bs-toggle="tab"
                                                    data-bs-target="#profile" type="button" role="tab"
                                                    aria-controls="profile" aria-selected="false" contenteditable
                                                    data-key="home_tab_heading_2">{{ $home['home_tab_heading_2'] }}</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link editable" id="contact-tab" data-bs-toggle="tab"
                                                    data-bs-target="#contact" type="button" role="tab"
                                                    aria-controls="contact" aria-selected="false" contenteditable
                                                    data-key="home_tab_heading_3">{{ $home['home_tab_heading_3'] }}</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                aria-labelledby="home-tab">
                                                <div class="heading text-center">
                                                    <h2>{{ $home['home_tab_heading_1'] }}</h2>
                                                    <p contenteditable data-key="home_tab_content_1_p"
                                                        class="editable">{{ $home['home_tab_content_1_p'] }}</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel"
                                                aria-labelledby="profile-tab">
                                                <div class="heading text-center">
                                                    <h2>{{ $home['home_tab_heading_2'] }}</h2>
                                                    <p contenteditable data-key="home_tab_content_2_p"
                                                        class="editable">{{ $home['home_tab_content_1_p'] }}</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="contact" role="tabpanel"
                                                aria-labelledby="contact-tab">
                                                <div class="heading text-center">
                                                    <h2>{{ $home['home_tab_heading_3'] }}</h2>
                                                    <p contenteditable data-key="home_tab_content_3_p"
                                                        class="editable">{{ $home['home_tab_content_1_p'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="portfolio section">
                                    <div class="container">
                                        <div class="heading">
                                            <h2 contenteditable data-key="home_portfolio_heading_h2" class="editable">
                                                {{ $home['home_portfolio_heading_h2'] }}</h2>
                                            <p class="gray-txt-color editable" contenteditable
                                                data-key="home_portfolio_heading_content">
                                                {{ $home['home_portfolio_heading_content'] }}</p>
                                        </div>
                                        <div class="filters">
                                            <ul>
                                                <li class="active" data-filter="*">All work</li>
                                                <li data-filter=".residential">Residential</li>
                                                <li data-filter=".office">Office space</li>
                                                <li data-filter=".hotel">Hotel</li>
                                                <li data-filter=".hospital">Hospital</li>
                                                <li class="m-0" data-filter=".factory">Factory</li>
                                            </ul>
                                        </div>
                                        <div class="filters-content">
                                            <div class="row grid">
                                                <div class="col-sm-4 all residential">
                                                    <div class="item">
                                                        <div class="main">
                                                            <img src="{{ asset('storage/app/public/frontassests/images/'. $home['home_portfolio_residential_img']) }}"
                                                                alt="">
                                                            <div class="portfolio-hoover-box">
                                                                <h2 contenteditable data-key="home_portfolio_residential_h2"
                                                                    class="editable">
                                                                    {{ $home['home_portfolio_residential_h2'] }}</h2>
                                                                <a href="javascript:void(0)" class="my-button">Learn
                                                                    more</a>
                                                                <input type="file" name="home_portfolio_residential_img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 all factory">
                                                    <div class="item">
                                                        <div class="main">
                                                            <img src="{{ asset('storage/app/public/frontassests/images/'. $home['home_portfolio_factory_img']) }}"
                                                                alt="">
                                                            <div class="portfolio-hoover-box">
                                                                <h2 contenteditable data-key="home_portfolio_factory_h2"
                                                                    class="edditable">
                                                                    {{ $home['home_portfolio_factory_h2'] }}</h2>
                                                                <a href="javascript:void(0)" class="my-button">Learn
                                                                    more</a>
                                                                <input type="file" name="home_portfolio_factory_img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 all office">
                                                    <div class="item">
                                                        <div class="main">
                                                            <img src="{{ asset('storage/app/public/frontassests/images/'.$home['home_portfolio_office_img']) }}"
                                                                alt="">
                                                            <div class="portfolio-hoover-box">
                                                                <h2 contenteditable data-key="home_portfolio_office_h2"
                                                                    class="editable">
                                                                    {{ $home['home_portfolio_office_h2'] }}</h2>
                                                                <a href="javascript:void(0)" class="my-button">Learn
                                                                    more</a>
                                                                <input type="file" name="home_portfolio_office_img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 all hotel">
                                                    <div class="item">
                                                        <div class="main">
                                                            <img src="{{ asset('storage/app/public/frontassests/images/'.$home['home_portfolio_hotel_img']) }}"
                                                                alt="">
                                                            <div class="portfolio-hoover-box">
                                                                <h2 contenteditable data-key="home_portfolio_hote_h2"
                                                                    class="editable">
                                                                    {{ $home['home_portfolio_hote_h2'] }}</h2>
                                                                <a href="javascript:void(0)" class="my-button">Learn
                                                                    more</a>
                                                                <input type="file" name="home_portfolio_hotel_img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 all hospital">
                                                    <div class="item">
                                                        <div class="main">
                                                            <img src="{{ asset('storage/app/public/frontassests/images/'.$home['home_portfolio_hospital_img']) }}"
                                                                alt="">
                                                            <div class="portfolio-hoover-box">
                                                                <h2 contenteditable data-key="home_portfolio_hospital_h2"
                                                                    class="editable">
                                                                    {{ $home['home_portfolio_hospital_h2'] }}</h2>
                                                                <a href="javascript:void(0)" class="my-button">Learn
                                                                    more</a>
                                                                <input type="file" name="home_portfolio_hospital_img">
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
                                            <h2 class="text-center mt-0 editable" contenteditable
                                                data-key="home_feature_heading_h2">{{ $home['home_feature_heading_h2'] }}
                                            </h2>
                                        </div>
                                        <div class="feature-box">
                                            <div class="row justify-content-center wow fadeInUp" data-wow-duration="1.5s">
                                                <div class="col-md-4">
                                                    <div class="feature-block">
                                                        <div class="feature-block-details">
                                                            <div class="icon">
                                                                <img src="{{ asset('storage/app/public/frontassests/images/'.$home['home_feature_1_img']) }}"
                                                                    alt="feature">
                                                            </div>
                                                            <p contenteditable data-key="home_feature_1_p"
                                                                class="editable">{{ $home['home_feature_1_p'] }}
                                                            </p>
                                                            <input type="file" name="home_feature_1_img">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="feature-block">
                                                        <div class="feature-block-details align-items-center">
                                                            <div class="icon">
                                                                <img src="{{ asset('storage/app/public/frontassests/images/'.$home['home_feature_2_img']) }}"
                                                                    alt="feature">
                                                            </div>
                                                            <p contenteditable data-key="home_feature_2_p"
                                                                class="editable">{{ $home['home_feature_2_p'] }}
                                                            </p>
                                                            <input type="file" name="home_feature_2_img">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="feature-block">
                                                        <div class="feature-block-details mb-0">
                                                            <div class="icon">
                                                                <img src="{{ asset('storage/app/public/frontassests/images/'.$home['home_feature_3_img']) }}"
                                                                    alt="feature">
                                                            </div>
                                                            <p contenteditable data-key="home_feature_3_p"
                                                                class="editable">{{ $home['home_feature_3_p'] }}
                                                            </p>
                                                            <input type="file" name="home_feature_3_img">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="counter" style="z-index: 1;">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-4 stats">
                                                <div class="counting-box">
                                                    <div class="icon">
                                                        <img src="{{ asset('storage/app/public/frontassests/images/counter-1.svg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="counting-details">
                                                        <div contenteditable data-key="home_counter_count_1"
                                                            class="counting counting-after editable"
                                                            data-count="{{ $home['home_counter_count_1'] }}">
                                                            {{ $home['home_counter_count_1'] }}</div>
                                                        <p contenteditable class="editable"
                                                            data-key="home_counter_p_1">{{ $home['home_counter_p_1'] }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 stats">
                                                <div class="counting-box">
                                                    <div class="icon red">
                                                        <img src="{{ asset('storage/app/public/frontassests/images/counter-2.svg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="counting-details">
                                                        <div class="counting editable" contenteditable
                                                            data-key="home_counter_count_2"
                                                            data-count="{{ $home['home_counter_count_2'] }}">
                                                            {{ $home['home_counter_count_2'] }}+</div>
                                                        <p contenteditable class="editable"
                                                            data-key="home_counter_p_2">{{ $home['home_counter_p_2'] }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 stats">
                                                <div class="counting-box mb-0">
                                                    <div class="icon green">
                                                        <img src="{{ asset('storage/app/public/frontassests/images/counter-3.svg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="counting-details">
                                                        <div class="counting" contenteditable
                                                            data-key="home_counter_count_3"
                                                            data-count="{{ $home['home_counter_count_3'] }}">
                                                            {{ $home['home_counter_count_3'] }}+</div>
                                                        <p contenteditable class="editable"
                                                            data-key="home_counter_p_3">{{ $home['home_counter_p_3'] }}
                                                        </p>
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
                                                        <h2 contenteditable data-key="home_training_h2"
                                                            class="editable">{{ $home['home_training_h2'] }}</h2>
                                                        <p contenteditable data-key="home_training_p"
                                                            class="editable">{{ $home['home_training_p'] }}</p>
                                                        <a href="javascript:void(0)" class="my-button">Join our
                                                            training</a>
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
                                                        <a href="javascript:void(0)" class="my-button">Request a
                                                            proposal</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="car-body">
                            <div style="padding: 25px;">
                                <button type="button" id="save" class="my-button">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
@endsection
@section('js')
    <script>
        $("body").on("click", "#save", function() {
            // UpdateMeta($(this).data('key'), $(this).val());
            // console.log($(this).text());
            var form = new FormData();
            form.append('_token', '{{ csrf_token() }}');
            $(".editable").each(function(val) {
                form.append($(this).data('key'), $(this).text());
            })
            $("input[type='file']").each(function(){
                form.append($(this).attr('name'), $(this)[0].files[0]);
            })
            $.ajax({
                url: "{{ route('updatePageContent') }}",
                method: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: form,
                success: function(data) {
                    window.location.reload();
                },
                error: function(data) {
                    console.log({
                        error: data
                    });
                }
            })
        });
        $("#logo").on("change", function() {
            UpdateMeta("logo", $('#logo')[0].files[0]);
        })
    </script>
@endsection
