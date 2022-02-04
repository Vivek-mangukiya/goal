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
                                        <input class="form-control" type="file" name="onDemandMEPServices_banner_background" id="logo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">MEP design Banner Text 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['onDemandMEPServices_banner_h2_1'] }}" name="onDemandMEPServices_banner_h2_1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">MEP design Banner Text 2</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['onDemandMEPServices_banner_h2_2'] }}" name="onDemandMEPServices_banner_h2_2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">MEP Bills of Quantities</label>
                                    <div class="col-md-10">
                                        <textarea name="onDemandMEPServices_content_1" id='onDemandMEPServices_content_1'>{{$home['onDemandMEPServices_content_1']}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">MEP Bills of Quantities tab 1 heading</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['onDemandMEPServices_content_2'] }}" name="onDemandMEPServices_content_2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">MEP Bills of Quantities tab 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['onDemandMEPServices_content_3'] }}" name="onDemandMEPServices_content_3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">MEP Bills of Quantities tab 2 heading</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['onDemandMEPServices_content_4'] }}" name="onDemandMEPServices_content_4">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">MEP Bills of Quantities tab 2</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['onDemandMEPServices_content_5'] }}" name="onDemandMEPServices_content_5">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">MEP Bills of Quantities tab 3 heading</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['onDemandMEPServices_content_6'] }}" name="onDemandMEPServices_content_6">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">MEP Bills of Quantities tab 3</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['onDemandMEPServices_content_7'] }}" name="onDemandMEPServices_content_7">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Value Engineering Services</label>
                                    <div class="col-md-10">
                                        <textarea name="onDemandMEPServices_content_8" id='onDemandMEPServices_content_8'>{{$home['onDemandMEPServices_content_8']}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Construction Supervision</label>
                                    <div class="col-md-10">
                                        <textarea name="onDemandMEPServices_content_9" id='onDemandMEPServices_content_9'>{{$home['onDemandMEPServices_content_9']}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Construction Supervision tab 1 heading</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['onDemandMEPServices_content_10'] }}" name="onDemandMEPServices_content_10">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Construction Supervision tab 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['onDemandMEPServices_content_11'] }}" name="onDemandMEPServices_content_11">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Construction Supervision tab 2 heading</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['onDemandMEPServices_content_12'] }}" name="onDemandMEPServices_content_12">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Construction Supervision tab 2</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['onDemandMEPServices_content_13'] }}" name="onDemandMEPServices_content_13">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Construction Supervision tab 3 heading</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['onDemandMEPServices_content_14'] }}" name="onDemandMEPServices_content_14">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Construction Supervision tab 3</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ $home['onDemandMEPServices_content_15'] }}" name="onDemandMEPServices_content_15">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Commissioning Engineering Services</label>
                                    <div class="col-md-10">
                                        <textarea name="onDemandMEPServices_content_16" id='onDemandMEPServices_content_16'>{{$home['onDemandMEPServices_content_16']}}</textarea>
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
        CKEDITOR.replace('onDemandMEPServices_content_16');
        CKEDITOR.replace('onDemandMEPServices_content_9');
        CKEDITOR.replace('onDemandMEPServices_content_1');
        CKEDITOR.replace('onDemandMEPServices_content_8');
    </script>
@endsection
