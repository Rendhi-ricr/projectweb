<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #2a5298;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: white;
            width: 700px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px 30px;
            margin: 20px;
        }

        h1 {
            font-size: 24px;
            color: #2a5298;
            text-align: center;
            margin-bottom: 5px;
        }

        p {
            color: #555;
            font-size: 14px;
            text-align: center;
            margin-bottom: 20px;
        }

        .section-header {
            background-color: #2a5298;
            color: white;
            font-size: 16px;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .section-header img {
            margin-right: 10px;
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
        .form-group select,
        .form-group textarea {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #cce0ff;
            border-radius: 5px;
            font-size: 14px;
        }

        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: url('data:image/svg+xml;charset=UTF-8,%3Csvg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"%3E%3Cpath fill="%232a5298" d="M0 3l5 5 5-5z"/%3E%3C/svg%3E') no-repeat right 10px center;
            background-color: white;
        }

        .button {
            background-color: #2a5298;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            display: inline-block;
            text-decoration: none;
            text-align: center;
            margin-top: 20px;
            width: 100%;
        }

        .button:hover {
            background-color: #1f3e75;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?php foreach (session()->getFlashdata('error') as $error): ?>
                    <p><?= esc($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <h1>Formulir Pendaftaran</h1>
        <p>Untuk Melanjutkan Pendaftaran</p>
        <form action="<?= base_url('formulir/simpan') ?>" method="post">
            <?= csrf_field() ?>
            <!-- Data Diri -->
            <div class="section-header">Data Diri</div>
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" id="nik" name="nik" placeholder="Masukkan NIK" required>
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select id="jk" name="jk" required>
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kewarganegaraan">Kewarganegaraan</label>
                <input type="text" id="kewarganegaraan" name="kewarganegaraan" placeholder="Masukkan Kewarganegaraan" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat" required></textarea>
            </div>
            <div class="form-group">
                <label for="no_telepon">Nomor Telepon</label>
                <input type="text" id="no_telepon" name="no_telepon" placeholder="Masukkan Nomor Telepon" required>
            </div>

            <!-- Data Pendidikan -->
            <div class="section-header">Data Pendidikan</div>
            <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <input type="text" id="asal_sekolah" name="asal_sekolah" placeholder="Masukkan Asal Sekolah" required>
            </div>
            <div class="form-group">
                <label for="jurusan_sekolah">Jurusan Sekolah</label>
                <input type="text" id="jurusan_sekolah" name="jurusan_sekolah" placeholder="Masukkan Jurusan Sekolah" required>
            </div>
            <div class="form-group">
                <label for="tahun_lulus">Tahun Lulus</label>
                <input type="number" id="tahun_lulus" name="tahun_lulus" placeholder="Masukkan Tahun Lulus" required>
            </div>
            <div class="form-group">
                <label for="nilai_rata_rata">Nilai Rata-Rata</label>
                <input type="text" id="nilai_rata_rata" name="nilai_rata_rata" placeholder="Masukkan Nilai Rata-Rata" required>
            </div>

            <!-- Program Studi -->
            <div class="section-header">Program Studi</div>
            <div class="form-group">
                <label for="pilihan_prodi1">Pilihan Program Studi 1</label>
                <input type="text" id="pilihan_prodi1" name="pilihan_prodi1" placeholder="Masukkan Pilihan Program Studi 1" required>
            </div>
            <div class="form-group">
                <label for="pilihan_prodi2">Pilihan Program Studi 2</label>
                <input type="text" id="pilihan_prodi2" name="pilihan_prodi2" placeholder="Masukkan Pilihan Program Studi 2" required>
            </div>

            <button type="submit" class="button">Simpan</button>
        </form>
    </div>
</body>

</html>