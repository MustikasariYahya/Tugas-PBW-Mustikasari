<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon Pembayaran UKT Mahasiswa</title>
</head>
<body>

    <h2>Form Pembayaran UKT Mahasiswa</h2>
    <form method="post" action="">
        NPM: <input type="text" name="npm" required><br>
        Nama: <input type="text" name="nama" required><br>
        Prodi: <input type="text" name="prodi" required><br>
        Semester: <input type="number" name="semester" required><br>
        Biaya UKT (Rp): <input type="number" name="ukt" required><br>
        <input type="submit" name="hitung" value="Hitung Diskon">
    </form>

    <hr>

    <?php
    if(isset($_POST['hitung'])) {
        $npm = $_POST['npm'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $semester = $_POST['semester'];
        $ukt = $_POST['ukt'];

        $diskon_persen = 0;

        if ($ukt >= 5000000) {
            $diskon_persen = 10;

            if ($semester > 8) {
                $diskon_persen = 15;
            }
        }

        $nominal_diskon = ($diskon_persen / 100) * $ukt;
        $total_bayar = $ukt - $nominal_diskon;

        echo "<h3>Luaran yang diharuskan</h3>";
        echo "NPM : " . ($npm) . "<br>";
        echo "NAMA : " . strtoupper($nama) . "<br>";
        echo "PRODI : " . strtoupper($prodi) . "<br>";
        echo "SEMESTER : " . $semester . "<br>";
        echo "BIAYA UKT : Rp. " . number_format($ukt, 0, ',', '.') . ",-<br>";
        echo "DISKON : " . $diskon_persen . "% <br>";
        echo "YANG HARUS DIBAYAR : Rp. " . number_format($total_bayar, 0, ',', '.') . ",-";
    }
    ?>
    
</body>
</html>