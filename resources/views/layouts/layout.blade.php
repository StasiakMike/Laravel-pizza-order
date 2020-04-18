<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MvdB Pizza Portal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" href="/css/main.css">

    </head>
    <body>

        @yield('content')
        
        <footer class="flex-center m-b-md">
           <p> 2019 &copy; Mike Stasiak & MvdB Software Solutions </p>
        </footer>
    </body>
    </html>