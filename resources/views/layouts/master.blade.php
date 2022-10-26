<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("img/favicon.png")}}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css")}}">
    @if(app()->isLocale('ar'))
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    @endif
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{ asset("css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="{{ asset("css/themify-icons.css")}}">
    <link rel="stylesheet" href="{{ asset("css/nice-select.css")}}">
    <link rel="stylesheet" href="{{ asset("css/flaticon.css")}}">
    <link rel="stylesheet" href="{{ asset("css/gijgo.css")}}">
    <link rel="stylesheet" href="{{ asset("css/animate.css")}}">
    <link rel="stylesheet" href="{{ asset("css/slicknav.css")}}">
    <link rel="stylesheet" href="{{ asset("css/style.css")}}">
    <link rel="stylesheet" href="{{ asset("css/custom.css")}}">
    <link rel="stylesheet" href="{{ asset("css/Statistic.css")}}">
    <link rel="stylesheet" href="{{ asset("css/faculties.css")}}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @if(app()->isLocale('ar'))
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@600&family=Tajawal:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/rtl-style.css') }}" rel="stylesheet">
    @endif
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    {{-- <link rel="stylesheet" href="{{ asset("css/responsive.css")}}">--}}
</head>

<body>


    <div id="app">
        @includeIf('layouts.header')
        @yield('content')
        @includeIf('layouts.footer')
    </div>

    <!-- JS here -->
    <script src="{{ asset("js/vendor/modernizr-3.5.0.min.js")}}"></script>
    <script src="{{ asset("js/vendor/jquery-1.12.4.min.js")}}"></script>
    <script src="{{ asset("js/popper.min.js")}}"></script>
    <script src="{{ asset("js/bootstrap.min.js")}}"></script>
    <script src="{{ asset("js/owl.carousel.min.js")}}"></script>
    <script src="{{ asset("js/isotope.pkgd.min.js")}}"></script>
    <script src="{{ asset("js/ajax-form.js")}}"></script>
    <script src="{{ asset("js/waypoints.min.js")}}"></script>
    <script src="{{ asset("js/jquery.counterup.min.js")}}"></script>
    <script src="{{ asset("js/imagesloaded.pkgd.min.js")}}"></script>
    <script src="{{ asset("js/scrollIt.js")}}"></script>
    <script src="{{ asset("js/jquery.scrollUp.min.js")}}"></script>
    <script src="{{ asset("js/wow.min.js")}}"></script>
    <script src="{{ asset("js/nice-select.min.js")}}"></script>
    <script src="{{ asset("js/jquery.slicknav.min.js")}}"></script>
    <script src="{{ asset("js/jquery.magnific-popup.min.js")}}"></script>
    <script src="{{ asset("js/plugins.js")}}"></script>
    <script src="{{ asset("js/gijgo.min.js")}}"></script>
    <script src="{{ asset("js/Statistics.js")}}"></script>
    <!--contact js-->
    <script src="{{ asset("js/contact.js")}}"></script>
    <script src="{{ asset("js/jquery.ajaxchimp.min.js")}}"></script>
    <script src="{{ asset("js/jquery.form.js")}}"></script>
    <script src="{{ asset("js/jquery.validate.min.js")}}"></script>
    <script src="{{ asset("js/mail-script.js")}}"></script>

    <script src="{{ asset("js/main.js")}}"></script>
    <script src="{{ asset("js/faculties.js")}}"></script>

</body>

</html>
