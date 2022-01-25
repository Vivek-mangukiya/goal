@extends('layouts.admin')
@section('title')
    Pages | header
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
                        <h4 class="mb-0 font-size-18">Footer</h4>

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
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Footer start -->
                            <footer>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="about-footer">
                                                <a href="javascript:void(0)"><img
                                                        src="{{ logoWhite() }}"
                                                        alt="Logo"></a>
                                                        <input id="white-logo" type="file" accept="image/*" id="logo-input">
                                                <p class="description">
                                                    <textarea class="metedata" data-key="footer_text" cols="30" rows="10">{{footerText()}}</textarea>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="contact-footer">
                                                <h2 class="title">Contact us</h2>
                                                <p class="description">
                                                    <textarea class="metadata" id="addres" data-key="address" cols="30" rows="10">{{address()}}</textarea>
                                                </p>
                                                <p class="description">
                                                    <input id="email" type="email" class="metadata" data-key="email" value="{{email()}}">
                                                </p>
                                                <input type="text" class="metadata" data-key="phone" id="phone" value="{{contact()}}">
                                                <ul class="social-ico-wrap">
                                                    <li><a href="javascript:void(0)"><img
                                                                src="{{ asset('storage/app/public/frontassests/images/facebook.svg') }}"
                                                                alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0)"><img
                                                                src="{{ asset('storage/app/public/frontassests/images/linkedin.svg') }}"
                                                                alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0)"><img
                                                                src="{{ asset('storage/app/public/frontassests/images/instagram.svg') }}"
                                                                alt="Icon"></a></li>
                                                    <li><a href="javascript:void(0)"><img
                                                                src="{{ asset('storage/app/public/frontassests/images/twitter.svg') }}"
                                                                alt="Icon"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3 col-lg-2">
                                            <div class="links-footer">
                                                <h2 class="title">Useful links</h2>
                                                <ul>
                                                    <li><a href="javascript:void(0)">> Services</a></li>
                                                    <li><a href="javascript:void(0)">> Projects</a></li>
                                                    <li><a href="javascript:void(0)">> Training </a></li>
                                                    <li><a href="javascript:void(0)">> Our company</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-lg-3">
                                            <div class="newsletter">
                                                <h2 class="title">We are open</h2>
                                                <p class="description">
                                                    <textarea class="metadata" id="addres" data-key="open_time">{{openTime()}}</textarea>
                                                </p>
                                                <h2 class="title">Subscribe to newsletter</h2>
                                                <form action="">
                                                    <div class="form-group">
                                                        <input type="text" class="user-input"
                                                            placeholder="Your email address">
                                                        <span class="input-icon"><img
                                                                src="{{ asset('storage/app/public/frontassests/images/email.svg') }}"
                                                                alt="Icon"></span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                            <!-- Footer end -->
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
            <!-- end row -->


            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
@endsection
@section('js')
    <script>
        $("body").on("change", ".metadata", function() {
            UpdateMeta($(this).data('key'), $(this).val());
        });
        $("#white-logo").on("change", function() {
            UpdateMeta("logo_white", $('#white-logo')[0].files[0]);
        })
    </script>
@endsection
