<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Simpanan Pokok</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Simpanan Pokok</h2>
        <form method="post" action="/simpanan_pokok/update/<?= $simpanan_pokok['id_simpanan_pokok']; ?>">
            <div class="form-group">
                <label for="id_anggota">ID Anggota</label>
                <select id="id_anggota" name="id_anggota" class="form-control" required>
                    <?php foreach($anggota as $a): ?>
                    <option value="<?= $a['id_anggota']; ?>" <?= ($a['id_anggota'] == $simpanan_pokok['id_anggota']) ? 'selected' : ''; ?>>
                        <?= $a['nama']; ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="text" id="jumlah" name="jumlah" class="form-control" value="<?= $simpanan_pokok['jumlah']; ?>" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" class="form-control" value="<?= $simpanan_pokok['tanggal']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
