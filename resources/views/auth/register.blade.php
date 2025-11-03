@extends('auth.layouts.auth-master')

@section('title','login')

@section('content')
    <form action="{{ route('register') }}" class="login100-form validate-form" method="POST">
        @csrf

        <span class="login100-form-logo">
        <i class="zmdi zmdi-landscape"></i>
    </span>

        <span class="login100-form-title p-b-34 p-t-27">
        Register
    </span>

        <!-- Name -->
        <div class="wrap-input100 validate-input" data-validate="Enter name">
            <input class="input100" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
        </div>

        <!-- Email -->
        <div class="wrap-input100 validate-input" data-validate="Enter email">
            <input class="input100" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            <span class="focus-input100" data-placeholder="&#xf15a;"></span>
        </div>

        <!-- Password -->
        <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="password" placeholder="Password" required autocomplete="new-password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
        </div>

        <!-- Confirm Password -->
        <div class="wrap-input100 validate-input" data-validate="Confirm password">
            <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
                Register
            </button>
        </div>

        <div class="text-center p-t-10">
            <a class="txt1" href="{{ route('login') }}">
                Already have an account?
            </a>
        </div>
    </form>

@endsection
