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
                        <div class="card-body">

                            <h4 class="card-title">Home Contents</h4>
                            <br>
                            <br>
                            <form action="{{ route('updatePageContent') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Hero background</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="home_banner_background" id="logo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Home Banner Text 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_banner_h3'] }}" name="home_banner_h3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Home Banner Text 2</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_banner_h2'] }}" name="home_banner_h2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Home Banner Text 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_banner_p'] }}" name="home_banner_p">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Home Tab heading 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_tab_heading_1'] }}" name="home_tab_heading_1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Home Tab Text 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_tab_content_1_p'] }}" name="home_tab_content_1_p">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Home Tab heading 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_tab_heading_2'] }}" name="home_tab_heading_2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Home Tab Text 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_tab_content_2_p'] }}" name="home_tab_content_2_p">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Home Tab heading 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_tab_heading_3'] }}" name="home_tab_heading_2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Home Tab Text 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_tab_content_3_p'] }}" name="home_tab_content_3_p">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Portfolio heading</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_portfolio_heading_h2'] }}" name="home_portfolio_heading_h2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Portfolio headind text</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_portfolio_heading_content'] }}" name="home_portfolio_heading_content">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Residential Images</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="home_portfolio_residential_img">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Residential project title</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_portfolio_residential_h2'] }}" name="home_portfolio_residential_h2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Office Images</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="home_portfolio_office_img">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Office project title</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_portfolio_office_h2'] }}" name="home_portfolio_office_h2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Hotel Images</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="home_portfolio_hotel_img">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Hotel project title</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_portfolio_hotel_h2'] }}" name="home_portfolio_hotel_h2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Hospital Images</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="home_portfolio_hospital_img">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Hospital project title</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_portfolio_hospital_h2'] }}" name="home_portfolio_hospital_h2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Factory Images</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="home_portfolio_factory_img">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Factory project title</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_portfolio_factory_h2'] }}" name="home_portfolio_factory_h2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Feature heading</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_feature_heading_h2'] }}" name="home_feature_heading_h2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Feature Icon 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="home_feature_1_img">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Feature Text 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_feature_1_p'] }}" name="home_feature_1_p">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Feature Icon 2</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="home_feature_1_img">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Feature Text 2</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_feature_2_p'] }}" name="home_feature_2_p">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Feature Icon 3</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="home_feature_1_img">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Feature Text 3</label>
                                    <div class="col-md-10"> 
                                        <input class="form-control" type="text" value="{{ $home['home_feature_3_p'] }}" name="home_feature_3_p">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Counter 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="number" value="{{ $home['home_counter_count_1'] }}" name="home_counter_count_1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Counter 1 text</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_counter_p_1'] }}" name="home_counter_p_1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Counter 2</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="number" value="{{ $home['home_counter_count_2'] }}" name="home_counter_count_2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Counter 2 text</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_counter_p_2'] }}" name="home_counter_p_2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Counter 3</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="number" value="{{ $home['home_counter_count_3'] }}" name="home_counter_count_3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Counter 3 text</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_counter_p_3'] }}" name="home_counter_p_3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Training Heading</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_training_h2'] }}" name="home_training_h2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Training text</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['home_training_p'] }}" name="home_training_p">
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
        </div>
        <!-- container-fluid -->
    </div>
@endsection
@section('js')
<script src="{{ asset('storage/app/public/frontassests/js/jquery-v3.0.4.js') }}"></script>
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
