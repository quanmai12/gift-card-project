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
</head>
<body>
    <!-- Header -->

    <!-- Main content -->
    <main style="margin: 20px 16px;">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="app-footer">
        <button class="footer-btn active">Trang chủ</button>
        <button class="footer-btn">Voucher của tôi</button>
        <button class="footer-btn">Tài khoản</button>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>