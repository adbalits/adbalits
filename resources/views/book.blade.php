@extends('app')

@section('title')
{{ $title }}
@endsection

@section('content')
<?php
    $book   = abbook($book->id);
    $author = $book->author;

    // #todo #cathat #implement book page
    // #todo #cathat #implement book page
    // #todo #cathat #implement book page
    $book_title     = $book->fullTitle();
    $img_filepath   = $book->imgFilepath();
    $hasBottom      = $book->hasBottomLine();
    $bottom_str     = $book->vmBottomLine();

    $hasWik      = isset($book->wik_url) && !empty($book->wik_url);
    $hasAzn      = isset($book->azn_url) && !empty($book->azn_url);
    $hasLinks    = $hasAzn || $hasWik;
    $azn_url     = $book->azn_url;
    $wik_url     = $book->wik_url;
    
?>
<div class="books_container">
<div class="books_backdrop">
</div>

<div class="container books_page">
<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 offset-sm-1 offset-md-1 offset-lg-1 offset-xl-1">

    <h1>
        {{ $title }}
    </h1>
    <h4>
        {{ $author }}
    </h4>
    @if($hasBottom)
    <h5 style="color: grey;">
        {{ $bottom_str }}
    </h5>
    @endif
    <hr class="short_line" style="border-color:grey;"/>

    <div style="display: flex; flex-direction: row;">
    <img class="book_cover" src="{{ $img_filepath }}" alt="{{ $book_title }}" style=""/>
    @if($hasLinks)
    <h6 style="color:grey;font-size:18px;">
        @if($hasAzn)
        <a class="ab_link" href={{ $azn_url}} target="_blank" style="display: block; margin-top: 5px;">
            See on Amazon
        </a>
        @endif

        @if($hasWik)
        <a class="ab_link"  href={{ $wik_url }} target="_blank" style="display: block; margin-top: 5px;">
            See on Wikipedia
        </a>
        @endif
    </h6>
    @endif
    </div>
</div>
</div>

</div>
@endsection