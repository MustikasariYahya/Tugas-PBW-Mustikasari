<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan ganjil genap</title></title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f9;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px
        }

        form {
            margin-bottom: 20px;
        }

        input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 200px;
        }

        button {
            padding: 10px 20px;
            background-color: #1e8133; 
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #229e32; 
        }

        h4 {
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h3>Cek Bilangan Genap/Ganjil</h3>
    <form method="POST">
        <input type="number" name="angka" required placeholder="Masukkan angka...">
        <button type="submit" name="cek">Periksa</button>
    </form>

    <?php
    if (isset($_POST['cek'])) {
        $angka = $_POST['angka'];

        $status = ($angka % 2 == 0) ? "Genap" : "Ganjil";

        echo "<h4>Angka $angka adalah bilangan $status.</h4>";
    }
    ?>

</body>
</html>