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
        {{--Scripts link to file or js custom--}}
        @yield('scripts')

    </div>
    <!-- .site-wrap -->
</body>
</html>