<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- my font google -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:200,400,600&display=swap" rel="stylesheet">
    <!-- my css -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <title><?= $title; ?></title>
</head>


<body>


    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">

        <div class="container">
            <div class="navbar-brand" href="/home/">
                <a class="navbar-brand" href="/home/">
                    <img src="/img/logo.png" loading="lazy" class="logotext"> <span class="logotext">Kuliner Tasikmalaya</span>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-5 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/home/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/home/about/">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Resep</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- tutup navbar -->



    <?= $this->renderSection('content'); ?>



    <!-- Footer -->
    <div class="container">

    </div>
    <br><br><br><br><br><br>
    <footer class="foot p-5 mt-5" style="height: 300px;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-1">
                    <img src="/img/logo.png">
                </div>
                <div class=" col-7 col-lg-2 pt-3 pr-0">
                    <a href="" class="m-2"> <img src="/img/1.png"></a>
                    <a href="" class="m-2"><img src="/img/2.png"></a>
                    <a href="" class="m-2"> <img src="/img/3.png"></a>
                </div>
            </div>
            <div class="row p-2 justify-content-between">
                <div class="col-5">
                    <p>All Right Reserved <span>Hari Kurniawan</span> Copyright 2021</p>
                </div>
                <div class="col-5 col-lg-6">
                    <nav class="nav justify-content-end">
                        <a class="nav-link active" href="#">JOBS</a>
                        <a class="nav-link" href="#">DEVELOPER</a>
                        <a class="nav-link" href="#">TERMS</a>
                        <a class="nav-link" href="#">PRIVACY POLICY</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

</body>
<script>
    var mymap = L.map('mapid').setView([-7.350442619536983, 108.22210786170818], 11);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(mymap);
</script>

</html>