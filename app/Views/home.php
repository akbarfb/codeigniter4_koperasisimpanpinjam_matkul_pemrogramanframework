<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
    </style>
</head>
<body>
    <!-- Sidebar -->
    <nav class="sidebar">
        <div class="container-fluid">
            <!-- Auth Section -->
            <div class="section-title">Akun</div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="login">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register">
                        <i class="fas fa-user-plus"></i> Daftar
                    </a>
                </li>
            </ul>

            <!-- Main Menu -->
            <div class="section-title">Main Menu</div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link home-link" href="home">
                        <i class="fas fa-home"></i> HOME
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="anggota">
                        <i class="fas fa-users"></i> ANGGOTA
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="petugas">
                        <i class="fas fa-user-tie"></i> PETUGAS
                    </a>
                </li>
            </ul>

            <!-- Other Sections -->
            <hr style="border-top: 1px solid #495057; margin: 20px 0;">
            <div class="section-title">Simpan</div>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="simpananDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-wallet"></i> SIMPANAN
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="simpananDropdown">
                        <li>
                            <a class="dropdown-item" href="simpanan_wajib">
                                <i class="fas fa-cash-register"></i> SIMPANAN WAJIB
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="simpanan_pokok">
                                <i class="fas fa-piggy-bank"></i> SIMPANAN POKOK
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transaksi">
                        <i class="fas fa-exchange-alt"></i> TRANSAKSI
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="saldo">
                        <i class="fas fa-exchange-alt"></i> SALDO
                    </a>
                </li>
            </ul>

            <!-- Other Sections -->
            <hr style="border-top: 1px solid #495057; margin: 20px 0;">
            <div class="section-title">PINJAM</div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="pinjaman">
                        <i class="fas fa-money-bill-wave"></i> PINJAMAN
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="angsuran">
                        <i class="fas fa-calendar-alt"></i> ANGSURAN
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Koperasi Simpan dan Pinjam</h1>
        <p>Koperasi ini dapat melakukan simpan dan dapat melakukan pinjaman.</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
