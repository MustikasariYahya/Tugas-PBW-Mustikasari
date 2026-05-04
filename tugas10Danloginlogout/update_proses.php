<?php
session_start();
if (!isset($_SESSION['login_Un5lk4'])) {
    header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dulu bro."));
    exit();
}
include 'koneksi.php';
session_start();

$id = $_POST['id'];
$kode = $_POST['kode_produk'];
$nama = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$stmt = $conn->prepare("UPDATE produk SET kode_produk=?, nama_produk=?, harga=?, stok=? WHERE id=?");
$stmt->bind_param("ssdii", $kode, $nama, $harga, $stok, $id);

if ($stmt->execute()) {
    $_SESSION['pesan'] = "Data produk berhasil diperbarui!";
} else {
    $_SESSION['pesan'] = "Gagal memperbarui data: " . $conn->error;
}

$stmt->close();
header("Location: index.php");
?>