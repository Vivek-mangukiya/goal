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
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Header Contents</h4>
                            <br>
                            <br>
                            <form action="{{ route('updatePageContent') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Hero Background</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="servicesElectrical_banner_background" id="logo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Services Electrical Banner Text 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['servicesElectrical_banner_h2_1'] }}" name="servicesElectrical_banner_h2_1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Services Electrical Content heading</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="servicesElectrical_content_1" id='servicesElectrical_content_1' value="{{$home['servicesElectrical_content_1']}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Services Electrical tab 1 heading</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['servicesElectrical_content_2'] }}" name="servicesElectrical_content_2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Services Electrical tab 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['servicesElectrical_content_3'] }}" name="servicesElectrical_content_3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Services Electrical tab 2 heading</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['servicesElectrical_content_4'] }}" name="servicesElectrical_content_4">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Services Electrical tab 2</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['servicesElectrical_content_5'] }}" name="servicesElectrical_content_5">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Services Electrical tab 3 heading</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['servicesElectrical_content_6'] }}" name="servicesElectrical_content_6">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Services Electrical tab 3</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['servicesElectrical_content_7'] }}" name="servicesElectrical_content_7">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Expert electrical engineering services</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['servicesElectrical_content_8'] }}" name="servicesElectrical_content_8">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Expert electrical engineering services text</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['servicesElectrical_content_9'] }}" name="servicesElectrical_content_9">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Expert electrical 1</label>
                                    <div class="col-md-10">
                                        <textarea name="servicesElectrical_content_10" id='servicesElectrical_content_10'>{{$home['servicesElectrical_content_10']}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Expert electrical 2</label>
                                    <div class="col-md-10">
                                        <textarea name="servicesElectrical_content_11" id='servicesElectrical_content_11'>{{$home['servicesElectrical_content_11']}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Expert electrical 3</label>
                                    <div class="col-md-10">
                                        <textarea name="servicesElectrical_content_16" id='servicesElectrical_content_16'>{{$home['servicesElectrical_content_16']}}</textarea>
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
    </div>
    <!-- end row -->


    <!-- end row -->
    </div>
    <!-- container-fluid -->
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $(document).on('ready', function() {
            @if (session()->has('status'))
                toastr.success('{{ session()->get('status') }}')
            @endif
        })
    </script>
    <script>
        CKEDITOR.replace('servicesElectrical_content_10');
        CKEDITOR.replace('servicesElectrical_content_11');
        CKEDITOR.replace('servicesElectrical_content_16');
    </script>
@endsection
