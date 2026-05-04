<?php
session_start();
if (!isset($_SESSION['login_Un5lk4'])) {
    header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dulu bro."));
    exit;
}

include 'koneksi.php';

if (isset($_POST['submit'])) {
    $id    = $_POST['id'];
    $judul = $_POST['judul'];
    $harga = $_POST['harga'];

    $stmt = $conn->prepare("UPDATE buku SET judul=?, harga=? WHERE id=?");
    $stmt->bind_param("sdi", $judul, $harga, $id);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Gagal Update: " . $stmt->error;
    }
    $stmt->close();
}
?>