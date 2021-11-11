<?= $this->extend('layout/templatesadmin'); ?>

<?= $this->section('contentadmin'); ?>

<div class="container my-1">
    <h2 class="m-2">Form edit about</h2>
    <form action="/admin/updateabout/<?= $about['id']; ?>" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">About</label>
            <textarea class="form-control" autofocus id="about_detail" name="about_detail" rows="3">
                <?php echo $about['about_detail']; ?>
            </textarea>
        </div>
        <button type=" submit" class="btn btn-primary float-right">Ubah sekarang</button>
    </form>
</div>


<?= $this->endSection(); ?>