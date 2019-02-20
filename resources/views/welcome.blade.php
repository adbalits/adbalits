<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('header')
    <body>
        <div class="flex-center position-ref full-height">

            <?php
                $string     = \App\Helpers\WelcomeHelper::welcome();
                $color      = \App\Helpers\WelcomeHelper::color();
                $greeting   = \App\Helpers\WelcomeHelper::greeting();
                $github_url = \AB\Globe::githubUrl();
            ?>
            <div class="content">

                <div class="title m-b-md hello_world" style="color:{{ $color }} ">
                    {{ $greeting }}
                </div>

                <div>
                    {{ $string }}
                </div>

                <div class="footer_icons">
                <a class="github_icon_anchor" href="{{ $github_url }}" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                </div>

            </div>
        </div>
    </body>
</html>
