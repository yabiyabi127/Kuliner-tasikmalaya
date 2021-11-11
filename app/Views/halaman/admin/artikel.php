<?= $this->extend('layout/templatesadmin'); ?>

<?= $this->section('contentadmin'); ?>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>
<div class="container my-1">
    <a href="/admin/add/" class="btn btn-secondary my-4">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($artikel as $ar) : ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $ar['judul']; ?></td>
                    <td class="text-truncate" style="max-width: 150px;"><?= $ar['deskripsi']; ?></td>
                    <td><img class="imagesampul" src="/img/<?= $ar['gambar']; ?>" alt=""></td>
                    <td><a href="/admin/edit/<?= $ar['id']; ?>" class="btn btn-success m-1">Ubah</a>
                        <a href="/admin/delete/<?= $ar['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>




<?= $this->endSection(); ?>