<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Aspirasi</title>

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
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        }

        .title {
            font-weight: 700;
            color: #1e40af;
        }
    </style>
</head>

<body>

<div class="card card-form p-4 bg-white">

    <h3 class="text-center title mb-4">Form Aspirasi</h3>

    <form action="/aspirasi/store" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama">
        </div>

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">
        </div>

        <div class="mb-3">
            <label class="form-label">Topik</label>
            <select name="topik" class="form-select">
                <option>Akademik</option>
                <option>Kegiatan</option>
                <option>Fasilitas</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Isi Aspirasi</label>
            <textarea name="isi" class="form-control" rows="4" placeholder="Tulis aspirasi kamu..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100">
            Kirim Aspirasi
        </button>
    </form>

</div>

</body>
</html>