<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Schedule</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class='antialiased'>
        <h1 class='title'>
            {{ $schedule->title }}
        </h1>
        <div class='content'>
            <div class='content__schedule'>
                <h3>main</h3>
                <p>{{ $schedule->body }}</p>    
            </div>
        </div>
        <div class='footer'>
            <a href='/'>戻る</a>
        </div>
    </body>
</html>