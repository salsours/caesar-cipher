<html>
<head>
    <title>Login</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #4facfe;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #00c6ff;
        }

        a {
            display: block;
            margin-top: 15px;
            text-decoration: none;
            color: #4facfe;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Login</h2>

        <form action="/dashboard">
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Password" required>

            <button type="submit">Login</button>
        </form>

        <a href="/dashboard">Masuk tanpa login</a>
    </div>
</body>
</html>