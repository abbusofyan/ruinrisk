<?php $this->load->view('layout/start.php') ?>

<?php $this->load->view('part/layanan'); ?>

<div id="mapsid" class="maps">
	<div class="card-live shadow-sm">
		<?php $this->load->view('part/peringatan_bencana'); ?>
	</div>

	<?php $this->load->view('part/carousel'); ?>

	<div id="map-wrapper">
		<div id="mapid"></div>	
	</div>
	
</div>

<?php $this->load->view('part/berita') ?>

<?php $this->load->view('part/potensi_bencana') ?>

<?php $this->load->view('layout/end.php') ?>
