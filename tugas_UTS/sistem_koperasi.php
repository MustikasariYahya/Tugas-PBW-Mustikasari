<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Koperasi</title>
</head>
    <style>
    .echo {
        color: black;
        border-radius: 5px;
    }
    </style>
<body>
    <h2>Sistem Koperasi Mahasiswa</h2>

    <form method="POST" action="">
        <label>Nama Mahasiswa</label><br>
        <input type="text" name="nama" required></br>

        <label>NIM Mahasiswa</label><br>
        <input type="number" name="nim" required></br>
        
        <label>Email</label><br>
        <input type="email" name="email" required><br>

        <label>Jenis Layanan</label><br>
        <select name="jenis_layanan">
            <option value="Reguler">Reguler</option>
            <option value="Prioritas">Prioritas</option>
        </select><br>

        <label>Pilihan Barang</label><br>
        <select name="barang">
            <option value="Almamater">Almamater - 150.000</option>
            <option value="Toga">Toga - 200.000</option>
            <option value="Sepatu">Sepatu - 175.000</option>
        </select><br>

        <label>Jumlah Barang</label><br>
        <input type="number" name="jumlah_barang" min="1" required><br>

        <button type="submit" name="proses">Cek Harga</button>
    </form>

    <?php 
    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $jenis_layanan = $_POST['jenis_layanan'];
        $barang = $_POST['barang'];
        $jumlah_barang = $_POST['jumlah_barang'];
       
        

        if ($barang == "almamater") {
            $harga = 150000;
        } elseif ($barang == "toga") {
            $harga = 200000;
        } else {
            $harga = 175000;
        }
 
        if ($jenis_layanan == "Reguler") {
            $biaya_layanan = 0;
        } else {
            $biaya_layanan = 5000;
        }

        $subtotal = $harga * $jumlah_barang + $biaya_layanan;
        $pajak = $harga * 0.15;
        $total_harga = $subtotal + $pajak;

        echo "<h3>SISTEM KOPERASI MAHASISWA</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "NIM: " . $nim . "<br>" ;
        echo "Jenis Layanan: " . $jenis_layanan . "<br>";
        echo "Nama Barang: " . $barang . "<br>";
        echo "Jumlah Barang: " . $jumlah_barang . "<br>";
        echo "Subtotal Harga: " . number_format($subtotal, 0, ',', '.') . "<br>";
        echo "Pajak: " . number_format($pajak, 0, ',', '.') . "<br>";
        echo "Biaya Layanan: " . number_format($biaya_layanan, 0, ',', '.') . "<br>";
        echo "Total Harga: Rp" . number_format($total_harga, 0, ',', '.') . "<br>";

        
    }

    ?>

</body>
</html>