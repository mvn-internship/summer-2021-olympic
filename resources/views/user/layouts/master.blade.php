<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', '@Master Layout'))</title>

    {{--Styles css common--}}
    <link href="{{ asset('user-common/css/bootstrap/bootstrap.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="{{ asset('user-common/fonts/icomoon/style.css') }}" rel="stylesheet">

    <link href="{{ asset('user-common/css/jquery-ui.css') }}" rel="stylesheet">

    <link href="{{ asset('user-common/css/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('user-common/css/owl.theme.default.min.css') }}" rel="stylesheet">

    <link href="{{ asset('user-common/css/owl.theme.default.min.css') }}" rel="stylesheet">

    <link href="{{ asset('user-common/css/jquery.fancybox.min.css') }}" rel="stylesheet">

    <link href="{{ asset('user-common/css/bootstrap-datepicker.css') }}" rel="stylesheet">

    <link href="{{ asset('user-common/css/aos.css') }}" rel="stylesheet">

    <link href="{{ asset('user-common/css/style.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <link href="{{ asset('user-common/fonts/icomoon/style.css') }}" rel="stylesheet">

    <link href="{{ asset('user-common/fonts/flaticon/font/flaticon.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    @yield('style-libraries')

    {{--Styles custom--}}
    @yield('styles')
</head>
<body>
    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        @include('user.partial.header')

        @yield('content')

        @include('user.partial.footer')

        {{--Scripts js common--}}
        <script src="{{ asset('user-common/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('user-common/js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('user-common/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('user-common/js/popper.min.js') }}"></script>
        <script src="{{ asset('user-common/js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('user-common/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('user-common/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('user-common/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('user-common/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('user-common/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('user-common/js/aos.js') }}"></script>
        <script src="{{ asset('user-common/js/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('user-common/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('user-common/js/jquery.mb.YTPlayer.min.js') }}"></script>

        <script src="{{ asset('user-common/js/main.js') }}"></script>
        {{--Scripts link to file or js custom--}}
        @yield('scripts')

    </div>
    <!-- .site-wrap -->
</body>
</html>