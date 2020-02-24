 <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>技術テストAPI | @yield ('title','')</title>
  </head>
  <body>
    <header>
    @section('header')
      <a href="{{ url('/') }}">API技術テスト</a>
    @show
    </header>

    <div class="container">
    @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/style.js"></script>
    <footer class="footer">
      Test taker：kawamura
    </footer>
  </body>
</html>
