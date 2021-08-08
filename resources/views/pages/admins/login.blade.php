<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FoodBooking | Đăng nhập trang quản trị</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/assets/pages/admin/login.css') }}">
    <!-- JS -->
    <!-- Styles -->

</head>
<body>
<div class="container">
    <div class="form-wrap">
        <div class="logo-icon"></div>
        <form method="post">
            <h3 class="login-title"><span class="bold">FOODBOOKING</span> || Quản lý Cửa Hàng</h3>
            <div class="form-group">
                <input type="email" id="email" class="input w-100" name="email" placeholder="Tài khoản"/>
            </div>
            <div class="form-group">
                <input type="password" id="password" class="input w-100" name="password" placeholder="Mật khẩu"/>
            </div>
            <button type="submit" class="btn w-100">Đăng nhập</button>
            {{ csrf_field() }}
            <p><a href="#">Quên mật khẩu?</a></p>
    </div>
</div>
</body>
</html>
