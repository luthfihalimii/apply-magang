<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Piramidasoft')</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="font-sans text-slate-950 bg-white">
  @include('components.navbar')

  <main>
    @yield('content')
  </main>
</body>
</html>