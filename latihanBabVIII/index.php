<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
</head>
<body>
    <p>Mustikasari Yahya</p>
    <p>2410631170041</p>
    <p>4C</p>

    <?php include 'menu.php'; ?>

    <hr> <div id="konten">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'soal1':
                    include 'soal1.php';
                    break;
                case 'soal2':
                    include 'soal2.php';
                    break;
                case 'soal3':
                    include 'soal3.php';
                    break;
                case 'soal4':
                    include 'soal4.php';
                    break;
                default:
                    echo "Halaman tidak ditemukan.";
                    break;
            }
        }
        ?>
    </div>
</body>
</html>