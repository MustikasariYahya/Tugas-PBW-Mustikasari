<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Nilai Mahasiswa</title>
</head>
<body>

    <h2>Form Input Nilai Mahasiswa</h2>

    <form method="post" action="">
        Nama : <input type="text" name="nama" required><br>
        Nilai : <input type="number" name="nilai" required><br>
        <input type="submit" name="proses" value="Proses">
    </form>

    <hr>

    <?php
    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];

        if ($nilai >= 85 && $nilai <= 100) {
            $predikat = "A";
        } elseif ($nilai >= 75 && $nilai < 85) {
            $predikat = "B";
        } elseif ($nilai >= 65 && $nilai < 75) {
            $predikat = "C";
        } elseif ($nilai >= 55 && $nilai < 65) {
            $predikat = "D";
        } elseif ($nilai >= 45 && $nilai < 55) {
            $predikat = "E";
        } else {
            $predikat = "Tidak Valid";
        }

        if ($predikat == "A" || $predikat == "B" || $predikat == "C") {
            $status = "Lulus";
        } elseif ($predikat == "D" || $predikat == "E") {
            $status = "Tidak Lulus";
        } else {
            $status = "-";
        }

        echo "Nama : " . $nama ."<br>";
        echo "Nilai : " . $nilai ."<br>";
        echo "Predikat : " . $predikat ."<br>";
        echo "Status : " . $status;
    }
    ?>

</body>
</html>