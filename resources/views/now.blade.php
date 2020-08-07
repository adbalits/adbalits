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
        It's been seven months since my last update, but, for better or worse, not much has changed for me.

        When the pandemic broke out I left my place in Asbury Park NJ and moved back south, first to the Outer Banks (catching waves, not viruses), and now here in Virginia.

        Other than that, I'm still on my sabbatical (just over a year since I left my first venture), still spending most of my good time holed-up and programming

        (glad to see my <a target="_blank" href={{ $url_2020 }}>2020</a> stats are smoking my stats from <a target="_blank" href={{ $url_2019}}>2019</a>),

        still spreading the rest over the usual sports, <a target="_blank" href={{ $url_books }}>reading</a>, instruments.

     </p>


    <div class="now_img_wrapper">
        <img src="{{ $url_2019 }}" class="now_img"/>
    </div>

    <div class="now_img_wrapper">
        <img src="{{ $url_2020 }}" class="now_img"/>
    </div>

     <h4 class="ab_h4">Sabbatical</h4>
     <p class="ab_text">
        It's been a blessing to spend this last year on my own pursuits but now I'm itching to get out of my hobbit hole. First, though, I want to finish this project.

        The plan is to release an iOS application that I've been building since January that serves as the cornerstone of a much bigger thing, which is a comprehensive health, wellness, and productivity self-tracking system that I have been developing since I was 15.

        (Yes, yet another <a target="_blank" href="{{ $url_qs }}">Quantified Self</a>).

        I'll have more to say about it soon enough.

        <br />
        <br />

        What I can say is this: it's been a pretty random walk to get to this point.

        I started in a bit of a fog. After I left my company I wasn't entirely sure what I wanted to do next, wasn't entirely sure what path to follow.

        I started doing a lot of research, trying to survey the landscape of science and technology, trying to assess what skills could lead to what opportunities.

        Ultimately, data science and data visualization seemed like a good bet for me, with an emphasis on web and mobile products.

        <br />
        <br />

        So I set a goal of <a target="_blank" href="{{ $url_ultra }}">ultralearning</a> and decided to upgrade my heavily back-end and PHP-skewed programming chops so that I'd be far more versatile in JavaScript/ES6, TypeScript, React, React Native, and D3.js development as well.

        To supercharge that learning, I decided I would build a digital version of the largely pen-and-paper self-tracking system that I had been keeping for so many years before.

        However, the more I built, the more I wanted to build, one thing led to another, and now I have started the second company in my life (or third, depending on

        <a target="_blank" href="{{ $url_rbc1 }}">how</a>

        <a target="_blank" href="{{ $url_rbc2 }}">we</a>

        <a target="_blank" href="{{ $url_rbc3 }}">count</a>

        <a target="_blank" href="{{ $url_rbc4 }}">this</a>)

        and the very long to-do list at the start of this sabbatical has whittled down at last, but a few things yet remain.

     </p>

     <h4 class="ab_h4">Ahead</h4>
    <p class="ab_text">
        I've been fortunate to cross a lot of life goals from my bucket list but there are two in particular that have been staring me in the face:

        one, to grow my network of professional peers, mentors, colleagues, etc; and two, to work with artificial intelligence.

        For the time being, I'll tighten up my data science and data viz skills, release this product, and we'll see what lies ahead.

    </p>

    <p class="ab_text" style="color:white; color: grey;">
        Updated: August 7
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