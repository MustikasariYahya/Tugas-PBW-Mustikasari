<?php
session_start();
if (!isset($_SESSION['login_Un5lk4'])) {
    header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dulu bro."));
    exit();
}
include 'koneksi.php';
session_start();

$kode = $_POST['kode_produk'];
$nama = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$stmt = $conn->prepare("INSERT INTO produk (kode_produk, nama_produk, harga, stok) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssid", $kode, $nama, $harga, $stok);

if ($stmt->execute()) {
    $_SESSION['pesan'] = "Data produk berhasil ditambahkan!";
} else {
    $_SESSION['pesan'] = "Gagal menambah data: " . $conn->error;
}

$stmt->close();
header("Location: index.php");
?>