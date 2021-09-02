<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body>
<form method="POST" action="{{route('client-login')}}">
    @csrf
    <h1>User</h1>
    <input type="email" name="email" placeholder="Nhập email">
    <input type="password" name="password" placeholder="Nhập mật khẩu">
    <button type="submit">Đăng nhập</button>
</form>
</body>
</html>
