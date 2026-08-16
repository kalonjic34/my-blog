<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bunny&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
  </head>
  <body>
<div class="container mx-auto py-10 max-w-2xl">
    <h1 class="text-4xl font-bold mb-6" style="font-family: 'Bunny', sans-serif;">
      My personal blog
    </h1>

    @yield('content')
</div>
  </body>
</html>