<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>

<div class="container content mt-5">
    <div class="row">
        <h1 class="p-3 mt-2">Beberapa Pilihan Kuliner di Tasikmalaya</h1>
    </div>
    <div class="row">

        <div class="col-sm-12 col-lg-10">
            <figure class="figure">
                <img src="/img/<?= $single['gambar']; ?>" class="figure-img img-fluid rounded" width="800px">
                <h5 class="card-title mt-2"><?= $single['judul']; ?></h5>
                <p class="card-text"><?= $single['deskripsi']; ?></p>
                <a href=""></a>
                <a href="/singleartikel/detail/<?= $single['id']; ?>" class="btn btn-light">Baca selengkapnya</a>
            </figure>
        </div>

    </div>
    <hr>
    <div class="row ">
        <?php foreach ($artikel as $ar) : ?>
            <div class="col-sm-12 col-lg-10 ">
                <div class="cardd mb-3">
                    <div class="row no-gutters">
                        <div class="col-lg-4">
                            <img src="/img/<?= $ar['gambar']; ?>" class="card-img" alt="...">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $ar['judul']; ?></h5>
                                <p class="card-text"><?= substr_replace($ar['deskripsi'], "...", 250); ?></p>
                                <a class="btn btn-light" href="/singleartikel/detail/<?= $ar['id']; ?>">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
</div>


<?= $this->endSection(); ?>