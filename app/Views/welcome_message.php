<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
    <!-- Integrasi Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.02);
        }
        .btn-custom {
            margin-top: 10px;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            padding: 10px;
            background-color: #343a40;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center">Notifikasi</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Pengiriman Notifikasi</h5>
                <p class="card-text">Pilih opsi untuk mengirim notifikasi:</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="<?= base_url('notifikasi/dosen-tidak-masuk/1') ?>" class="btn btn-danger btn-custom">Dosen Tidak Masuk</a>
                    <a href="<?= base_url('notifikasi/dosen-masuk/1') ?>" class="btn btn-success btn-custom">Dosen Masuk</a>
                </div>
            </div>
        </div>
        <!-- Additional Card for More Options -->
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Lainnya</h5>
                <p class="card-text">Opsi lain untuk mengelola notifikasi:</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="<?= base_url('notifikasi/semua-dosen') ?>" class="btn btn-info btn-custom">Semua Dosen</a>
                    <a href="<?= base_url('notifikasi/pengaturan') ?>" class="btn btn-warning btn-custom">Pengaturan</a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Universitas Contoh. All rights reserved.</p>
    </div>

    <!-- Integrasi Bootstrap JS (Optional, jika Anda memerlukan fitur-fitur seperti dropdown) -->
    <script src="<?= base_url('public/js/bootstrap.min.js') ?>"></script>
</body>
</html>
