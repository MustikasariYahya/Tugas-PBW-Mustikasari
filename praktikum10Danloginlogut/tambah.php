<?php
session_start();
if (!isset($_SESSION['login_Un5lk4'])) {
    header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dulu ya!"));
    exit;
}
include 'koneksi.php'; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f7f6;
            margin: 40px;
            color: #333;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            max-width: 500px;
            margin: auto;
        }
        h2 {
            color: #2c3e50;
            margin-top: 0;
            border-bottom: 2px solid #1c8018;
            padding-bottom: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #1c8018;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: 0.3s;
        }
        button:hover {
            background-color: #189233;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #7f8c8d;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Tambah Buku Baru</h2>
    <form method="POST" action="proses_tambah.php">
        <label>Judul Buku</label>
        <input type="text" name="judul" required>

        <label>Penulis</label>
        <input type="text" name="penulis" required>

        <label>Tahun Terbit</label>
        <input type="number" name="tahun" required>

        <label>Harga (Rp)</label>
        <input type="number" step="0.01" name="harga" required>

        <label>Stok</label>
        <input type="number" name="stok" required>

        <button type="submit">Simpan Buku</button>
        <a href="index.php" class="back-link">← Kembali ke Daftar</a>
    </form>
</div>

</body>
</html>