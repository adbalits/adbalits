<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('header')
    <body>
        <div class="flex-center position-ref full-height">

            <?php
                $string = \App\Helpers\WelcomeHelper::welcome();
                $randomColor = \App\Helpers\WelcomeHelper::color();
            ?>
            <div class="content">

                <div class="title m-b-md hello_world" style="color:{{ $randomColor }} ">
                    Hello
                </div>

                <div>
                    {{ $string }}
                </div>

            </div>
        </div>
    </body>
</html>
