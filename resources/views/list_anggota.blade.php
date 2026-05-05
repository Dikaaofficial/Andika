<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow-lg">

        <div class="card-header bg-primary text-white text-center">
            <h4>Data Anggota</h4>
        </div>

        <div class="card-body">

            <table class="table table-hover table-bordered align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Jenis Kelamin</th>
                        <th>Alasan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->nim }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->no_hp }}</td>
                        <td>
                            <span class="badge bg-info">
                                {{ $d->jenis_kelamin }}
                            </span>
                        </td>
                        <td>{{ $d->alasan }}</td>

                        <td>
                            <a href="/anggota/edit/{{ $d->id }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/anggota/delete/{{ $d->id }}" class="btn btn-danger btn-sm"
                               onclick="return confirm('Yakin hapus data ini?')">
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