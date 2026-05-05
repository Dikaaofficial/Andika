<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Aspirasi</title>

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

    <h3 class="text-center title mb-4">Edit Aspirasi</h3>

    <form action="/aspirasi/update/{{ $data->id }}" method="POST">
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
            <label class="form-label">Topik</label>
            <select name="topik" class="form-select">
                <option {{ $data->topik == 'Akademik' ? 'selected' : '' }}>Akademik</option>
                <option {{ $data->topik == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                <option {{ $data->topik == 'Fasilitas' ? 'selected' : '' }}>Fasilitas</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Isi Aspirasi</label>
            <textarea name="isi" class="form-control" rows="4">{{ $data->isi }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100">
            Update Aspirasi
        </button>

    </form>

</div>

</body>
</html>