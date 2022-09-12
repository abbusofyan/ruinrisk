<?php $this->load->view('layout/start.php'); ?>

<style>
	body {
		background-color: #4B515D;
	}
</style>

<div class="section full mt-2">
	<?php $day_period = ['Hari ini', 'Besok', 'Lusa'] ?>
	<?php foreach ($weather->forecast->forecastday as $key => $weather): ?>
		<div class="container py-2 h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-md-8 col-lg-6 col-xl-4">

				<div class="card" style="color: #4B515D; border-radius: 35px;">
					<div class="card-body p-4">

					<div class="d-flex">
						<h6 class="flex-grow-1"><?= $day_period[$key] ?></h6>
						<img src="<?= $weather->day->condition->icon; ?>" alt="">
					</div>

					<div class="d-flex flex-column text-center mt-2 mb-4">
						<h6 class="display-4 mb-0 font-weight-bold" style="color: #1C2331;"> <?= $weather->day->avgtemp_c; ?> &deg;C</h6>
						<span class="small" style="color: #868B94"><b><?= $weather->day->condition->text ?></b></span>
					</div>

					<div class="d-flex align-items-center">
						<div class="flex-grow-1" style="font-size: 1rem;">
							<div>
								<i class="fas fa-wind fa-fw" style="color: #868B94;"></i> <span class="ms-1"> Max Wind : <br> <?= $weather->day->maxwind_mph ?> m/h</span>
							</div>
						</div>
					</div>

					</div>
				</div>

				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>

<?php include 'part/script.php'; ?>

<?php $this->load->view('layout/end.php') ?>
