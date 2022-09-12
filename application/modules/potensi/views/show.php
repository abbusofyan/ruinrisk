<?php $this->load->view('layout/start.php'); ?>

<div class="container pb-3">
    <div class="card mt-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?= showImageCarousel($potensi['images'])?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $potensi['title'] ?></h5>
            <p class="card-text"><?= $potensi['description'] ?></p>
        </div>
    </div>

    <h4 class="mt-3">Lokasi Potensi</h4>
    <div id="map-wrapper">
		<div id="mapid"></div>	
	</div>
</div>

<?php $this->load->view('layout/end.php') ?>

<script>
    DEFAULT_LAT_LNG = [<?= $potensi['lat'] ?>, <?= $potensi['lng'] ?>];
    L.marker(DEFAULT_LAT_LNG).addTo(map)
    .bindPopup('Lokasi Potensi Bencana')
    .openPopup();
</script>
