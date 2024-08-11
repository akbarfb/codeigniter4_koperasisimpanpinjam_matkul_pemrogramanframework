<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pinjaman</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color: #007bff;
            color: #fff;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .form-group label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Angsuran</h2>
        <form method="post" action="/angsuran/update/<?= $angsuran['id_angsuran']; ?>">
            <div class="form-group">
                <label for="id_anggota">ID Anggota</label>
                <input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?= $angsuran['id_anggota']; ?>" required>
            </div>
            <div class="form-group">
                <label for="jumlah_pinjaman">Jumlah Angsuran</label>
                <input type="text" class="form-control" id="jumlah_angsuran" name="jumlah_angsuran" value="<?= $angsuran['jumlah_angsuran']; ?>">
            </div>
            <div class="form-group">
                <label for="tanggal_pinjaman">Tanggal Bayar</label>
                <input type="date" class="form-control" id="tanggal_bayar" name="tanggal_bayar" value="<?= $angsuran['tanggal_bayar']; ?>">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control">
                    <option value="dibayar" <?= $angsuran['status'] == 'dibayar' ? 'selected' : '' ?>>Dibayar</option>
                    <option value="tertunda" <?= $angsuran['status'] == 'tertunda' ? 'selected' : '' ?>>Tertunda</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>