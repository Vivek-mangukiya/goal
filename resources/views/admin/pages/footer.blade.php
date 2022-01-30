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
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Footer ssContents</h4>
                            <br>
                            <br>
                            <form action="{{ route('updateMeta') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">LOGO Footer</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="logo_white" id="logo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Footer Content</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" name="footer_text">{{footerText()}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Address</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" name="address">{{address()}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Open Time</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" name="open_time">{{openTime()}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input class="form-control btn-primary" type="submit" value="Save">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
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
        // $("body").on("change", ".metadata", function() {
        //     UpdateMeta($(this).data('key'), $(this).val());
        // });
        // $("#white-logo").on("change", function() {
        //     UpdateMeta("logo_white", $('#white-logo')[0].files[0]);
        // })
    </script>
@endsection
