<!DOCTYPE html>
<html>
<head>
    <title>Edit Bunga</title>
</head>
<body>
    <h1>Edit Bunga</h1>
    <form method="post" action="/bunga/update/<?= $bunga['id_bunga'] ?>">
        <label>ID Anggota</label><br>
        <input type="text" name="id_anggota" value="<?= $bunga['id_anggota'] ?>"><br>
        <label>Jumlah Pinjaman</label><br>
        <input type="text" name="jumlah_pinjaman" value="<?= $bunga['jumlah_pinjaman'] ?>"><br>
        <label>Tanggal Pinjaman</label><br>
        <input type="date" name="tanggal_pinjaman" value="<?= $bunga['tanggal_pinjaman'] ?>"><br>
        <label>Persentase Bunga</label><br>
        <input type="text" name="persentase_bunga" value="<?= $bunga['persentase_bunga'] ?>"><br>
        <label>Jumlah Bunga</label><br>
        <input type="text" name="jumlah_bunga" value="<?= $bunga['jumlah_bunga'] ?>"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
