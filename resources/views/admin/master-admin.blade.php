<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>پنل مدیریت فروشگاه پریماورا</title>
    <link href='http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:400,700,400italic,700italic&amp;subset=latin,latin-ext,greek' rel='stylesheet' type='text/css'>

    <!-- Twitter Bootstrap -->
    <link href="{{asset('stylesheets/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('stylesheets/responsive.css')}}" rel="stylesheet">
    <!-- Slider Revolution -->
    <link rel="stylesheet" href="{{asset('js/rs-plugin/css/settings.css')}}" type="text/css"/>
    <!-- jQuery UI -->
    <link rel="stylesheet" href="{{asset('js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css')}}" type="text/css"/>
    <!-- PrettyPhoto -->
    <link rel="stylesheet" href="{{asset('js/prettyphoto/css/prettyPhoto.css')}}" type="text/css"/>
    <!-- main styles -->

    <link href="{{asset('stylesheets/main.css')}}" rel="stylesheet">
    <link href="{{asset('rtl.css')}}" rel="stylesheet">
</head>
<body>
<div class="container">
    <nav class="navbar-nav">
        <ul>
            <li><a href="">
                    <span> خوش آمدید</span>
                    <span>{{auth()->user()->name}}</span>
                </a></li>
        </ul>
    </nav>
    {{-- admin menu --}}
    <div class="row col col-xs-2 admin-sidebar">

    </div>
    <div>
        @yield('content')
    </div>
</div>
</body>
</html>