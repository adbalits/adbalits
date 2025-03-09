@extends('app')

@section('title')
{{ $title }}
@endsection

@section('content')
<?php
    $url_bg             = 'https://www.beatgig.com';
    $url_bro            = 'https://www.researchgate.net/profile/Philip_Balitsky';
    $url_angel          = \Globe::angelUrl();
    $url_github         = \Globe::githubUrl();
    $url_linked         = \Globe::linkedUrl();
    $url_na             = 'https://www.norfolkacademy.org/about';
    $url_outer          = 'https://www.google.com/search?biw=1101&bih=803&tbm=isch&sa=1&ei=wfNjXaXhHo7b5gK8xrzYCA&q=outer+banks&oq=outer+banks&gs_l=img.3..0l10.684.1443..1589...0.0..0.120.999.7j4......0....1..gws-wiz-img.......0i67.vJw0B28vMyM&ved=0ahUKEwjlxa2x5qDkAhWOrVkKHTwjD4sQ4dUDCAY&uact=5';
    $url_quora          = \Globe::quoraUrl();
    $url_yearbook       = url('images/yearbook.jpg');
    $url_valediction    = 'https://bbk12e1-cdn.myschoolcdn.com/ftpimages/233/misc/misc_115913.pdf';
    $url_graduation     = 'https://norfolkacademy.myschoolapp.com/ftpimages/233/download/belfry%20graduation%202012.pdf';
    $url_speech         = 'https://issuu.com/the_academy/docs/na_mag_winter2012_final/4';
    $url_water          = \Globe::waterUrl();
    $url_seed           = 'https://pitchbook.com/profiles/company/229455-82';
    $url_contact        = approuter()->contact();
    $url_utexas         = 'https://www.utexas.edu/';
    $url_utexas_cs      = 'https://www.cs.utexas.edu/';
    $url_utexas_ma      = 'https://www.ma.utexas.edu/';
    $url_qzlabs         = 'https://www.quantizylabs.com';
    $url_qzblog         = 'https://www.medium.com/quantizy';
    $url_grapevine      = 'https://www.grapevine.ai';
    
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
    <div style="display: flex; flex-direction: row; align-items: flex-start;">
        <div style="flex: 1;">
            <!-- <img class="about_face show_xs" src="images/face.jpg" alt="face.jpg"  style="margin-bottom:15px;"/>-->
            <h4>About me</h4>
            <p class="ab_text">
                In a word? I'd say "technolohippyreneur". Expanded, that would be musician, writer, technologist, and startup entrepreneur, although only two of those I've done professionally.
            </p>
        </div>
        <!-- <div class="hide_xs" style="display:none;">
          <img class="about_face" src="images/face.jpg" alt="face.jpg" />
        </div> -->
    </div>

    <h4>Timeline</h4>
    <ul style="padding-left: 15px; display: flex; flex-direction: column-reverse;">
        <li>
            2012, Spring - <a target="_blank" href="{{ $url_yearbook }}">Graduate</a> Norfolk Academy as
            
            <a target="_blank" href="{{ $url_graduation }}">Valedictorian</a>, and snag the annual
            
            <a target="_blank" href="{{ $url_speech }}">speech award</a>
            
            as well. You can read my valedictory address <a target="_blank" href="{{ $url_valediction }}">here</a>, and my other speech <a target="_blank" href="{{ $url_water }}">here</a>.
        </li>
        <li>
            2012, Fall - Attend the 
            
            <a target="_blank" href="{{ $url_utexas }}">University of Texas at Austin</a> 
            
            for three semesters with an Engineering Honors scholarship and dual major in 
            
            <a target="_blank" href="{{ $url_utexas_cs }}">Computer Science</a> 
            
            and 
            
            <a target="_blank" href="{{ $url_utexas_ma }}">Mathematics</a>,
            
            completing about 70% of my credits to graduation with both degrees.
        </li>
        <li>
            2013, Fall - Vagabond. Drop out and begin a year of counter-culture lifestyle: backpacking, couchsurfing, and volunteering on farms and homesteads across 14 different countries.
        </li>
        <li>
            2014, Fall - Sabbatical. Spend the winter in the 
            
            <a target="_blank" href="{{ $url_outer }}">Outer Banks</a>
            
            with my brother and begin teaching myself music, writing, and full stack web development.
        </li>
        <li>
            2015, Summer - Technologist and entrepreneur. Co-found 
            
            <a target="_blank" href="{{ $url_bg }}">BeatGig</a>
            
             as CTO, raise a <a target="_blank" href="{{ $url_seed }}">seed stage investment</a>, and build a music marketplace that ends up featuring world-class performing artists (and partnering with the world's biggest talent agencies).

             On the side I'm writing folk/psychedelic rock for good fun.
        </li>
        <li>
            2019, Summer - Sabbatical. Exit BeatGig and begin a few months of meditation, reading, philosophizing, and surf travel with my brother.
        </li>
        <li>
            2020, Winter - Solo founder and app developer. Build and release
            
            <a target="_blank" href="{{ $url_qzlabs }}">Quantizy</a>, a time-tracker for iOS,
            
             to serve as the cornerstone of my self-tracking system for health and productivity. More on that story
             
             <a target="_blank" href="{{ $url_qzblog }}">here</a>.
        </li>
        <li>
            2021, Spring - Begin working as a software engineer for 
            
            <a target="_blank" href="{{ $url_grapevine }}">Grapevine AI</a>, an artificial intelligence startup headquartered in NYC.
        </li>

        <li>
            2021, Winter - Join <a target="_blank" href="https://www.amazon.com">Amazon</a> as a software engineer at their NYC headquarters.
        </li>

        <li>
            2024, Summer - Sabbatical. Leave Amazon to cure burnout and study AI. Help build <a target="_blank" href="https://www.shrinked.ai">Shrinked.AI</a>.
        </li>
    </ul>

    <hr class="ab_endpage" style="margin-top:35px;"/>

    <h4>Elsewhere</h4>
    <p class="ab_text" style="color:grey;">
        • 
        <a target="_blank" href="{{ $url_linked }}">LinkedIn</a>
        •
        <a target="_blank" href="{{ $url_github }}">GitHub</a>
        •
        <a target="_blank" href="{{ $url_angel }}">AngelList</a>
        •
        <a target="_blank" href="{{ $url_contact }}">Email</a>
        •
    </p>

</div>
</div>

</div>
@endsection