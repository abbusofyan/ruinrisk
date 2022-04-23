<?php $this->load->view('layout/start.php') ?>
<style>
	#mapid { 
		height: 400px; 
		width: 100%; 
		z-index: 0; /* Set z-index to 0 as it will be on a layer below the contact form */
	}

	#map-wrapper {
		width: 100%;
		height: 500px;
		position: relative;
		border: 1px solid black;
	}

	#mapid {
		width: 100%;
		height: 100%;
	}

	#button-wrapper {
		position: absolute;
		bottom: 10px;
		width: 100%;
		align-items: center;
		/* border: 1px solid red; */
	}
</style>


<?php $this->load->view('part/layanan'); ?>

<div id="mapsid" class="maps">
	<div class="card-live shadow-sm">
		<?php $this->load->view('part/peringatan_bencana'); ?>
	</div>

	<?php $this->load->view('part/carousel'); ?>

	<div class="span9" style="height:100%">
		<div id="map-wrapper">
			<div id="mapid"></div>	
			<div id="button-wrapper">
			<button type="button" class="btn btn-danger" id="btn1" data-bs-toggle="modal" data-bs-target="#modalFilter">
				filter
			</button>
			</div> 
		</div>
	</div>

	<?php $this->load->view('part/modal_filter'); ?>

	<div class="d-flex lapor">
		<div class="d-grid flex-grow-1 pr-2">
			<a href="<?= base_url('potensi') ?>" class="btn btn-danger btn-block">Lapor Potensi</a>
		</div>
	</div>
	
</div>

<?php $this->load->view('part/berita') ?>

<?php $this->load->view('layout/end.php') ?>

<?php include 'part/script.php' ?>