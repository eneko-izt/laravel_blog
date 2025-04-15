<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta
            name="viewport"
            content="with=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0"
        >
        <meta
            http-equiv="X-UA-compatible"
            content="ie=edge"
        >
        <title>Document</title>
    </head>
    <body>
        <h1>My blog post</h1>
        <p>{{$post}}</p>
    </body>
</html>