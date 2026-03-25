<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f4f6f9;
        }

        .navbar {
            background: #4facfe;
            color: white;
            padding: 15px;
            font-size: 20px;
        }

        .container {
            padding: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .logout {
            float: right;
            color: white;
            text-decoration: none;
        }

        .logout:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="navbar">
        Dashboard
        <a href="/login" class="logout">Logout</a>
    </div>

    <div class="container">
        <div class="card">
            <h2>Selamat Datang 👋</h2>
            <p>Ini adalah halaman dashboard kamu.</p>
        </div>

        <div class="card">
            <h3>Menu</h3>
            <ul>
                <li>Data Cipher</li>
                <li>Encrypt</li>
                <li>Decrypt</li>
            </ul>
        </div>
    </div>

</body>
</html>