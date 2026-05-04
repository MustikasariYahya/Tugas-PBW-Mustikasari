<?php 
session_start();
if (!isset($_SESSION['login_Un5lk4'])) {
    header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dulu bro."));
    exit();
}
include 'koneksi.php'; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            background-color: #f4f7f6; 
        }
        .card { 
            border-radius: 15px; 
        }
        .bg {
            background-color: #2d6a4f;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow border-0">
                <div class="card-header bg text-white py-3">
                    <h4 class="mb-0 text-center">Form Tambah Produk</h4>
                </div>
                <div class="card-body p-4">
                    <form action="tambah_proses.php" method="POST">
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Kode Produk</label>
                            <input type="text" name="kode_produk" class="form-control" placeholder="Contoh: 001" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number" name="harga" step="0.01" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Stok Barang</label>
                            <input type="number" name="stok" class="form-control" required>
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-success py-2">
                                Simpan Produk
                            </button>
                            <a href="index.php" class="btn btn-outline-secondary">
                                Kembali ke Daftar
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>