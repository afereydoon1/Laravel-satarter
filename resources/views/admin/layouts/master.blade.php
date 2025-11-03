<!doctype html>
<html lang="en" dir="ltr">

<head>
    @include('admin.layouts.head-tag')
    @yield('head-tag')
    <title>@yield('title')</title>
</head>

<body class="layout-dark side-menu overlayScroll">


@include('admin.layouts.header')

<main class="main-content">

    @include('admin.layouts.sidebar')

    <div class="contents">
        <div class="container-fluid">

              @yield('content')

        </div>
    </div>

    @include('admin.layouts.footer')

</main>
<div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
</div>
<div class="overlay-dark-sidebar"></div>

@include('admin.layouts.scripts')
@yield('script')
</body>

</html>

