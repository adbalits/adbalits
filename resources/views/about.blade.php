@extends('app')

@section('title')
{{ $title }}
@endsection

@section('content')
<?php
    $url_bg = 'https://www.beatgig.com';
    $url_angel = \Globe::angelUrl();
    $url_github = \Globe::githubUrl();
    $url_linked = \Globe::linkedUrl();
    $url_outer = 'https://www.google.com/search?biw=1101&bih=803&tbm=isch&sa=1&ei=wfNjXaXhHo7b5gK8xrzYCA&q=outer+banks&oq=outer+banks&gs_l=img.3..0l10.684.1443..1589...0.0..0.120.999.7j4......0....1..gws-wiz-img.......0i67.vJw0B28vMyM&ved=0ahUKEwjlxa2x5qDkAhWOrVkKHTwjD4sQ4dUDCAY&uact=5';
    $url_quora = \Globe::quoraUrl();
    $url_valediction = 'https://bbk12e1-cdn.myschoolcdn.com/ftpimages/233/misc/misc_115913.pdf';
    $url_speech = 'https://issuu.com/the_academy/docs/na_mag_winter2012_final/4';
    $url_seed = 'https://pitchbook.com/profiles/company/229455-82';
    
?>
<div class="books_container">
<div class="books_backdrop">
</div>

<div class="container books_page">
<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 offset-sm-1 offset-md-1 offset-lg-1 offset-xl-1">
    <h1>
        {{ $title }}
    </h1>
    <hr class="short_line" />

    <h4>About me</h4>
    <p class="ab_text">
        In a word? Technolohippyreneur. Expanded, that would be musician, writer, programmer, and startup entrepreneur.  
    </p>

    <h4>Timeline</h4>
    <ul style="padding-left: 15px">
        <li>
            1993 - Born a Leo.
        </li>
        <li>
            2001 - Enter Norfolk Academy and begin a lifetime of pursuing the Greek ideal: cultivating mind, body, and soul.
        </li>
        <li>
            2012, Spring - Graduate Norfolk Academy as
            
            <a target="_blank" href="{{ $url_valediction }}">Valedictorian</a>, and snag the 
            
            <a target="_blank" href="{{ $url_speech }}">speech award</a>
            
            as well.
        </li>
        <li>
            2012, Fall - Attend the University of Texas at Austin for three semesters with an Engineering Honors scholarship and dual major in Computer Science and Mathematics, completing about 70% of my credits to graduation.
        </li>
        <li>
            2013, Fall - Vagabond. Drop out and begin a year of counter-culture lifestyle: backpacking and volunteering on farms and homesteads across 14 different countries.
        </li>
        <li>
            2014, Fall - Sabbatical. Spend the winter in the 
            
            <a target="_blank" href="{{ $url_outer }}">Outer Banks</a>
            
            with my brother and begin teaching myself music, writing, and full stack web development.
        </li>
        <li>
            2015, Summer - Technologist and entrepreneur. Co-found 
            
            <a target="_blank" href="{{ $url_bg }}">BeatGig</a>
            
             as CTO and help raise a $750,000
            
            <a target="_blank" href="{{ $url_seed }}">seed stage</a>
             
             to build a music marketplace that ends up featuring world-class performing artists (and partnering with the world's biggest music agencies).

             On the side I'm composing, producing, and recording folk/art/psychedelic rock for good fun.
        </li>
        <li>
            2019, Summer - Sabbatical. Exit BeatGig and begin a summer of meditation, reading, learning, and philosophizing.
        </li>
    </ul>

    <h4>Elsewhere</h4>
    <p class="ab_text">
        • 
        <a target="_blank" href="{{ $url_angel }}">AngelList</a>
        •
        <a target="_blank" href="{{ $url_github }}">GitHub</a>
        •
        <a target="_blank" href="{{ $url_linked }}">LinkedIn</a>
        •
        <a target="_blank" href="{{ $url_quora }}">Quora</a>
        •
    </p>

    @if(false)
    <?php 
        // #todo #cathat #implement contact 
        // #todo #cathat #implement contact 
        // #todo #cathat #implement contact 
    ?>  
    <h4>Contact</h4>
    <p class="ab_text">
        #todo
    </p>
    @endif
</div>
</div>

</div>
@endsection