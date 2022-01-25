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
                        <h4 class="mb-0 font-size-18">Header</h4>

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
                            <!-- Header start -->
                            <div class="sub-header">
                                <div class="container">
                                    <div class="sub-header-box">
                                        <ul>
                                            <li>
                                                <img src="{{ asset('storage/app/public/frontassests/images/contact.svg') }}"
                                                    alt="">
                                                <input type="text" class="metadata" data-key="phone" id="phone" value="{{contact()}}">
                                            </li>
                                            <li>
                                                <img src="{{ asset('storage/app/public/frontassests/images/header-email.svg') }}"
                                                    alt="">
                                                    <input id="email" type="email" class="metadata" data-key="email" value="{{email()}}">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <header class="sticky-top">
                                <div class="container">
                                    <nav class="navbar navbar-expand-lg navbar-light">
                                        <a class="navbar-brand" href="javascript:void(0)"><img
                                                src="{{ logo() }}"
                                                alt=""></a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                            <!-- <img class="navbar-toggler-icon" src="{{ asset('storage/app/public/frontassests/images/menu.png') }}" alt=""> -->
                                        </button>
                                        <div class="collapse justify-content-center navbar-collapse" id="navbarNavDropdown">
                                            <ul class="navbar-nav">
                                                <li class="nav-item">
                                                    <input class="nav-link" id="logo" type="file" accept="image/*" id="logo-input">
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </header>
                            <!-- Header End -->
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
        $("body").on("change",".metadata",function(){
            UpdateMeta($(this).data('key'),$(this).val());
        });
        $("#logo").on("change",function(){
            UpdateMeta("logo",$('#logo')[0].files[0]);
        })
    </script>
@endsection
