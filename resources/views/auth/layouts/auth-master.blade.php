<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
     @include('auth.layouts.head-tag')
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('{{ asset('assets/auth/images/bg-03.jpg') }}');">
        <div class="wrap-login100">
            @yield('content')
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

@include('auth.layouts.scripts')

</body>
</html>
