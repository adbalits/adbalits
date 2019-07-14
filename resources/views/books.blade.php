@extends('app')

@section('title')
About
@endsection

@section('content')
<?php
    $random = array_random([
        'nothing to see here...',
        'look away now...',
        'move along then...',
    ]);

    $url_back = url()->previous();
?>
<div class="books_container">
<div class="books_wrapper">
<div class="books_wrapper_inner">

    <div class="books_content">
    <div class="books_content_inner">
        <h1>
            Books
        </h1>
        <hr class="books_hr"/>

        <h3 class="books_subtitle">#todo</h3>

        <h3 class="books_subtitle2">sometime soon</h3>

    </div>
    </div>

    <a href="{{ $url_back }}" class="books_caption">
        {{ $random }}
    </a>
</div>
</div>
</div>
@endsection