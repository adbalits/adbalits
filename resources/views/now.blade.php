@extends('app')

@section('title')
{{ $title }}
@endsection

@section('content')
<?php
    $url_asbury  = 'https://escapebrooklyn.com/guide-asbury-park/';
    $url_sesshin = 'http://coldmountainzen.org/events/sesshin/';
    $url_now     = 'https://nownownow.com/about';

    $url_bro    = 'https://www.researchgate.net/profile/Philip_Balitsky';
    $url_ghent  = 'https://www.ugent.be/en';
    $url_phd    = 'https://www.researchgate.net/publication/334429158_A_Numerical_Investigation_of_the_Array_Effects_of_Wave_Energy_Converters_With_a_Realistic_Power_Take-off_System_Utilizing_a_Coupled_Model_Suite';

    $url_brit   = 'https://www.google.com/search?biw=1440&bih=803&tbm=isch&sa=1&ei=uKiUXeDhJMSc1fAPt8606AM&q=point+de+la+torche&oq=point+de+la+torche&gs_l=img.3..0i30.1161.1581..1787...0.0..0.117.210.1j1......0....1..gws-wiz-img.TGUtI_whgYE&ved=0ahUKEwjgnevb2f3kAhVEThUIHTcnDT0Q4dUDCAY&uact=5';
    $url_basq   = 'https://www.google.com/search?biw=1440&bih=803&tbm=isch&sa=1&ei=6aiUXYLwM5-W1fAPnMGQmA0&q=lafitenia&oq=lafitenia&gs_l=img.3..0l4j0i5i30j0i30l5.5734.5734..5957...0.0..0.100.100.0j1......0....1..gws-wiz-img.ARsgbQsKzBQ&ved=0ahUKEwjCiKnz2f3kAhUfSxUIHZwgBNMQ4dUDCAY&uact=5';
    $url_hoss   = 'https://www.google.com/search?biw=1440&bih=803&tbm=isch&sa=1&ei=qqiUXYvqNrm61fAPwdGeuA4&q=hossegor&oq=hossegor&gs_l=img.3...94126.94253..94445...0.0..0.0.0.......0....1..gws-wiz-img.FlAmdzIVBp8&ved=0ahUKEwiL56bV2f3kAhU5XRUIHcGoB-cQ4dUDCAY&uact=5';
    $url_quick  = 'https://www.hossegor.fr/en/discover/major-events/quiksilver-pro-france/';
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

        For the first time in about five years (since we lived in the Outer Banks), <a href="{{ $url_bro }}">my brother</a> and I have ample time to spend together,

        which for the last few weeks has taken the shape of an extended road/surf trip through Western Europe (mostly France).

        He just finished his <a target="_blank" href="{{ $url_phd}}">PhD thesis</a> on marine engineering at <a href="{{ $url_ghent }}">Ghent University</a>, and I just left my company, which coincindentally means our paths began and ended at about the same pace.

    </p>

    <p>
        So in early September we packed most of his belongings into a Ford Focus hatchback, tied a bike and boards around the shell, and rode off into the sunset from Ghent, Belgium for the coast of France.

        After a quick stopover in Normandy, so far we've spent 10 days or so in <a target="_blank" href="{{ $url_brit }}">Brittany</a>, where we hiked for three days while the ocean was flat and then bunkered down for about a week while the ocean was blown-out and stormy
        
        before giving up and heading to Basque country near <a target="_blank" href="{{ $url_basq }}">Saint-Jean-de-Luz</a> for a few days of damn fine cliffside waves, weather, and camping.

    </p>

    <p>
        Right now we've pushed a little further north for more wilderness and beach breaks (Cap de L'Homy, St. Girons, <a target="_blank" href="{{ $url_hoss }}">Soorts-Hossegor</a>) but pretty soon we'll be joining friends for another round of Basque country,

        and after a few weeks of that I have a ticket back to Newark. Maybe we'll stop by the <a target="_blank" href="{{ $url_quick }}">Quicksilver Pro</a> before we get there.
    </p>

    <p class="ab_text" style="color:white; color: grey;">
        Updated: October 2
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