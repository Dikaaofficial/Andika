<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Form Anggota</title>

<style>
body {
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #1e40af, #3b82f6);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.card {
    background: white;
    padding: 40px;
    border-radius: 15px;
    width: 420px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
}

h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #1e40af;
}

input, select, textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: 1px solid #ccc;
}

button {
    width: 100%;
    padding: 12px;
    background: #1e40af;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
}

button:hover {
    background: #1e3a8a;
}

.back {
    display: block;
    text-align: center;
    margin-top: 15px;
    color: #1e40af;
}
</style>
</head>

<body>

<div class="card">
    <h2>Daftar Anggota HMIT</h2>

    <form action="/daftar" method="POST">
        @csrf

        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>NIM</label>
        <input type="text" name="nim" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>No HP</label>
        <input type="text" name="no_hp" required>
<label>Jenis Kelamin</label>
<select name="jenis_kelamin" required>
    <option value="Laki-laki">Laki-laki</option>
    <option value="Perempuan">Perempuan</option>
</select>

        <label>Alasan Bergabung</label>
        <textarea name="alasan"></textarea>

        <button type="submit">Daftar</button>
    </form>

    <a href="/" class="back">⬅ Kembali</a>
</div>

</body>
</html>