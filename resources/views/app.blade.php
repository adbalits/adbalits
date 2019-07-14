<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.head')

<body>
<div class="app_container">
<script src="{{ asset('js/app.js') }}" charset="utf-8"></script>

    @include('partials.navbar')

    <div class="screen_container">
        @yield('content')
    </div>
</div>
</body>

</html>
