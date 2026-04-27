<?php 
include 'koneksi.php'; 
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Stok Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body { 
            background-color: #f4f7f6; 
        }
        
        .bg { 
            background-color: #1b4332; 
            color: white; 
        }
        
        .btn-success { 
            background-color: #2d6a4f; 
            border: none; 
            color: white;
        }
        
        .btn-success:hover { 
            background-color: #1b4332; 
            color: white;
        }

        .card {
            border: none;
            border-radius: 15px;
        }

        .card-header {
            border-radius: 15px 15px 0 0 !important;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg text-center py-3">
            <h2 class="mb-0">Daftar Stok Produk</h2>
        </div>
        
        <div class="card-body p-4">
            <a href="tambah.php" class="btn btn-success mb-3">
                [+] Tambah Produk Baru
            </a>

            <?php if (isset($_SESSION['pesan'])): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Sistem:</strong> <?php echo $_SESSION['pesan']; unset($_SESSION['pesan']); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM produk";
                        $result = $conn->query($sql);
                        $no = 1;
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>".$no++."</td>
                                <td><span class='badge bg-secondary'>".$row['kode_produk']."</span></td>
                                <td>".$row['nama_produk']."</td>
                                <td>Rp ".number_format($row['harga'], 2, ',', '.')."</td>
                                <td>".$row['stok']."</td>
                                <td class='text-center'>
                                    <a href='edit.php?id=".$row['id']."' class='btn btn-sm btn-warning'>
                                        Edit
                                    </a>
                                    <a href='hapus.php?id=".$row['id']."' class='btn btn-sm btn-danger' onclick='return confirm(\"Yakin hapus?\")'>
                                        Hapus
                                    </a>
                                </td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>