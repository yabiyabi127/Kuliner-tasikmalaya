<?= $this->extend('layout/templatessingle'); ?>

<?= $this->section('content'); ?>

<!-- content -->
<div class="container content">
    <div class="row">
        <h1 class="p-3 mt-2">Artikel Kesehatan Terkini untuk Anda</h1>
    </div>
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <figure class="figure">
                <img src="/img/<?= $artikel['gambar']; ?>" class="figure-img img-fluid rounded" width="800px">
                <h5 class="card-title mt-2"><?= $artikel['judul']; ?></h5>
                <p class="card-text"> <?= $artikel['deskripsi']; ?>
            </figure>
        </div>
    </div>
    <hr>
    <div class="cotainer">
        <h2 class="p-3 mt-2">Lokasi Berdasarkan Map</h2>
        <div class="row">
            <div class="col-8 mx-auto">
                <div id="mapid" style="width: 600px; height: 400px;"></div>
            </div>
        </div>
    </div>

</div>

<script>
    var mymap = L.map('mapid').setView([-7.350442619536983, 108.22210786170818], 11);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(mymap);
    L.marker([<?= $artikel['lat']; ?>, <?= $artikel['long']; ?>]).addTo(mymap)
        .bindPopup("<?= $artikel['judul']; ?>").openPopup();
</script>

<?= $this->endSection(); ?>