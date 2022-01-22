<head>
    <title>@yield('title') |  Goal</title>
    <!-- meta tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicon-icon  -->
    <link rel="icon" href="{{URL::to('storage/app/public/Adminassets/image/favicon.ico')}}" type="image/favicon">
    
    <!-- Bootstrap Css -->
    <link href="{{asset('storage/app/public/Adminassets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('storage/app/public/Adminassets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('storage/app/public/Adminassets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    @yield('css')
</head>
