<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Andrew Balitsky</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

        </style>
    </head>
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
