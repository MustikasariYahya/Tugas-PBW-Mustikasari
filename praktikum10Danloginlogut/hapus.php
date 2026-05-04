<?php
session_start();
if (!isset($_SESSION['login_Un5lk4'])) {
    header("Location: login.php?message=" . urlencode("Login dulu ya!"));
    exit;
}

include 'koneksi.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM buku WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Gagal Hapus Data.";
    }
    $stmt->close();
}
$conn->close();
?>