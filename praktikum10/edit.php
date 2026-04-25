<?php
include 'koneksi.php';
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM buku WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f7f6;
            margin: 40px;
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
            border-bottom: 2px solid #f39c12;
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
        .btn-update {
            background-color: #f39c12;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: 0.3s;
        }
        .btn-update:hover {
            background-color: #d35400;
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
    <h2>Edit Data Buku</h2>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        
        <label>Judul Buku</label>
        <input type="text" name="judul" value="<?= htmlspecialchars($data['judul']); ?>" required>

        <label>Harga (Rp)</label>
        <input type="number" name="harga" step="any" value="<?= $data['harga']; ?>" required>

        <button type="submit" name="submit" class="btn-update">Simpan Perubahan</button>
        <a href="index.php" class="back-link">Batal</a>
    </form>
</div>

</body>
</html>