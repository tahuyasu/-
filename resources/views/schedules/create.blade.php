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
        <form action='/schedules' method='SCHEDULE'>
            @csrf
            <div class='title'>
                <h2>Title</h2>
                <input type='text' name=schedule[title] placeholder='タイトル'>
            </div>
            <div class='body'>
                <h2>Body</h2>
                <textarea name='schedule[body]' placeholder='希望シフト'></textarea>
            </div>
            <input type='submit' value='store'>
        </form>
        <div class='footer'>
            <a href='/'>戻る</a>
        </div>
    </body>
</html>