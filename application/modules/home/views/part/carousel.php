<div class="container p-2">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row g-2">
                    <div class="col-6">
                        <a href="<?=base_url('User/bencana')?>" class="text-decoration-none text-dark">
                        <div class="card-ben rounded shadow-sm p-2">
                            <div class="d-flex gap-2">
                                <div>
                                    <img class="mb-2 mt-1" src="<?=base_url('assets_mobile/img/ic/tsunami.png')?>" height="40">
                                </div>
                                <div>
                                    <p class="fw-bold">Bencana Alam</p>
                                </div>
                                <div>
                                    <p class="bg-danger rounded-pill p-2 text-white fw-bold">3</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="<?= base_url('/potensi') ?>" class="text-decoration-none text-dark">
                        <div class="card-ben rounded shadow-sm p-2">
                            <div class="d-flex gap-2">
                                <div>
                                    <img class="d-block m-auto mb-2 mt-1" src="<?=base_url('assets_mobile/img/ic/resiko.png')?>" height="40">
                                </div>
                                <div>
                                    <p class="fw-bold">Potensi Bencana</p>
                                </div>
                                <div>
                                    <p class="bg-danger rounded-pill p-2 text-white fw-bold"><?= $jml_potensi ?></p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row g-2">
                    <div class="col-6">
                        <a href="" class="text-decoration-none text-dark">
                        <div class="card-ben rounded shadow-sm p-2">
                            <div class="d-flex gap-2">
                                <div>
                                    <img class="d-block m-auto mb-2 mt-1" src="<?=base_url('assets_mobile/img/ic/network.png')?>" height="40">
                                </div>
                                <div>
                                    <p class="fw-bold">Masyarakat Prioritas</p>
                                </div>
                                <div>
                                    <p class="bg-danger rounded-pill p-2 text-white fw-bold">3</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
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
</div>	