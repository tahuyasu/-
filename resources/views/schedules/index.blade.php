<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Schedule</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body class='antialiased'>
        <h1>Schedule</h1>
        <a href='/schedules/create'>create</a>
        <div class='schedules'>
            @foreach ($schedules as $schedule)
                <div class='schedule'>
                    <a href="/schedules/{{ $schedule->id }}">{{ $schedule->title }}</a>
                    <p class='body'>{{ $schedule->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>{{ $schedules->links() }}</div>
    </body>
</html>