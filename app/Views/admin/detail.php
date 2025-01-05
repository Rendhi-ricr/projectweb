<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Pendaftar</title>
    <style>
        /* Styling tetap seperti sebelumnya */
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
            margin-bottom: 15px;
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

        .button {
            background-color: #2a5298;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        .button:hover {
            background-color: #1f3e75;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Detail Data Pendaftar</h1>
        <form>
            <div class="section-header">Data Diri</div>
            <!-- <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="">
            </div> -->
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" id="nik" name="nik" placeholder="<?= $pendaftaran['nik'] ?>">
            </div>
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" id="nisn" name="nisn" placeholder="<?= $pendaftaran['nisn'] ?>">
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select id="jk" name="jk" required>
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option <?= (old('jk', $pendaftaran['jk']) == 'Laki-Laki') ? 'selected' : '' ?> value="Laki-Laki">Laki-Laki</option>
                    <option <?= (old('jk', $pendaftaran['jk']) == 'Perempuan') ? 'selected' : '' ?> value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kewarganegaraan">Kewarganegaraan</label>
                <input type="text" id="kewarganegaraan" name="kewarganegaraan" placeholder="<?= $pendaftaran['kewarganegaraan'] ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat"><?= $pendaftaran['alamat'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="no_telepon">Nomor Telepon</label>
                <input type="text" id="no_telepon" name="no_telepon" placeholder="<?= $pendaftaran['no_telepon'] ?>">
            </div>

            <div class="section-header">Data Pendidikan</div>
            <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <input type="text" id="asal_sekolah" name="asal_sekolah" placeholder="<?= $pendaftaran['asal_sekolah'] ?>">
            </div>
            <div class="form-group">
                <label for="jurusan_sekolah">Jurusan Sekolah</label>
                <input type="text" id="jurusan_sekolah" name="jurusan_sekolah" placeholder="<?= $pendaftaran['jurusan_sekolah'] ?>">
            </div>
            <div class="form-group">
                <label for="tahun_lulus">Tahun Lulus</label>
                <input type="text" id="tahun_lulus" name="tahun_lulus" placeholder="<?= $pendaftaran['tahun_lulus'] ?>">
            </div>
            <div class="form-group">
                <label for="no_ijazah">Nomor Ijazah</label>
                <input type="text" id="no_ijazah" name="no_ijazah" placeholder="<?= $pendaftaran['no_ijazah'] ?>">
            </div>
            <div class="form-group">
                <label for="nilai_rata_rata">Nilai Rata-Rata</label>
                <input type="text" id="nilai_rata_rata" name="nilai_rata_rata" placeholder="<?= $pendaftaran['nilai_rata_rata'] ?>">
            </div>

            <div class="section-header">Data Orang Tua</div>
            <div class="form-group">
                <label for="nama_ayah">Nama Ayah</label>
                <input type="text" id="nama_ayah" name="nama_ayah" placeholder="<?= $pendaftaran['nama_ayah'] ?>">
            </div>
            <div class="form-group">
                <label for="nik_ayah">NIK Ayah</label>
                <input type="text" id="nik_ayah" name="nik_ayah" placeholder="<?= $pendaftaran['nik_ayah'] ?>">
            </div>
            <div class="form-group">
                <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="<?= $pendaftaran['pekerjaan_ayah'] ?>">
            </div>
            <div class="form-group">
                <label for="nama_ibu">Nama Ibu</label>
                <input type="text" id="nama_ibu" name="nama_ibu" placeholder="<?= $pendaftaran['nama_ibu'] ?>">
            </div>
            <div class="form-group">
                <label for="nik_ibu">NIK Ibu</label>
                <input type="text" id="nik_ibu" name="nik_ibu" placeholder="<?= $pendaftaran['nik_ibu'] ?>">
            </div>
            <div class="form-group">
                <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="<?= $pendaftaran['pekerjaan_ibu'] ?>">
            </div>

            <div class="section-header">Program Studi</div>
            <div class="form-group">
                <label for="pilihan_prodi1">Pilihan Program Studi 1</label>
                <input type="text" id="pilihan_prodi1" name="pilihan_prodi1" placeholder="<?= $pendaftaran['pilihan_prodi1'] ?>">
            </div>
            <div class="form-group">
                <label for="pilihan_prodi2">Pilihan Program Studi 2</label>
                <input type="text" id="pilihan_prodi2" name="pilihan_prodi2" placeholder="<?= $pendaftaran['pilihan_prodi2'] ?>">
            </div>

            <a href="<?= base_url('admin') ?>" class="button">Kembali</a>
        </form>
    </div>
</body>

</html>