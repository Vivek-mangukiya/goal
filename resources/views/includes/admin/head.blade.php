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
    <link href="assets/images/favicon.svg" rel="shortcut icon" type="image/x-icon" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- CSS Links -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('storage/app/public/frontassests/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/app/public/frontassests/css/owl.carosuel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/app/public/frontassests/css/owl.theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/app/public/frontassests/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/app/public/frontassests/css/responsive.css') }}" />
    @yield('css')
</head>
