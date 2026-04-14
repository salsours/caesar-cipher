<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Pengguna</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>

<div class="container">
    <h2>Edit Pengguna</h2>

    <form method="POST" action="/update/{{ $user->id }}" class="form-box">
        @csrf

        <div class="form-group">
            <input type="email" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
            <input type="text" name="password" value="{{ $user->password }}" required>
        </div>

        <button type="submit" class="btn">Update</button>
    </form>
</div>

</body>
</html>