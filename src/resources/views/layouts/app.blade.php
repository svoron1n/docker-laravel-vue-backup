<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title-block')</title>
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

<div id="app">
  @include('inc.header')

  @if (Request::is('/'))
    @include('inc.hero')
  @endif

  <div class="container mt-5">
    @include('inc.messages')
    <div class="row">
      <div class="col-8">
        @yield('content')
      </div>
      <div class="col-4">
        @include('inc.aside')
      </div>
    </div>
    @include('inc.footer')
  </div>
</div>

</body>
</html>
