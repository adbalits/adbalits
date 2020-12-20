<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
        $title = isset($title)
            ? sprintf('adbalits | %s', $title)
            : 'adbalits';
    ?>
    <title>{{ $title }}</title>
    <meta name="description" content="The personal website of Andrew Balitsky // Андрей Балицкий // adbalits "/>

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> -->

    <!-- Analytics (Sorry folks, smart ones block this) -->
    @include('partials.googleAnalytics')

    <!-- Stylesheets -->
    <?php
        // see https://stackoverflow.com/questions/15562384/how-to-force-chrome-browser-to-reload-css-file-while-debugging-in-visual-studio
        // $css_file = '/css/app.css'; // google chrome wont reload newest versions
        $css_file = sprintf('/css/app.css?v=%s', time()); // chrome will always load
    ?>
    <link type="text/css" href="{{ asset($css_file) }}" rel="stylesheet">

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="images/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Styles -->
    <style>
        html, body
        {
          background-color: black;
          color: white;
          font-size: 1em;
          /* font-family: 'Nunito', sans-serif; */
          /* font-family: 'Lora', sans-serif; */
          font-family: 'Quattrocento Sans', sans-serif;
          font-weight: 200;
          height: 100vh;
          margin: 0;
          padding: 0;
          width: 100%;
        }
    </style>
</head>
