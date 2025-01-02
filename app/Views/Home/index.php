<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerimaan Mahasiswa Baru - UNSUB</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('style.css'); ?>">
    <style>
        /* * {
            border: red 1px solid;
        } */
    </style>
</head>
<body style="background-color:rgb(243, 247, 251);">
    <!-- <nav id="navbar" class="navbar">
        <div class="navbar-logo">
            <img src="<?= base_url('Logo-unsub.png'); ?>" alt="Logo UNSUB" >
            <div class="navbar-text">
                <div class="navbar-text-univ">
                    <p style="color: #224E80;">Universitas</p>
                    <p style="color: #2A88F4;">Subang</p>
                </div>
                <div class="navbar-divider"></div>
                <div class="navbar-text-pmb">
                    <p style="color: #224E80;">PMB 2025</p>
                </div>
            </div>
        </div>
        <ul class="navbar-menu">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Profil</a></li>
            <li><a href="#">Fakultas</a></li>
            <li><a href="#">PMB</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </nav> -->
    <section class="pmb-section">
        <div class="pmb-content">
            <!-- Kiri: Alasan Memilih UNSUB -->
            <div class="pmb-left">
                <h2 class="pmb-title">Mengapa Memilih UNSUB?</h2>
                <div class="pmb-reasons">
                    <div class="reason-item">
                        <img src="<?= base_url('Map Marker.JPG'); ?>" alt="Lokasi Strategis">
                        <p>Lokasi Strategis</p>
                    </div>
                    <div class="reason-item">
                        <img src="<?= base_url('Trophy.JPG'); ?>" alt="Akreditasi">
                        <p>Akreditasi</p>
                    </div>
                    <div class="reason-item">
                        <img src="<?= base_url('Graduation Cap.JPG'); ?>" alt="Beasiswa">
                        <p>Beasiswa</p>
                    </div>
                    <div class="reason-item">
                        <img src="<?= base_url('Tree Structure.JPG'); ?>" alt="Kelas Reguler & Karyawan">
                        <p>Kelas Reguler & Karyawan</p>
                    </div>
                    <div class="reason-item">
                        <img src="<?= base_url('Unit.JPG'); ?>" alt="Fasilitas">
                        <p>Fasilitas</p>
                    </div>
                    <div class="reason-item">
                        <img src="<?= base_url('Department.JPG'); ?>" alt="Fakultas">
                        <p>Fakultas</p>
                    </div>
                </div>
            </div>

            <!-- Kanan: Informasi PMB -->
            <div class="pmb-right">
                <h1>Penerimaan Mahasiswa Baru</h1>
                <h6>
                    Universitas Subang (Unsub) merupakan Universitas pertama yang ada di Kabupaten Subang, 
                    memiliki 7 Fakultas dan 14 Program Studi (prodi) dengan jenjang pendidikan S2, S1, dan D3. 
                    Terdiri atas 2 (dua) kampus, yakni Kampus I dan Kampus II.
                </h6>
                <a href="<?= base_url('assets/brosur/PMB_UNSUB.pdf'); ?>" class="btn-download">
                    &#8681; Unduh Brosur PMB
                </a>
            </div>
        </div>
    </section>

    <section class="pmb-cta-section">
        <div class="cta-content">
            <h3>Bergabung Bersama Kami</h3>
            <a href="<?= base_url('login') ?>" class="btn-bergabung">Mari Bergabung</a>
        </div>
    </section>

    <!-- <footer class="footer">
        <div class="w-25">
            <h1>UNSUB</h4>
            <p>Universitas Subang (Unsub) merupakan Universitas pertama yang ada di kabupaten Subang, memiliki 7 Fakultas dan 14 Program Studi (prodi) dengan jenjang pendidikan S2, S1 dan D3. Terdiri atas 2 (dua) kampus, yakni Kampus I dan Kampus II.</p>
        </div>
        <div class="w-25">
            <h3>Useful Links</h3>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Tahapan</a></li>
                <li><a href="">FAQ</a></li>
            </ul>
        </div>
        <div class="w-25">
            <h3>Our Services</h3>
            <ul>
                <li><a href="">Sistem Informasi Akademik</a></li>
                <li><a href="">Learning Management System</a></li>
                <li><a href="">Sistem PMB</a></li>
            </ul>
        </div>
        <div class="w-25">
            <h3>Contact Us</h3>
        </div>
    </footer> -->
</body>
</html>
