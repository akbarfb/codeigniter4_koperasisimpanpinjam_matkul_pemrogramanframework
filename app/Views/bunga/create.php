<!DOCTYPE html>
<html>
<head>
    <title>Tambah Bunga</title>
</head>
<body>
    <h1>Tambah Bunga</h1>
    <form method="post" action="/bunga/store">
        <label>ID Anggota</label><br>
        <input type="text" name="id_anggota"><br>
        <label>Jumlah Pinjaman</label><br>
        <input type="text" name="jumlah_pinjaman"><br>
        <label>Tanggal Pinjaman</label><br>
        <input type="date" name="tanggal_pinjaman"><br>
        <label>Persentase Bunga</label><br>
        <input type="text" name="persentase_bunga"><br>
        <label>Jumlah Bunga</label><br>
        <input type="text" name="jumlah_bunga"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
