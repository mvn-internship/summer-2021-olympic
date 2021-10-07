@extends('admin.layouts.auth')

@section('authForm')
    @if ($errors->any())
        <h4>{{ $errors->first() }}</h4>
    @endif
    <form class="user" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                aria-describedby="emailHelp" placeholder="Enter Email Address...">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword"
                placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">
            Login
        </button>
        <hr>
        <a href="https://www.google.com" class="btn btn-google btn-user btn-block">
            <i class="fab fa-google fa-fw"></i> Login with Google
        </a>
    </form>
@endsection
