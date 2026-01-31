<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <title>Sistem Transaksi Laundry Asrama</title>

    <style>
        /* Custom Navbar Styling */
        .custom-navbar {
            background: linear-gradient(135deg, #a8c0ff 0%, #3f2b96 100%) !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            padding: 15px 0;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 800;
            color: white !important;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .navbar-brand:hover {
            transform: scale(1.05);
        }

        /* Button Navigation Styling */
        .nav-btn {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.5);
            color: white !important;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .nav-btn:hover {
            background: white;
            color: #3f2b96 !important;
            border-color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(255, 255, 255, 0.4);
        }

        .nav-btn.active {
            background: white;
            color: #3f2b96 !important;
            border-color: white;
        }

        /* Icon styling */
        .nav-btn i {
            margin-right: 5px;
        }

        /* Mobile responsive */
        @media (max-width: 991px) {
            .navbar-nav {
                margin-top: 15px;
            }

            .nav-btn {
                margin-bottom: 10px;
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">
                🧺 Laundry Asrama
            </a>

            <!-- Tombol hamburger untuk mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu navbar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item">
                        <a class="nav-btn <?= $this->uri->segment(1) == '' ? 'active' : ''; ?>" href="<?= base_url(); ?>">
                            <i class="bi bi-house-door-fill"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-btn <?= $this->uri->segment(1) == 'mahasiswa' ? 'active' : ''; ?>" href="<?= base_url('mahasiswa'); ?>">
                            <i class="bi bi-clipboard-data-fill"></i> Data Transaksi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-btn" href="<?= base_url('about'); ?>">
                            <i class="bi bi-info-circle-fill"></i> About

                            <a href="<?= base_url('auth/logout') ?>"
                                class="btn btn-outline-danger rounded-pill px-3 ms-3"
                                onclick="return confirm('Yakin mau logout?')">
                                Logout
                            </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>