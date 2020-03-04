<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
      <div class="header">
          <h1>なに食べた？ ヘッダーtest</h1>
      </div>
      @yield('content')
    </body>
</html>