<?= $this->extend('layout/templatessingle'); ?>

<?= $this->section('content'); ?>

<!-- content -->
<div class="container content">
    <div class="row">
        <h1 class="p-3 mt-2">Tentang Kuliner di tasikmalaya</h1>
    </div>
    <div class="row">
        <div class="col-sm-12 col-lg-12">

            <p class="card-text col-10"><?= $single['about_detail']; ?></p>

        </div>
    </div>
    <hr>

</div>
<!-- end content -->


<?= $this->endSection(); ?>