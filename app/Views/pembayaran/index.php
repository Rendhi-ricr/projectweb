<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayar Uang Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            width: 800px;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            position: relative;
        }

        .container h1 {
            font-size: 20px;
            color: #2a5298;
            margin-bottom: 10px;
        }

        .container p {
            color: #555;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .step {
            background-color: #e6f2ff;
            border: 1px solid #cce0ff;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 20px;
            margin-top: 75px;
            color: #2a5298;
            font-size: 14px;
        }

        .button {
            background-color: #2a5298;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 50px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            text-align: center;
        }

        .button:hover {
            background-color: #1f3e75;
        }

        .footer {
            font-size: 12px;
            color: #888;
            margin-top: 145px;
        }

        .logout {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 12px;
            color: #2a5298;
            text-decoration: none;
        }

        .logout:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body style="background-color: #2a5298;">
    <div class="container">
        <a href="logout" class="logout">Logout</a>
        <h1>Bayar Uang Pendaftaran</h1>
        <p>Untuk Melanjutkan Pendaftaran</p>
        <div class="step">
            Langkah 1: Tekan tombol untuk memulai pembayaran pendaftaran awal.
            <br>
            <a href="Bayar" class="button">Mulai Pembayaran</a>
        </div>
        
        <div class="footer">&copy; 2024 Universitas Subang - Pusat Informasi Pendaftaran</div>
    </div>
</body>
</html>
