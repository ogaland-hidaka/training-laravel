<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- API Token -->
  @if (Auth::check())
  <meta name="api-token" content="{{ Auth::user()->api_token }}">
  @endif
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="app-env" content="{{ config('app.env') }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
  {{-- Viewを展開するjavascriptファイルをcompact引数で受け取る --}}
  <script src="{{ asset('js/'.$js_file) }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/locale/ja.js"></script>

  <style>
    .v-application {
      font-family: 'Noto Sans JP', sans-serif !important;
    }
  </style>
</head>