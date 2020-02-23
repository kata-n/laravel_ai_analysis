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
    <!--ヘッダー（共通部分）-->
    @show
    </header>

    <div class="container">
    <!--コンテンツ（共通部分）-->
    @yield('content')
    </div>

    <!--フッター（共通部分）-->
    <footer>
      Copyright©kawamura
    </footer>
  </body>
</html>
