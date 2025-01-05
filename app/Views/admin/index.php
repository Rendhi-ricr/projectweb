<?= $this->extend('layouts/utama') ?>
<?= $this->section('title') ?>Data Laporan<?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="col-md-10 p-4">
    <div class="header">
        <h4>Kelola Pendaftaran</h4>
    </div>
    <a href="<?= base_url('admin/home/tambah') ?>" class="btn btn-success mb-3">Tambah Data</a>
    <table id="dataTable" class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pilihan Program Studi 1</th>
                <th>Pilihan Program Studi 2</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php $no = 1; ?>
            <?php foreach ($pendaftaran as $value) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['nama_lengkap']; ?></td>
                    <td><?= $value['akun_email']; ?></td>
                    <td><?= $value['pilihan_prodi1']; ?></td>
                    <td><?= $value['pilihan_prodi2']; ?></td>
                    <td>
                        <a href="<?= base_url('admin/home/detail/' . $value['id_biodata']); ?>" class="btn btn-primary btn-sm">Detail</a>
                        <a href="<?= base_url('admin/home/update/' . $value['id_biodata']); ?>" class="btn btn-warning btn-sm">Update</a>
                        <a href="<?= base_url('admin/home/delete/' . $value['id_biodata']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>

            <!-- Baris lain -->
        </tbody>


    </table>
</div>
<?= $this->endSection() ?>