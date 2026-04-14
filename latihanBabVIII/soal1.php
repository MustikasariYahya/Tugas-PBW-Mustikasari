<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Kendaraan</title>
    <style>
        /* Gaya dasar agar tampilan ke tengah dan bersih */
        body {
            font-family: sans-serif;
            background-color: #f4f4f9;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px;
        }

        /* Kotak pembungkus form */
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 300px;
        }

        h2 { color: #333; }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box; /* Agar padding tidak merusak lebar */
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #1c8852;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #27af2e;
        }

        .hasil-container {
            margin-top: 20px;
            text-align: center;
            color: #555;
        }
    </style>
</head>
<body>
    <h2>Jenis Kendaraan<h2>

    <form method="POST" action="">
        <label>Masukkan Jumlah Roda:</label>
        <input type="number" name="roda" required><br>
        <button type="submit" name="submit">Cek</button>
    </form>

    <hr>

    <div class="hasil-container">
        <?php 
        if (isset($_POST['submit'])) {

            $roda = $_POST['roda'];
            
            echo "<h3>Hasil: </h3>";

            switch ($roda) {
                case 2:
                    echo "Sepeda atau Motor.";
                    break;
                case 3:
                    echo "Bajaj atau Becak.";
                    break;
                case 4:
                    echo "Mobil atau Angkot.";
                    break;
                case 6:
                    echo "Truk atau SUV Pick Up.";
                    break;
                default:
                    echo "Kendaraan dengan $roda roda tidak ditemukan.";
                    break;
            }
        }
        ?>
    </div>

</body>
</html>