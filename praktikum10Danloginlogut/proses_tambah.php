<?php
session_start();
if (!isset($_SESSION['login_Un5lk4'])) {
    header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dulu ya!"));
    exit;
}
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul   = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun   = $_POST['tahun'];
    $harga   = $_POST['harga'];
    $stok    = $_POST['stok'];

    $stmt = $conn->prepare("INSERT INTO buku (judul, penulis, tahun_terbit, harga, stok) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssidi", $judul, $penulis, $tahun, $harga, $stok);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Gagal: " . $stmt->error;
    }
    $stmt->close();
}
?>