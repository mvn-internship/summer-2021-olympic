<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partial.head')
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">{{ __('label.auth.welcome') }}</h1>
                                    </div>
                                    @yield('authForm')
                                    <hr>
                                    <div class="text-center">
                                        <a class="small"
                                            href="forgot-password.html">{{ __('label.auth.forgot-password') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.partial.js')
</body>

</html>
