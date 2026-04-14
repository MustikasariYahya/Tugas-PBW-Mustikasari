<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nama Hewan</title>
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
            background: white;
            display: inline-block; 
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        input {
            margin: 5px 0;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #aaa;
        }

        button {
            padding: 10px 20px;
            background-color: #28a745; 
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #218838;
        }

        .hasil {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <form method="post">
        <b>Masukkan Nama Hewan:</b><br><br>
        
        1. <input type="text" name="hewan[]"><br>
        2. <input type="text" name="hewan[]"><br>
        3. <input type="text" name="hewan[]"><br>
        4. <input type="text" name="hewan[]"><br>
        5. <input type="text" name="hewan[]"><br><br>
        
        <button type="submit" name="proses">Kirim</button>
    </form>

    <hr>

    <div class="hasil">
        <?php
        if (isset($_POST['proses'])) {
            $daftar_hewan = $_POST['hewan'];

            echo "<h3>Daftar Hewan:</h3>";
            
            foreach ($daftar_hewan as $nama) {

                if ($nama != "") {
                    echo " " . $nama . "<br>";
                }
            }
            echo "<hr>";
        }
        ?>
    <div>

</body>
</html>