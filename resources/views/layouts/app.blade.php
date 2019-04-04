<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
  </head>
  <body class="font-sans antialiased text-black leading-tight">
    <div id="app">
      @yield('body')

      <footer class="border-t container mt-8 mx-auto pt-4">
        Site by <a href="https://tighten.co/">Tighten</a>, made in ~20 minutes. More to come, obv. <a href="https://github.com/tightenco/laraveldrivers">GitHub</a>
      </footer>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>
