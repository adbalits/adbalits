@extends('app')

@section('content')
<div class="splash_container">
<?php
    $color      = \App\Helpers\WelcomeHelper::color();
    $greeting   = \App\Helpers\WelcomeHelper::greeting();
    $url_github = \AB\Globe::githubUrl();
    $url_link   = \AB\Globe::linkedUrl();
    $url_angel  = \AB\Globe::angelUrl();

    $url_about  = approuter()->about()->get();
    $url_books  = approuter()->books()->get();
?>

@if(false)
<div id="splash_portrait" class="square_outer" >
    <div class="square_inner splash_portrait_inner">
    <div class="splash_portrait_dark">
    </div>
    </div>
</div>
@endif

<div class="splash_wrapper">
<div class="splash_inner">
    <div class="splash_hello" style="color:{{ $color }} ">
        {{ $greeting }}
    </div>

    <img class="splash_face" src="images/face.jpg" alt="face.jpg" />

    <div class="footer_icons">
        <a class="footer_icon_anchor" href="{{ $url_github }}" target="_blank">
            <i class="fab fa-github square footer_icon_icon"></i>
        </a>
        <a class="footer_icon_anchor" href="{{ $url_link }}" target="_blank">
            <i class="fab fa-linkedin-in footer_icon_icon"></i>
        </a>
        <a class="footer_icon_anchor" href="{{ $url_angel }}" target="_blank">
            <i class="fab fa-angellist footer_icon_icon"></i>
        </a>
    </div>
</div>
</div>
</div>
<script>
$(document).ready(function(){
    var runWelcome = function(){
        const newGreeting = myApp.randomGreeting();
        const newColor = myApp.randomColor();

        $hello = $('.splash_hello');
        $face  = $('.splash_face');

        // light things back up
        const finishAnimation = () => {
            $hello.text(newGreeting);
            $hello.css('color', newColor);

            $face.animate({
                opacity: 0.90
            }, 1500, 'linear');
            $hello.animate({
                opacity: 1
            }, 1500);
        }

        // dim things
        $face.animate({
            opacity: 0.05
        }, 3000, 'linear');
        $hello.animate({
            opacity: 0,
        }, 3000, null, finishAnimation);
    };

    runWelcome()
    setInterval(runWelcome, 4500);
})
</script>
@stop