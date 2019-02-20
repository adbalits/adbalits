<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Andrew Balitsky</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


    <!-- Analytics (Sorry folks, smart ones block this) -->
    @include('partials.googleAnalytics')

    <!-- Stylesheets -->
    <?php
        // see https://stackoverflow.com/questions/15562384/how-to-force-chrome-browser-to-reload-css-file-while-debugging-in-visual-studio
        // $css_file = '/css/app.css'; // google chrome wont reload newest versions
        $css_file = sprintf('/css/app.css?v=%s', time()); // chrome will always load
    ?>
    <link href="{{ asset($css_file) }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body
        {
          background-color: black;
          color: white;
          font-family: 'Nunito', sans-serif;
          font-weight: 200;
          height: 100vh;
          margin: 0;
        }
    </style>
</head>