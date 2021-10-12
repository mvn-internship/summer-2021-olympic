@extends('admin.layouts.auth')

@section('authForm')
    @if (session('error'))
        <div class="card mb-4 border-bottom-danger">
            <div class="card-body">
                {{ session('error') }}
            </div>
        </div>
    @endif

    <form class="user" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp"
                placeholder="Enter Email Address..." value="{{ old('email') }}">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control form-control-user" id="password"
                placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">
            {{ __('label.auth.login') }}
        </button>
        <hr>
        <a href="#" class="btn btn-google btn-user btn-block">
            <i class="fab fa-google fa-fw"></i> {{ __('label.auth.login-gg') }}
        </a>

    </form>
@endsection
