<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            display: flex;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 800px;
        }
        .login-container .logo-section {
            background-color: #fff;
            width: 40%;
            display: flex;
            flex-direction: column; /* Atur elemen secara vertikal */
            justify-content: center;
            align-items: center;
            text-align: center; /* Tengah semua elemen */
        }
        .login-container .logo-section img {
            max-width: 80%;
            max-height: 80%;
            border-radius: 10px;
        }
        .logo-section .text-section {
            margin-top: 15px;
        }
        .logo-section .text-section h1 {
            font-size: 18px;
            color: #074799;
        }
        .logo-section .text-section h2 {
            font-size: 16px;
            color: #555;
        }
        .login-container .form-section {
            width: 60%;
            padding: 40px;
        }
        .form-section h2 {
            margin-bottom: 20px;
            color: #074799;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #074799;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 3px solid #ccc;
            border-radius: 50px;
            font-size: 14px;
        }
        .form-group input:focus {
            border-color: #0056b3;
            outline: none;
        }
        .login-btn {
            width: 50%;
            background-color: #0056b3;
            color: #fff;
            padding: 10px 0;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }
        .login-btn:hover {
            background-color: #003d82;
        }
        .link {
            margin-top: 10px;
            text-align: center;
        }
        .link a {
            text-decoration: none;
            color: #0056b3;
            font-size: 14px;
        }
        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body style="background-color: #224E80;">
    <div class="login-container">
        <!-- Bagian Logo/Gambar -->
        <div class="logo-section">
            <img src="<?= base_url('logo-unsub.png');?>" alt="Logo Universitas" width="70px" height="70px">
            <div class="text-section">
                <h1>Universitas Subang</h1>
                <h2>Pendaftaran Mahasiswa</h2>
            </div>
        </div>
        <!-- Bagian Form Login -->
        <div class="form-section">
            <h2>Login</h2>
            <form action="login/login" method="post">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan E-mail" required>
                </div>
                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="sandi" name="password" placeholder="Masukkan Kata Sandi" required>
                </div>
                <button type="submit" class="login-btn">Masuk</button>
                <div class="link">Belum punya akun?
                    <a href="buat_akun"> Daftar di sini</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
