<?php $this->load->view('layout/start.php') ?>
<style>
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

	.easy-button-button {
		width:30px;
		border-top-left-radius: 2px;
		border-top-right-radius: 2px;
		border-bottom-left-radius: 2px;
		border-bottom-right-radius: 2px;
	}

	.filter-active {
		background-color: #F9BFBF;
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