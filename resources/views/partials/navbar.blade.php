<?php

    $router      = approuter();
    $route_about = $router->about()->get();
    $url_about   = $router->about()->url();

    $route_books = $router->books()->get();
    $url_books   = $router->books()->url();

    $extraNavStyles = \Request::is('/')
        ? 'background-color: transparent;'
        : 'background-color: transparent;';
?>
<nav id="site_navbar" class="navbar navbar-expand-lg navbar-dark" style="{{ $extraNavStyles }}">
<div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
        adbalits
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

        <li class="nav-item {{ \Request::is($route_about)?'active':'' }}">
            <a class="nav-link" href="{{ $url_about}}">
                About
            </a>
        </li>

        <li class="nav-item {{ \Request::is($route_books)?'active':'' }}">
            <a class="nav-link" href="{{ $url_books }}">
                Books
            </a>
        </li>

        @if(false)
        <li class="nav-item">
            <a class="nav-link" href="{{ '/doesnotexist' }}">
                404
            </a>
        </li>
        @endif
    </ul>
    </div>
</div>
</nav>