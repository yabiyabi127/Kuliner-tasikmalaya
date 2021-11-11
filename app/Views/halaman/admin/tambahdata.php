<?= $this->extend('layout/templatesadmin'); ?>

<?= $this->section('contentadmin'); ?>


<div class="container my-3">
    <a href="/admin/view/" class="btn btn-secondary my-3">Lihat daftar artikel</a>
    <div class="row">
        <div class="col">
            <div id="mapid" style="width: 600px; height: 400px;"></div>
        </div>
        <div class="col">
            <form action="/admin/save" enctype="multipart/form-data" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul</label>
                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?> " id="judul" name="judul" autofocus value="<?= old('judul'); ?>">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                    <textarea class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?> " autofocus value="<?= old('deskripsi'); ?>" id="deskripsi" name="deskripsi" rows="3"></textarea>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('deskripsi'); ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Latitude</label>
                    <input readonly class="form-control <?= ($validation->hasError('lat')) ? 'is-invalid' : ''; ?> " id="lat" name="lat" autofocus value="<?= old('lat'); ?>">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('lat'); ?>
                    </div>

                </div>
                <div class="mb-3">
                    <label class="form-label">Longitude</label>
                    <input readonly class="form-control <?= ($validation->hasError('long')) ? 'is-invalid' : ''; ?> " id="long" name="long" autofocus value="<?= old('long'); ?>">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('long'); ?>
                    </div>
                </div>

                <div class="custom-file mb-3">
                    <label for="Gambar" class="form-label">Tambah gambar</label>
                    <input type="file" class="form-control <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $validation->getError('gambar'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-right my-3">Kirim</button>
            </form>
        </div>
    </div>

</div>




<?= $this->endSection(); ?>