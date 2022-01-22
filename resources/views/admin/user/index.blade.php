@extends('layouts.admin')
@section('title')
    User list
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{URL::to('storage/app/public/Adminassets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}"
          rel="stylesheet" type="text/css"/>

    <!-- Responsive datatable examples -->
    <link
        href="{{URL::to('storage/app/public/Adminassets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}"
        rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">User List</h4>
                       <!--  <a class="btn btn-success btn-sm btn-add btn-edit-vendor" data-toggle="modal" data-target="#category" ><i class="fas fa-plus"></i> Create</a> -->
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{URL::to('la-admin/')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">User</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('message'))
                        {!! Session::get('message') !!}
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">


                            <table id="datatable"
                                   class="table table-striped table-bordered dt-responsive nowrap"
                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Profile</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                 @include('admin.user.userList')
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>





@endsection
@section('js')
    <!-- Required datatable js -->
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

    <script
        src="{{URL::to('storage/app/public/Adminassets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::to('storage/app/public/Adminassets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
     <script src="{{URL::to('storage/app/public/Adminassets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script
        src="{{URL::to('storage/app/public/Adminassets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script
        src="{{URL::to('storage/app/public/Adminassets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{URL::to('storage/app/public/Adminassets/js/pages/datatables.init.js')}}"></script>
    <script type="text/javascript">
       $(document).on('click','.status',function(){
           var id = $(this).data('id');
            var ajaxurl = '{{URL::to("admin/seller/status")}}';
           if (confirm('Are you sure you want to change status?')) {
            $.ajax({
                url : ajaxurl,
                type :'POST',
                data :{"id":id},
                 headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                success: function(data){
                  location.reload();
                }
            });
           }
    });

        $(document).on('click','.delete',function(){
            var id = $(this).data('id');
            var ajaxurl = '{{URL::to("admin/user/delete")}}';
          if (confirm('Are you sure you want to delete this?')) {

            $.ajax({
                url : ajaxurl,
                type :'POST',
                data :{"id":id},
                 headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                success: function(data){
                    getcategorylist();
                }

            });
          }
        });


    </script>
@endsection
