<?= $this->extend('layouts/utama') ?>
<?= $this->section('title') ?>Data Laporan<?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="col-md-10 p-4">
    <div class="header">
        <h4>Kelola Pendaftaran</h4>
    </div>
    <a href="<?= base_url('admin/home/tambah') ?>" class="btn btn-success mb-3">Tambah Data</a>
    <table id="dataTable" class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pilihan Program Studi 1</th>
                <th>Pilihan Program Studi </th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($pendaftaran)) : ?>
                <?php $no = 1; ?>
                <?php foreach ($pendaftaran as $row) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $nama; ?></td>
                        <td></td>
                        <td><?= esc($row['pilihan_prodi1']); ?></td>
                        <td><?= esc($row['pilihan_prodi2']); ?></td>
                        <td></td>
                        <td>
                            <a href="<?= base_url('admin/home/detail/' . $row['id_biodata']); ?>" class="btn btn-primary btn-sm">Detail</a>
                            <a href="<?= base_url('admin/home/update/' . $row['id_biodata']); ?>" class="btn btn-warning btn-sm">Update</a>
                            <a href="<?= base_url('admin/home/delete/' . $row['id_biodata']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data tersedia</td>
                </tr>
            <?php endif; ?>
        </tbody>

    </table>
</div>
<?= $this->endSection() ?>