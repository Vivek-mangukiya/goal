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
                            <form action="{{ route('updateMeta') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">LOGO</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" name="logo" id="logo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Contact Number</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ contact() }}" name="phone"
                                            id="phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Contact Email</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="{{ email() }}" name="email"
                                            id="email">
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
        // $("body").on("change", ".metadata", function() {
        //     UpdateMeta($(this).data('key'), $(this).val());
        // });
        // $("#logo").on("change", function() {
        //     UpdateMeta("logo", $('#logo')[0].files[0]);
        // })
    </script>
@endsection
