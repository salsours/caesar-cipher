<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pengguna</title>
    <link rel="stylesheet" href="{{ asset('css/tambah.css') }}">
</head>
<body>

<div class="container">
    <h2>Tambah Pengguna</h2>

    <form method="POST" action="/store" class="form-box">
        @csrf

        <div class="form-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="form-group">
            <input type="text" name="password" placeholder="Password" required>
        </div>

        <button type="submit" class="btn">Simpan</button>
    </form>
</div>

</body>
</html>