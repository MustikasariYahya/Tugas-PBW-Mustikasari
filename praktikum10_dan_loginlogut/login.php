<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Masuk ke Sistem</title>
    <style>
        body { 
            font-family: 'Segoe UI', sans-serif; 
            background-color: #f4f7f6; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
        }
        .login-container { 
            background: white; 
            padding: 30px; 
            border-radius: 8px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.1); 
            width: 350px; 
        }
        h2 { 
            color: #2c3e50; 
            text-align: center; 
            margin-bottom: 20px; 
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
        button { 
            width: 100%; 
            padding: 12px; 
            background-color: #1c8018; 
            color: white; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            font-size: 16px; 
        }
        button:hover { 
            background-color: #189233; 
        }
        .alert { 
            background-color: #f8d7da; 
            color: #721c24; 
            padding: 10px; 
            border-radius: 4px; 
            margin-bottom: 20px; 
            font-size: 14px; 
            text-align: center; 
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login Sistem Buku</h2>

    <?php if (isset($_GET['message'])): ?>
        <div class="alert">
            <?= htmlspecialchars($_GET['message']); ?>
        </div>
    <?php endif; ?>

    <form action="proses_login.php" method="POST">
        <label>Nama Pengguna</label>
        <input type="text" name="username" required placeholder="Masukkan nama...">

        <label>Kata Sandi</label>
        <input type="password" name="password" required placeholder="Masukkan sandi...">

        <button type="submit">Masuk Sekarang</button>
    </form>
</div>

</body>
</html>