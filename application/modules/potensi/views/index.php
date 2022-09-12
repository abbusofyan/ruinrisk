<?php $this->load->view('layout/start.php'); ?>

<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet"/>

<div class="container pb-3">
    

	<div class="d-flex lapor">
		<div class="d-grid flex-grow-1 pr-2">
			<a href="<?= base_url('potensi/add') ?>" class="btn btn-danger btn-block">Lapor Potensi</a>
		</div>
	</div>
    
    <?php foreach ($potensi as $pot) { ?>
        <div class="card mt-3">
            <div id="carouselExampleIndicators<?= $pot['id'] ?>" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators<?= $pot['id'] ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators<?= $pot['id'] ?>" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators<?= $pot['id'] ?>" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <?= showImageCarousel($pot['images'])?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators<?= $pot['id'] ?>" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators<?= $pot['id'] ?>" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $pot['title'] ?></h5>
                <p class="card-text"><?= $pot['description'] ?></p>
            	<a href="<?= base_url('potensi/show/'.$pot['id']) ?>"><span class="badge rounded-pill bg-danger">More..</span></a> 
            </div>
        </div>
    <?php } ?>
</div>

<?php $this->load->view('layout/end.php') ?>

