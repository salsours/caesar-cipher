<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4fbf6;
        }

        .card {
            border-radius: 12px;
            border: none;
        }

        .card-header {
            background-color: #2ecc71;
            color: white;
            border-radius: 12px 12px 0 0;
        }

        .table thead {
            background-color: #d4efdf;
        }

        .table tbody tr:hover {
            background-color: #ecf9f1;
        }

        .btn-logout {
            background-color: #27ae60;
            color: white;
            border-radius: 8px;
        }

        .btn-logout:hover {
            background-color: #219150;
        }
    </style>
</head>

<body>

<div class="container py-5">

    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Daftar Pengguna</h5>
            <a href="/logout" class="btn btn-logout btn-sm">Logout</a>
        </div>

        <div class="card-body">

            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->email }}</td>
                        <td style="font-size: 12px;">{{ $user->password }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>