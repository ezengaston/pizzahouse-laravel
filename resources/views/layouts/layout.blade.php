<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PizzaHouse</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/sass/main.scss', 'resources/js/app.js'])
        <link href="/css/main.css" rel="stylesheet">\
    </head>
    <body>

      @yield('content')

      <footer>
        <p>Copyright 2020 Pizza House</p>
      </footer>
    </body>
</html>