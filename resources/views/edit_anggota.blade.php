<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Anggota</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #1e40af, #3b82f6);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-form {
            width: 100%;
            max-width: 520px;
            border-radius: 18px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.25);
        }

        .title {
            font-weight: 700;
            color: #1e40af;
        }
    </style>
</head>

<body>

<div class="card card-form p-4 bg-white">

    <h3 class="text-center title mb-4">Edit Anggota</h3>

    <form action="/anggota/update/{{ $data->id }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $data->nama }}">
        </div>

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ $data->nim }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $data->email }}">
        </div>

        <div class="mb-3">
    <label class="form-label">No HP</label>
    <input type="text" name="no_hp" class="form-control" value="{{ $data->no_hp }}">
</div>

<div class="mb-3">
    <label class="form-label">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control">
        <option value="Laki-laki" {{ $data->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
        <option value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Alasan</label>
    <textarea name="alasan" class="form-control">{{ $data->alasan }}</textarea>
</div>

        <button type="submit" class="btn btn-primary w-100">
            Update Anggota
        </button>

    </form>

</div>

</body>
</html>