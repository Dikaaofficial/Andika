<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Aspirasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f1f5f9;
        }

        .header {
            background: #1e40af;
            color: white;
            padding: 20px;
            border-radius: 12px;
        }

        .badge-custom {
            background: #0ea5e9;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <div class="header text-center mb-4">
        <h3>Data Aspirasi Mahasiswa</h3>
        <small>Semua aspirasi yang masuk akan ditampilkan di sini</small>
    </div>

    <div class="card shadow-lg">

        <div class="card-body">

            <table class="table table-hover table-bordered align-middle text-center">

                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Topik</th>
                        <th>Isi Aspirasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->nim }}</td>
                        <td>
                            <span class="badge bg-info">
                                {{ $d->topik }}
                            </span>
                        </td>
                        <td class="text-start">{{ $d->isi }}</td>

                        <td>
                            <a href="/aspirasi/edit/{{ $d->id }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/aspirasi/delete/{{ $d->id }}" class="btn btn-danger btn-sm"
                               onclick="return confirm('Yakin hapus?')">
                               Hapus
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>