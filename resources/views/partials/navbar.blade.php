<?php

    $router      = approuter();

    $route_about = $router->about()->route();
    $route_books = $router->books()->route();
    $route_now   = $router->now()->route();

    $url_about   = $router->about()->url();
    $url_books   = $router->books()->url();
    $url_now     = $router->now()->url();

    $extraNavStyles = \Request::is('/')
        ? 'background-color: transparent;'
        : 'background-image: linear-gradient(black, black, black, black, black, rgba(122,122,122,.2));';
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
    <ul class="navbar-nav mr-auto" id="site_navbar_nav">

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

        <li class="nav-item {{ \Request::is($route_now)?'active':'' }}">
            <a class="nav-link" href="{{ $url_now }}">
                Now
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