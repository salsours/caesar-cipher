<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

<div class="login-box">
    <h2>Login</h2>
    
    @if(session('error'))
    <p style="color:red;">{{ session('error') }}</p>
@endif

    <form action="/login" method="POST">
    @csrf
        <div class="input-group">
            <input type="text" name="username" placeholder="Username" required>
        </div>

        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button type="submit" class="btn">Login</button>
    </form>

</body>
</html>