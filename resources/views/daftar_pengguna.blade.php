<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengguna</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fa;
        }
        .card {
            border-radius: 15px;
        }
        h2 {
            font-weight: 600;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <div class="card shadow p-4">
        
        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0">Daftar Pengguna</h2>
            <div>
                <a href="/tambah_pengguna" class="btn btn-primary">+ Tambah</a>
                <a href="/logout" class="btn btn-danger">Logout</a>
            </div>
        </div>

        <!-- ALERT -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- TABLE -->
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->email }}</td>
                    <td>********</td>
                    <td>
                        <a href="/edit/{{ $user->id }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/delete/{{ $user->id }}" 
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin mau hapus?')">
                           Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

</body>
</html>