<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('header')
    <body>
        <div class="flex-center position-ref full-height">

            <?php
                $string   = \App\Helpers\WelcomeHelper::welcome();
                $color    = \App\Helpers\WelcomeHelper::color();
                $greeting = \App\Helpers\WelcomeHelper::greeting();
            ?>
            <div class="content">

                <div class="title m-b-md hello_world" style="color:{{ $color }} ">
                    {{ $greeting }}
                </div>

                <div>
                    {{ $string }}
                </div>

                <div class="footer_icons">
                    <i class="fa fa-github"></i>
                </div>

            </div>
        </div>
    </body>
</html>
