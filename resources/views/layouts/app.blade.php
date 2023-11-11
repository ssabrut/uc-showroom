<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @stack('addon-style')
  @livewireStyles
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="font-sans antialiased bg-gray-100">
  <div class="min-h-screen">
    @include('layouts.navigation')
    @include('partials.content')


  </div>

  <script>
    feather.replace();
  </script>
  @stack('addon-script')
  @livewireScripts
</body>

</html>
