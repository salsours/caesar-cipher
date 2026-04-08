<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>

<div class="container">

<h2>Login</h2>

@if(session('error'))
    <div class="error">
        {{ session('error') }}
    </div>
@endif

<form action="/login" method="POST">
    @csrf

    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Masukkan email" required>
    </div>

    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan password" required>
    </div>

    <button type="submit">Login</button>
</form>

</div>

</body>
</html>