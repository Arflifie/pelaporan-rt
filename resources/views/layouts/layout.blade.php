<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>testing @yield(section: 'title')</title>
    {{-- font montserrat --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Quicksand:wght@300..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    {{-- tailwindcss --}}
    @vite('resources/css/app.css')

  </head>
  <body class="bg-stone-100 text-gray-800">
    @include('layouts.navregis')
    <div class: container>
      @yield(section: 'content')
    </div>
    <div class="footer">
      @include('layouts.footer')
    </div>
  </body>
</html>