<?php
    session_start();
    if (!isset($_SESSION['login_Un51k4'])) {
        header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dulu bro."));
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>SELAMAT DATANG</h2>
    <div style="margin-bottom: 20px; background: #fff; padding: 10px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
    <span>Selamat datang, <b><?= $_SESSION['nama']; ?></b>!</span></br>
    <a href="logout.php" style="margin-left: 15px; color: #e74c3c; text-decoration: none; font-weight: bold;">[ Logout ]</a>
</div>
</body>
</html>