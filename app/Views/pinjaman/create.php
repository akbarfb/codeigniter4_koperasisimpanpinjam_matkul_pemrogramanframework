<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pinjaman</title>
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
    <div class="container">
        <h2 class="text-center mb-4">Tambah Pinjaman</h2>
        <form method="post" action="/pinjaman/store" onsubmit="setBunga()">
            <div class="form-group">
                <label for="id_anggota">ID Anggota</label>
                <select class="form-control" id="id_anggota" name="id_anggota" required>
                    <?php foreach ($anggota as $a) : ?>
                        <option value="<?= $a['id_anggota']; ?>"><?= $a['nama']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah_pinjaman">Jumlah Pinjaman</label>
                <input type="text" class="form-control" id="jumlah_pinjaman" name="jumlah_pinjaman" required>
            </div>
            <div class="form-group">
                <label for="tanggal_pinjaman">Tanggal Pinjaman</label>
                <input type="date" class="form-control" id="tanggal_pinjaman" name="tanggal_pinjaman">
            </div>
            <div class="form-group">
                <label for="tenor">Tenor</label>
                <input type="date" class="form-control" id="tenor" name="tenor">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="approved">Disetujui</option>
                    <option value="rejected">Ditolak</option>
                    <option value="pending">Ditunda</option>
                </select>
            </div>
            <input type="hidden" id="persentase_bunga" name="persentase_bunga">
            <button type="submit" class="btn btn-custom btn-block">Simpan</button>
        </form>
    </div>

    <script>
        function setBunga() {
            const jumlahPinjaman = document.getElementById('jumlah_pinjaman').value;
            let persentaseBunga = 0;

            // Aturan menentukan persentase bunga
            if (jumlahPinjaman <= 5000000) {
                persentaseBunga = 5;
            } else if (jumlahPinjaman <= 10000000) {
                persentaseBunga = 4;
            } else {
                persentaseBunga = 3;
            }

            document.getElementById('persentase_bunga').value = persentaseBunga;
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>