<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('admin/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">

    <style>
        html, body { height: 100%; }
        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
<div class="splash-container">
    <div class="card">
        <div class="card-header text-center">
            <a href="{{ url('/') }}">
                <img class="logo-img w-50" src="{{asset('uploads/setting/logo.png')}}" alt="logo">
            </a>
            <span class="splash-description mt-3">Please enter your user information.</span>
        </div>

        <div class="card-body">

            {{-- Errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <input class="form-control form-control-lg"
                           name="email"
                           type="email"
                           placeholder="Email"
                           value="{{ old('email') }}"
                           autocomplete="off">
                </div>

                <div class="form-group">
                    <input class="form-control form-control-lg"
                           name="password"
                           type="password"
                           placeholder="Password">
                </div>

                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="remember" value="1">
                        <span class="custom-control-label">Remember Me</span>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color: #b51515;border-color: #b51515;">Sign in</button>
            </form>
        </div>
<!-- 
        <div class="card-footer bg-white p-0">
            <div class="card-footer-item card-footer-item-bordered">
                <a href="#" class="footer-link">Create An Account</a>
            </div>
            <div class="card-footer-item card-footer-item-bordered">
                <a href="#" class="footer-link">Forgot Password</a>
            </div>
        </div> -->
    </div>
</div>

<script src="{{ asset('admin/assets/vendor/jquery/jquery-3.3.1.min.js
