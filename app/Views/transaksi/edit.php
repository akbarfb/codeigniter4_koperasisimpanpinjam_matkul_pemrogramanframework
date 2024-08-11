<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 20px;
        }
        .container {
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .btn-custom {
            background-color: #007bff;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Edit Transaksi</h2>
        <form method="post" action="/transaksi/update">
            <?= csrf_field(); ?>
            <input type="hidden" name="id_transaksi" value="<?= $transaksi['id_transaksi']; ?>">
            <div class="form-group">
                <label for="id_anggota">ID Anggota</label>
                <select class="form-control" id="id_anggota" name="id_anggota" required>
                    <?php foreach($anggota as $a): ?>
                    <option value="<?= $a['id_anggota']; ?>" <?= $a['id_anggota'] == $transaksi['id_anggota'] ? 'selected' : ''; ?>><?= $a['nama']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="jenis_simpanan">Jenis Simpanan</label>
                <select class="form-control" id="jenis_simpanan" name="jenis_simpanan" required>
                    <option value="simpanan_wajib" <?= $transaksi['jenis_simpanan'] == 'simpanan_wajib' ? 'selected' : ''; ?>>Simpanan Wajib</option>
                    <option value="simpanan_pokok" <?= $transaksi['jenis_simpanan'] == 'simpanan_pokok' ? 'selected' : ''; ?>>Simpanan Pokok</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" step="0.01" value="<?= $transaksi['jumlah']; ?>" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $transaksi['tanggal']; ?>" required>
            </div>
            <button type="submit" class="btn btn-custom btn-block">Update</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
