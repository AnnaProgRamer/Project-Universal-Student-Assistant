<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'УПС — Универсальный Помощник Студенту' }}</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Подключаем CSS Animate.css -->
  {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"> --}}

  <!-- Подключаем CSS AOS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- Подключаем JS AOS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</head>
<body>
  @include('header')

  <main>
    @yield('content')
  </main>

  @include('footer')
</body>
</html>