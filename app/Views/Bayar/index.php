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
            background-color: #2a5298;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            width: 500px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            position: relative;
        }

        .container h1 {
            font-size: 24px;
            color: #2a5298;
            margin-bottom: 5px;
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
            padding: 15px;
            margin-bottom: 20px;
            color: #2a5298;
            font-size: 14px;
            text-align: left;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #2a5298;
            font-size: 14px;
        }

        .form-group input,
        .form-group select {
            width: calc(100% - 20px);
            padding: 8px 10px;
            border: 1px solid #cce0ff;
            border-radius: 50px;
            font-size: 14px;
        }

        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: url('data:image/svg+xml;charset=UTF-8,%3Csvg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"%3E%3Cpath fill="%232a5298" d="M0 3l5 5 5-5z"/%3E%3C/svg%3E') no-repeat right 10px center;
            background-color: white;
        }

        .form-group input[type="file"] {
            border-radius: 5px;
        }

        .button {
            background-color: #2a5298;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
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
            margin-top: 20px;
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

<body>
    <div class="container">
        <a href="logout" class="logout">Logout</a>
        <h1>Bayar Uang Pendaftaran</h1>
        <p>Untuk Melanjutkan Pendaftaran</p>
        <form action="<?= base_url('bayar/simpan'); ?>" method="post" enctype="multipart/form-data">
            <div class="step">
                <p><strong>Langkah 2: Detail pembayaran:</strong></p>
                <p>Bank Tujuan: Bank BJB<br>Nomor Rekening: 1234-5678-9101<br>Total Biaya: Rp. 200.000</p>
                <div class="form-group">
                    <label for="nama">Nama Calon Mahasiswa</label>
                    <input disabled value="<?php echo (session()->get('nama_lengkap')) ?>" type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input disabled value="<?php echo (session()->get('email')) ?>" type="email" id="email" name="email" placeholder="Masukkan email" required>
                </div>
                <div class="form-group">
                    <label for="metode_bayar">Metode Pembayaran</label>
                    <select id="metode_bayar" name="metode_bayar" required>
                        <option value="">-- Pilih Metode Pembayaran --</option>
                        <option value="Transfer Bank">Transfer Bank</option>
                        <option value="E Wallet">E-Wallet</option>
                        <option value="Kartu Kredit">Kartu Kredit</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bukti_pembayaran">Bukti Pembayaran</label>
                    <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" required>
                </div>
                <button type="submit" class="button">Kirim Bukti Pembayaran</button>
            </div>
        </form>
        <div class="footer">&copy; 2024 Universitas Subang - Pusat Informasi Pendaftaran</div>
    </div>
</body>

</html>