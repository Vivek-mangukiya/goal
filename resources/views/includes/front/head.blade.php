<head>
    <title>@yield('title') |  Goal</title>
    <!-- meta tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicon-icon  -->
    <link rel="icon" href="{{URL::to('storage/app/public/Adminassets/image/favicon.ico')}}" type="image/favicon">
    
    @yield('css')
</head>
