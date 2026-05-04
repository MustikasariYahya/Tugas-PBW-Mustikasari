<?php
session_start();
if (!isset($_SESSION['login_Un5lk4'])) {
    header("Location: login.php");
    exit();
}
include 'koneksi.php';
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM produk WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            background-color: #f4f7f6; 
        }
        
        .card { 
            border-radius: 15px; 
            border: none;
        }
        
        .bg {
            background-color: #f39c12; 
            color: white;
        }

        .btn-update {
            background-color: #f39c12;
            color: white;
        }

        .btn-update:hover {
            background-color: #d88c11;
            color: white;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg py-3">
                    <h4 class="mb-0 text-center">Form Edit Produk</h4>
                </div>
                
                <div class="card-body p-4">
                    <form action="update_proses.php" method="POST">
                        
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                        <div class="mb-3">
                            <label class="form-label fw-bold">Kode Produk</label>
                            <input type="text" 
                                   name="kode_produk" 
                                   class="form-control" 
                                   value="<?php echo $data['kode_produk']; ?>" 
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Produk</label>
                            <input type="text" 
                                   name="nama_produk" 
                                   class="form-control" 
                                   value="<?php echo $data['nama_produk']; ?>" 
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number" 
                                       name="harga" 
                                       step="0.01" 
                                       class="form-control" 
                                       value="<?php echo $data['harga']; ?>" 
                                       required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Stok Barang</label>
                            <input type="number" 
                                   name="stok" 
                                   class="form-control" 
                                   value="<?php echo $data['stok']; ?>" 
                                   required>
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-update py-2">
                                Simpan Perubahan
                            </button>
                            <a href="index.php" class="btn btn-outline-secondary">
                                Batalkan
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