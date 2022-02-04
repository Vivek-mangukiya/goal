<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <title>Goal Admin | Login</title>
     <link rel="shortcut icon" href="{{asset('storage/app/public/Adminassets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('storage/app/public/Adminassets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('storage/app/public/Adminassets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('storage/app/public/Adminassets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <style>
        .error{
            color: red;
        }
    </style>

</head>


 <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p>Sign in to continue to Goal Admin.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{URL::to('public/Adminassets/images/ic_appicon.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{URL::to('public/Adminassets/images/ic_appicon.png')}}" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    @if ($message = Session::get('error'))
                                         <div class="alert alert-danger alert-dismissable margin5">
                                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                             {{ $message }}
                                         </div>
                                     @endif
                                    <form class="form-horizontal" action="{{route('admin.login')}}" method="post" novalidate>
                                    @csrf        
                                        <div class="form-group">
                                            <label for="email">Email-Id</label>
                                            <input type="email" name="email" id="email" class="form-control" required placeholder="Your Email Address" autocomplete="off">
                                                                                  
                                             @if($errors->has('email'))
                                                <span class="error messages">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                
                                        <div class="form-group">
                                            <label for="passowrd">Password</label>
                                            <input type="password" name="password" id="password" class="form-control" required placeholder="Password" autocomplete="off">
                                            @if($errors->has('password'))
                                                <span class="error messages">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                
                                        <div class="custom-control custom-checkbox">
                                           
                                        </div>
                                        
                                        <div class="mt-3">
                                            <input type="submit" name="submit" value="Sign in" class="btn btn-primary btn-block waves-effect waves-light">                                            
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p>© 2020 Crafted with <i class="mdi mdi-heart text-danger"></i> by Goal</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </body>


</html>
