<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @if (Request::is('home'))
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @elseif (Request::is('category'))
    <link rel="stylesheet" href="{{ asset('css/category.css') }}">
    @elseif (Request::is('detail'))
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    @endif
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->

    <!-- Main content -->
    <main style="padding: 0 16px ; margin-bottom:60px ;">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="app-footer">
        @include('components.footer')
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/content-section.js') }}"></script>
</body>

</html>