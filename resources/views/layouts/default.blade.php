<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
  @include('layouts._header')
  <div class="container">
      <div class="clo-md 10 col-offset-1">
          @yield('content')
          @include('layouts._footer')
      </div>
  </div>

  </body>
</html>
