@extends('app')

@section('title')
{{ $title }}
@endsection

@section('content')
<?php
    $url_sesshin = 'http://coldmountainzen.org/events/sesshin/';
    $url_now     = 'https://nownownow.com/about';

    $url_bro    = 'https://www.researchgate.net/profile/Philip_Balitsky';
    $url_ghent  = 'https://www.ugent.be/en';
    $url_phd    = 'https://www.researchgate.net/publication/334429158_A_Numerical_Investigation_of_the_Array_Effects_of_Wave_Energy_Converters_With_a_Realistic_Power_Take-off_System_Utilizing_a_Coupled_Model_Suite';

    $url_brit   = 'https://www.google.com/search?biw=1440&bih=803&tbm=isch&sa=1&ei=uKiUXeDhJMSc1fAPt8606AM&q=point+de+la+torche&oq=point+de+la+torche&gs_l=img.3..0i30.1161.1581..1787...0.0..0.117.210.1j1......0....1..gws-wiz-img.TGUtI_whgYE&ved=0ahUKEwjgnevb2f3kAhVEThUIHTcnDT0Q4dUDCAY&uact=5';
    $url_basq   = 'https://www.google.com/search?biw=1440&bih=803&tbm=isch&sa=1&ei=6aiUXYLwM5-W1fAPnMGQmA0&q=lafitenia&oq=lafitenia&gs_l=img.3..0l4j0i5i30j0i30l5.5734.5734..5957...0.0..0.100.100.0j1......0....1..gws-wiz-img.ARsgbQsKzBQ&ved=0ahUKEwjCiKnz2f3kAhUfSxUIHZwgBNMQ4dUDCAY&uact=5';
    $url_hoss   = 'https://www.google.com/search?biw=1440&bih=803&tbm=isch&sa=1&ei=qqiUXYvqNrm61fAPwdGeuA4&q=hossegor&oq=hossegor&gs_l=img.3...94126.94253..94445...0.0..0.0.0.......0....1..gws-wiz-img.FlAmdzIVBp8&ved=0ahUKEwiL56bV2f3kAhU5XRUIHcGoB-cQ4dUDCAY&uact=5';
    $url_quick  = 'https://www.hossegor.fr/en/discover/major-events/quiksilver-pro-france/';

    // 2020-01-09
    $url_frog   = 'https://www.amazon.com/Eat-That-Frog-Great-Procrastinating/dp/162656941X';
    $url_asbury = 'https://escapebrooklyn.com/guide-asbury-park/';
    $url_su     = 'https://www.youtube.com/playlist?list=PL0E754696F72137EC';
    $url_dsci   = 'https://www.udacity.com/school-of-data-science';
    $url_dviz   = 'https://www.udacity.com/course/data-visualization-and-d3js--ud507';
    $url_pma    = 'https://www.amazon.com/Principles-Mathematical-Analysis-International-Mathematics/dp/007054235X';
    $url_m365   = 'https://web.ma.utexas.edu/academics/courses/syllabi/M365C.php';
?>
<div class="books_container">
<div class="books_backdrop">
</div>

<div class="container books_page">
<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 offset-sm-1 offset-md-1 offset-lg-1 offset-xl-1">
    <h1>
    {{ $title }}
    </h1>
    <hr style="width:20%; border-color: rgba(255,255,255,1); margin-left:0;margin-right: auto; margin-bottom: 15px; margin-top: 15px;"/>

    <h4>What I'm doing now</h4>
    <p class="ab_text">
        After coming back from a long surf/road trip with my brother, since early November I've been splitting my time between <a target="_blank" href={{ $url_asbury }}>New Jersey</a>, Virginia, and the Outer Banks.

        I'm now just a hair past six months into my sabbatical, which means it's past half-time, and so I'm rushing like mad to finish a few projects that I've been aching to undertake for years. 
    </p>

    <p>
        Somebody asked me in November how it was going (my sabbatical). I was a little embarassed to say "not that great," 
        
        at least in a professional sense. I hadn't <a target="_blank" href={{ $url_frog }}>eaten the frog</a> yet, to borrow Brian Tracy's terminology,

        and hadn't yet spent the hours on the heftiest parts of my todo list. True, I could cross "silent retreat" and "surf travel" from my list, but that hardly makes for CV material. 
    </p>

    <p>
        So lately I've tried to set aside every good hour for mathematics and programming, before I'm sucked back into the tech scene this summer. Mathematically, I've been craving some kind of resolution to my first failed encounter with Walter Rudin's <a target="_blank" href="{{ $url_pma }}">Principles of Mathematical Analysis</a> (when I dropped <a target="_blank" href="{{ $url_m365 }}">M365C</a> at UTexas in '13).

        So I've been following a cobbled-together self-study program through the material with the help of Francis Su's spectacular <a target="_blank" href="{{ $url_su }}">lectures</a> on Real Analyis, Rudin's PMA textbook itself, and homework assignments from the class I took. 

        Programatically, I've been itching to kill two birds with one stone by training my <a target="_blank" href="{{ $url_dsci }}">data science</a> / <a target="_blank" href="{{$url_dviz}}">data visualization</a> skills while building a fullstack application for a personal lab experiment, but perhaps more on that later. #researchAndDevelopment
    </p>

    <p class="ab_text" style="color:white; color: grey;">
        Updated: January 9
    </p>

    <hr class="ab_endpage" />
    <!-- <hr style="width:20%; border-color: rgba(122,122,122,.75); margin-left:0;margin-right: auto; margin-bottom: 15px; margin-top: 15px;"/> -->

    <p style="font-size:14px;color: rgba(122,122,122,.75)">
        Part of the <a target="_blank" href="{{ $url_now }}">now</a> movement
    </p>
</div>
</div>

</div>
@endsection