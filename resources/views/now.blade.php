@extends('app')

@section('title')
{{ $title }}
@endsection

@section('content')
<?php
    $url_asbury = 'https://escapebrooklyn.com/guide-asbury-park/';
    $url_sesshin = 'http://coldmountainzen.org/events/sesshin/';
?>
<div class="books_container">
<div class="books_backdrop">
</div>

<div class="container books_page">
<div class="col-10 offset-1 col-xs-12">
    <h1>
    {{ $title }}
    </h1>
    <hr style="width:20%; border-color: rgba(255,255,255,1); margin-left:0;margin-right: auto; margin-bottom: 15px; margin-top: 15px;"/>

    <h4>What I'm doing now</h4>
    <p class="ab_text">
        Since I exited BeatGig a few months ago, for the first time in just over four years, I finally have the chance to do another sabbatical while staying by a good beach break

         ( <a target="_blank" href="{{ $url_asbury }}">Asbury Park, NJ</a> ). 
        
        As is likely the case with other entrepreneurs who built a company from zero, through a seed stage, and on to stability, I was quite burned out.
        
        So I've spent the summer so far on meditation, reading, learning, and philosophizing.

        It's the greatest pleasure to have free time again, and thankfully I'm in no rush to my next phase. 

        In fact, just last night I came back from my first 

        <a target="_blank" href="{{ $url_sesshin }}">sesshin</a>.
    </p>

    <p class="ab_text" style="color:grey;">
        - August 26
    </p>
</div>
</div>

</div>
@endsection