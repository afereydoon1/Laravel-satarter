@extends('auth.layouts.auth-master')

@section('title','login')

@section('content')
    <form action="{{ route('login') }}" class="login100-form validate-form" method="POST">
        @csrf

        <span class="login100-form-logo">
        <i class="zmdi zmdi-landscape"></i>
    </span>

        <span class="login100-form-title p-b-34 p-t-27">
        Log in
    </span>

        <!-- Email -->
        <div class="wrap-input100 validate-input" data-validate="Enter email">
            <input class="input100" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>

            @error('email')
            <span class="text-danger" style="display:block; font-size: 13px; margin-top: 5px;">
                {{ $message }}
            </span>
            @enderror
        </div>

        <!-- Password -->
        <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="password" placeholder="Password" required autocomplete="current-password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>

            @error('password')
            <span class="text-danger" style="display:block; font-size: 13px; margin-top: 5px;">
                {{ $message }}
            </span>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="remember_me" type="checkbox" name="remember">
            <label class="label-checkbox100" for="remember_me">
                Remember me
            </label>
        </div>

        <!-- Submit Button -->
        <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
                Login
            </button>
        </div>

        <!-- Forgot Password -->
        <div class="text-center p-t-10">
            <a class="txt1" href="{{ route('password.request') }}">
                Forgot Password?
            </a>
        </div>
    </form>

@endsection
