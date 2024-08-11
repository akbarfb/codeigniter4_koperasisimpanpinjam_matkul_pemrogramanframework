<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Sidebar Styles */
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
            overflow-y: auto; /* Enable vertical scrolling */
        }

        .sidebar .nav-link {
            color: #fff;
            margin-bottom: 10px;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
        }

        .sidebar .section-title {
            color: #adb5bd;
            padding: 10px 15px;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.05rem;
            border-bottom: 1px solid #495057;
            margin-bottom: 10px;
        }

        .sidebar .dropdown-menu {
            background-color: #343a40; /* Same background as sidebar */
            border: none; /* Remove border */
            border-radius: 5px; /* Rounded corners for dropdown */
        }

        .sidebar .dropdown-item {
            color: #fff; /* Dropdown item text color */
        }

        .sidebar .dropdown-item:hover {
            background-color: #495057; /* Hover effect for dropdown items */
        }

        .main-content {
            margin-left: 250px; /* Adjust for sidebar width */
            padding: 20px;
            background-color: cornflowerblue;
            min-height: 100vh; /* Ensure it takes up full height */
            overflow-x: hidden; /* Prevent horizontal scroll */
            box-sizing: border-box; /* Include padding in width and height */
        }

        /* Custom margin for home link */
        .sidebar .nav-link.home-link {
            margin-top: 40px; 
        }

        .table-container {
            /* Center the table container */
            max-width: 100%;
            margin: 0 auto;
        }

        .table {
            border-radius: 10px; /* Rounded corners */
            overflow: hidden; /* Ensure the corners are rounded */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect */
            border-collapse: collapse; /* Ensure borders are not doubled */
        }

        .table thead th {
            background-color: #343a40; /* Background color for header */
            color: #fff; /* Text color for header */
            border-bottom: 2px solid #dee2e6; /* Border under the header */
        }

        .table tbody td {
            border: 1px solid #dee2e6; /* Border for table cells */
        }

        .table tbody tr:nth-child(odd) {
            background-color: #f9f9f9; /* Alternating row colors */
        }
        /* Custom CSS for Active Link */
        .sidebar .nav-link.active {
            background-color: #495057; /* Background color for active link */
            border-radius: 5px; /* Rounded corners for active link */
            border: 2px solid #007bff; /* Border around active link */
            color: #fff; /* Text color for active link */
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <nav class="sidebar">
        <div class="container-fluid">
            <!-- First Section -->
            <div class="section-title">Main Menu</div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a id="homeLink" class="nav-link" href="home"><i class="fas fa-home"></i> HOME</a>
                </li>
                <li class="nav-item">
                    <a id="anggotaLink" class="nav-link" href="anggota"><i class="fas fa-users"></i> ANGGOTA</a>
                </li>
                <li class="nav-item">
                    <a id="petugasLink" class="nav-link" href="petugas"><i class="fas fa-user-tie"></i> PETUGAS</a>
                </li>
            </ul>

            <!-- Divider -->
            <hr style="border-top: 1px solid #495057; margin: 20px 0;">

            <!-- Second Section -->
            <div class="section-title">SIMPAN</div>
            <ul class="navbar-nav">
                <!-- Dropdown for Simpanan -->
                <li class="nav-item dropdown">
                    <a id="simpananLink" class="nav-link dropdown-toggle" href="#" id="simpananDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-wallet"></i> SIMPANAN
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="simpananDropdown">
                        <li><a id="simpanan_wajib" class="dropdown-item" href="simpanan_wajib"><i class="fas fa-cash-register"></i> SIMPANAN WAJIB</a></li>
                        <li><a id="simpanan_pokok" class="dropdown-item" href="simpanan_pokok"><i class="fas fa-piggy-bank"></i> SIMPANAN POKOK</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a id="transaksiLink" class="nav-link" href="transaksi"><i class="fas fa-exchange-alt"></i> TRANSAKSI</a>
                </li>
                <li class="nav-item">
                    <a id="saldoLink" class="nav-link" href="saldo"><i class="fas fa-credit-card"></i> SALDO</a>
                </li>
            </ul>

            <!-- Divider -->
            <hr style="border-top: 1px solid #495057; margin: 20px 0;">

            <!-- Third Section -->
            <div class="section-title">PINJAM</div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="pinjaman"><i class="fas fa-money-bill-wave"></i> PINJAMAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="angsuran"><i class="fas fa-calendar-alt"></i> ANGSURAN</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <div class="table-container">
            <h2>Daftar Petugas</h2>
            <p>Menyimpan informasi petugas koperasi yang mencatat transaksi.</p>
            <a href="petugas/create" class="btn btn-success mb-3">Tambah Petugas</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Petugas</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Tanggal Masuk</th>
                        <th></th> 
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($petugas)): ?>
                        <?php foreach($petugas as $row): ?>
                            <tr>
                                <td><?= $row['id_petugas']; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['telepon']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['tanggal_masuk']; ?></td>
                                <td>
                                    <a href="petugas/edit/<?= $row['id_petugas']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="petugas/delete/<?= $row['id_petugas']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7">Tidak ada data petugas.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to set active class
            function setActiveLink(id) {
                // Remove active class from all links
                var links = document.querySelectorAll('.sidebar .nav-link');
                links.forEach(function(link) {
                    link.classList.remove('active');
                });

                // Add active class to the clicked link
                var activeLink = document.getElementById(id);
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }

            // Set initial active link based on URL
            var currentPath = window.location.pathname.split('/').pop();
            if (currentPath === 'home') {
                setActiveLink('homeLink');
            } else if (currentPath === 'anggota') {
                setActiveLink('anggotaLink');
            } else if (currentPath === 'petugas') {
                setActiveLink('petugasLink');
            } else if (currentPath === 'transaksi') {
                setActiveLink('transaksiLink');
            } else if (currentPath === 'simpanan_wajib') {
                setActiveLink('simpananLink');
            } else if (currentPath === 'simpanan_pokok') {
                setActiveLink('simpananLink');
            } else if (currentPath === 'saldo') {
                setActiveLink('saldoLink');
            }

            // Add event listeners for links
            var links = document.querySelectorAll('.sidebar .nav-link');
            links.forEach(function(link) {
                link.addEventListener('click', function() {
                    var linkId = this.id;
                    setActiveLink(linkId);
                });
            });
        });
    </script>
</body>
</html>