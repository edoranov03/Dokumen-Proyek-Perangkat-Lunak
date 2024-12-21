<?php
session_start();
require 'functions.php';

if (!isset($_SESSION["login"])) {
    echo "<script>
        Swal.fire({
            icon: 'warning',
            title: 'Login Required',
            text: 'Silahkan login terlebih dahulu!',
            confirmButtonText: 'OK'
        }).then(() => {
            window.location.href = 'login.php';
        });
    </script>";
    exit();
}

$id = $_SESSION["idUser"];
$biodata = query("SELECT * FROM users WHERE idUser = '$id'")[0];
error_reporting(0);
?>

<!doctype html>
<html lang="en">
<head>
    <title>Profil Nasabah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <style>
        body {
            background-color: #f4f6f9;
        }
        .sidebar {
            background-color: #2c3e50;
            color: white;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            transition: 0.3s;
        }
        .sidebar .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #3498db;
            margin-top: 20px;
        }
        .sidebar .menu-btn {
            color: #ecf0f1;
            text-decoration: none;
            display: block;
            padding: 15px;
            transition: 0.3s;
        }
        .sidebar .menu-btn:hover {
            background-color: #34495e;
            color: #3498db;
        }
        .box-1 {
            margin-left: 250px;
            padding: 20px;
        }
        .card {
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group input {
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-menu">
                <center class="profile">
                    <img src="img/user/<?= $biodata['gambar'] ?>" alt="Profile Picture">
                    <p class="mt-3"><?= $biodata['namaUser'] ?></p>
                </center>
                <ul class="list-unstyled">
                    <li>
                        <a href="user.php" class="menu-btn">
                            <i class="fa fa-user me-2"></i>Data User
                        </a>
                    </li>
                    <li>
                        <a href="hasilUser.php" class="menu-btn">
                            <i class="fas fa-comments-dollar me-2"></i>Hasil Pengumpulan
                        </a>
                    </li>
                    <li>
                        <a href="setoranUser.php" class="menu-btn">
                            <i class="fas fa-chart-line me-2"></i>Transaksi Penarikan
                        </a>
                    </li>
                    <li>
                        <a href="pengumpulanUser.php" class="menu-btn">
                            <i class="fas fa-chart-bar me-2"></i>Grafik Pengumpulan
                        </a>
                    </li>
                    <li>
                        <a href="logout.php" class="menu-btn">
                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="box-1">
            <div class="container">
                <h2 class="text-center mb-4" style="color: #2c3e50;">Data Nasabah</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fas fa-id-card me-2"></i>Nomor Induk Nasabah:</label>
                                    <input type="text" class="form-control" disabled value="<?= $biodata['idUser'] ?>">
                                </div>
                                <div class="form-group">
                                    <label><i class="fas fa-user me-2"></i>Nama Nasabah:</label>
                                    <input type="text" class="form-control" disabled value="<?= $biodata['namaUser'] ?>">
                                </div>
                                <div class="form-group">
                                    <label><i class="fas fa-id-badge me-2"></i>NIK:</label>
                                    <input type="text" class="form-control" disabled value="<?= $biodata['nik'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fas fa-map-marker-alt me-2"></i>Alamat:</label>
                                    <input type="text" class="form-control" disabled value="<?= $biodata['alamat'] ?>">
                                </div>
                                <div class="form-group">
                                    <label><i class="fas fa-phone me-2"></i>Nomor Telepon:</label>
                                    <input type="text" class="form-control" disabled value="<?= $biodata['telepon'] ?>">
                                </div>
                                <div class="form-group">
                                    <label><i class="fas fa-user-circle me-2"></i>Username:</label>
                                    <input type="text" class="form-control" disabled value="<?= $biodata['username'] ?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label><i class="fas fa-dollar-sign me-2"></i>Jumlah Setoran:</label>
                                    <input type="text" class="form-control" disabled value="Rp <?= number_format($biodata['jmlSetoran'], 0, ',', '.') ?>">
                                </div>
                                <div class="form-group">
                                    <label><i class="fas fa-wallet me-2"></i>Saldo Total:</label>
                                    <input type="text" class="form-control" disabled value="Rp <?= number_format($biodata['saldo'], 0, ',', '.') ?>">
                                </div>
                                <a href="ubahuser.php?idUser=<?= $biodata['idUser'] ?>" class="btn btn-primary btn-lg w-100 mt-3">
                                    <i class="fas fa-edit me-2"></i>Edit Data
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</body>
</html>