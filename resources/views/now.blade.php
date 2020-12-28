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
    $url_2020   = url('/images/2020.png');
    $url_2019   = url('/images/2019.png');
    $url_books  = approuter()->books([
        'sortby' => 'latest',
    ])->url();
    $url_qs = 'https://quantifiedself.com/';
    $url_ultra = 'https://www.scotthyoung.com/blog/ultralearning/';
    $url_rbc1 = url('/images/rbc1.jpg');
    $url_rbc2 = url('/images/rbc2.jpg');
    $url_rbc3 = url('/images/rbc3.jpg');
    $url_rbc4 = url('/images/rbc4.jpg');

    // 2020-12-28
    $url_beatgig = 'https://www.beatgig.com';
    $url_qzlabs = 'https://www.quantizylabs.com';
    $url_qzblog = 'https://www.medium.com/quantizy';

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
        Ever since I left my 
        
        <a target="_blank" href={{ $url_beatgig }}>previous company</a>,

        I've been on sabbatical.
        
        After a few months of soul-searching, I decided to supercharge that learning and build me an iOS application which would serve as the cornerstone of a much bigger thing - a comprehensive health, wellness, and productivity self-tracking system that I have been evolving since I was 15.

        Now I can finally say that it's done, it's called 
        
        <a target="_blank" href={{ $url_qzlabs }}>Quantizy</a>,
        
        and you can read more about it on the company
        
        <a target="_blank" href={{ $url_qzblog }}>blog</a>.

     </p>

    <!-- <div class="now_img_wrapper">
        <img src="{{ $url_2019 }}" class="now_img"/>
    </div> -->

    <p class="ab_text" style="color:white; color: grey;">
        Updated: Dec 28 2020
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
