<?= $this->extend('layout/templatesadmin'); ?>

<?= $this->section('contentadmin'); ?>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>
<div class="container my-1">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tentang</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <th scope="row"><?= $about['id']; ?></th>
                <td class="text-truncate" style="max-width: 200px;"><?= $about['about_detail']; ?></td>
                <td><a href="/admin/editabout/<?= $about['id']; ?>" class="btn btn-success m-1">Ubah</a>
                    <a href="/admin/delete/" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?');">Hapus</a>
                </td>
            </tr>

        </tbody>
    </table>
</div>


<?= $this->endSection(); ?>