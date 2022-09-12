<div class="container berita-terkini mb-5">
<h4 class="text-center">Potensi Bencana Di Sekitar Anda</h4>
<div id="potensiBencanaCarousel" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="row">
					<?php foreach ($potensi as $pot) { ?>
						<div class="col-6">
							<a href="<?= base_url('potensi/show/'.$pot['id']) ?>">
								<div class="card-berita">
									<div class="img-berita">
										<img src="assets_mobile/img/banjir.jpg" alt="" class="img-fluid">
									</div>
									<div class="konten-berita  pt-2">
										<h6><?= $pot['title'] ?></h6>
										<p><i class='bx bx-calendar-event'></i> 20 01 2022 | 22:20 WIB</p>
									</div>
								</div>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<a href="<?= base_url('potensi') ?>"><span class="badge rounded-pill bg-danger">More..</span></a> 
</div>
