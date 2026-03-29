<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <!-- Link ke CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>

<div class="navbar">
    <h1>Dashboard</h1>
    <a href="/login">Logout</a>
</div>

<div class="container">

    <div class="welcome">
        <h2>Selamat Datang 👋</h2>
        <p>Semoga harimu menyenangkan!</p>
    </div>

    <div class="cards">
        <div class="card">
            <h3>Data Cipher</h3>
            <p>Kelola data enkripsi</p>
        </div>

        <div class="card">
            <h3>Encrypt</h3>
            <p>Proses enkripsi data</p>
        </div>

        <div class="card">
            <h3>Decrypt</h3>
            <p>Proses dekripsi data</p>
        </div>
    </div>

</div>

</body>
</html>