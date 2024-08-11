<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Anggota</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Hapus Anggota</h2>
        <div class="alert alert-warning">
            Apakah Anda yakin ingin menghapus anggota ini?
        </div>
        <form method="post" action="/anggota/delete/<?= $anggota['id_anggota']; ?>">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" value="<?= $anggota['nama']; ?>" disabled>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" disabled><?= $anggota['alamat']; ?></textarea>
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input type="text" class="form-control" value="<?= $anggota['telepon']; ?>" disabled>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" value="<?= $anggota['email']; ?>" disabled>
            </div>
            <button type="submit" class="btn btn-danger">Hapus</button>
            <a href="/anggota" class="btn btn-secondary">Batal</a>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
