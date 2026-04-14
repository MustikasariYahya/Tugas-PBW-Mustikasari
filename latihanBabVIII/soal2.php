<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator Bilangan Genap</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f9;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px
        }

        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            margin-top: 0;
            text-align: center;
            font-size: 20px;
        }

        label {
            font-weight: 600;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box; 
            transition: border-color 0.3s;
        }

        input[type="number"]:focus {
            border-color: #a1a1a1;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #188f58;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #1b9243;
        }

        hr {
            border: 0;
            border-top: 1px solid #eee;
            margin: 25px 0;
        }

        .hasil {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 6px;
            border-left: 5px solid #a8fdac;
            line-height: 1.6;
            word-wrap: break-word; 
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Generator Bilangan Genap</h2>
    
    <form method="POST">
        <label>Angka Awal:</label><br>
        <input type="number" name="awal" required><br><br>
        
        <label>Angka Akhir (Batas):</label><br>
        <input type="number" name="akhir" required><br><br>
        
        <button type="submit" name="proses">Tampilkan</button>
    </form>

    <hr>

    <div class="hasil">
        <?php
        if (isset($_POST['proses'])) {
            $awal  = $_POST['awal'];
            $akhir = $_POST['akhir'];

            echo "<b>Hasil bilangan genap dari $awal sampai $akhir:</b><br>";

            if ($awal % 2 != 0) {
                $awal++;
            }

            for ($i = $awal; $i <= $akhir; $i += 2) {
                echo $i . " ";
            }
        }
        ?>
    <div>
<div>
</body>
</html>