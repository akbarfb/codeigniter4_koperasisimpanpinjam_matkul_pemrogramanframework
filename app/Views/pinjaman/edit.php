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
        <h2>Edit Pinjaman</h2>
        <form method="post" action="/pinjaman/update/<?= $pinjaman['id_pinjaman']; ?>">
            <div class="form-group">
                <label for="id_anggota">ID Anggota</label>
                <input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?= $pinjaman['id_anggota']; ?>" required>
            </div>
            <div class="form-group">
                <label for="jumlah_pinjaman">Jumlah Pinjaman</label>
                <input type="text" class="form-control" id="jumlah_pinjaman" name="jumlah_pinjaman" value="<?= $pinjaman['jumlah_pinjaman']; ?>">
            </div>
            <div class="form-group">
                <label for="tanggal_pinjaman">Tanggal Pinjaman</label>
                <input type="date" class="form-control" id="tanggal_pinjaman" name="tanggal_pinjaman" value="<?= $pinjaman['tanggal_pinjaman']; ?>">
            </div>
            <div class="form-group">
                <label for="tanggal_pinjaman">Tenor</label>
                <input type="date" class="form-control" id="tenor" name="tenor" value="<?= $pinjaman['tenor']; ?>">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control">
                    <option value="approved" <?= $pinjaman['status'] == 'approved' ? 'selected' : '' ?>>Disetujui</option>
                    <option value="rejected" <?= $pinjaman['status'] == 'rejected' ? 'selected' : '' ?>>Ditolak</option>
                    <option value="pending" <?= $pinjaman['status'] == 'pending' ? 'selected' : '' ?>>Ditunda</option>
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