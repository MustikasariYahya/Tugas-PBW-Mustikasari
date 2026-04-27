<?php
include 'koneksi.php';
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM produk WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $_SESSION['pesan'] = "Data produk berhasil dihapus!";
        header("Location: index.php");
        exit();
    } else {
        echo "
        <div style='font-family:sans-serif; text-align:center; margin-top:50px;'>
            <h3 style='color:red;'>Gagal menghapus data!</h3>
            <a href='index.php'>Kembali ke Beranda</a>
        </div>";
    }
    $stmt->close();
} else {
    header("Location: index.php");
}
?>