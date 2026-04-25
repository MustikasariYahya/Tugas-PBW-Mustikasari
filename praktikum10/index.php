<?php
include 'koneksi.php';
$sql = "SELECT * FROM buku";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Daftar Buku</title>
</head>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 40px;
            color: #333;
        }

        h2 {
            color: #2c3e50;
        }

        .btn-tambah {
            display: inline-block;
            padding: 10px 15px;
            background-color: #1c8018;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
            transition: background 0.3s;
        }

        .btn-tambah:hover {
            background-color: #189233;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #1c8018;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .action-links a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 13px;
            font-weight: bold;
        }

        .edit {
            color: #f39c12;
            border: 1px solid #f39c12;
        }

        .edit:hover {
            background: #f39c12;
            color: white;
        }

        .hapus {
            color: #e74c3c;
            border: 1px solid #e74c3c;
            margin-left: 5px;
        }

        .hapus:hover {
            background: #e74c3c;
            color: white;
        }
    </style>
<body>
<h2>Daftar Koleksi Buku</h2>
    
    <a href="tambah.php" class="btn-tambah">+ Tambah Buku Baru</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Harga</th>
                <th>Stok</th>
                <th style="text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= htmlspecialchars($row['judul']); ?></td>
                <td><?= htmlspecialchars($row['penulis']); ?></td>
                <td><?= $row['tahun_terbit']; ?></td>
                <td>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                <td><?= $row['stok']; ?></td>
                <td class="action-links" style="text-align: center;">
                    <a href="edit.php?id=<?= $row['id']; ?>" class="edit">Edit</a>
                    <a href="hapus.php?id=<?= $row['id']; ?>" class="hapus" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>