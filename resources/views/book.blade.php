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
?>
<div class="books_container">
<div class="books_backdrop">
</div>

<div class="container books_page">
<div class="col-10 offset-1 col-xs-12">
    <h1>
        {{ $title }}
    </h1>
    <hr class="short_line" />

    <h4>{{ $author }}</h4>
    <p class="ab_text">
        #todo
    </p>
</div>
</div>

</div>
@endsection