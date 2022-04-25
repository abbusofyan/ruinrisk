<?php $this->load->view('layout/start.php') ?>
<style>
    a, a:hover, a:focus, a:active {
        text-decoration: none;
        color: inherit;
    }
</style>

<?php $this->load->view('part/layanan'); ?>

<div id="mapsid" class="maps">
	<div class="card-live shadow-sm">
		<?php $this->load->view('part/peringatan_bencana'); ?>
	</div>

	<?php $this->load->view('part/carousel'); ?>

	<div id="map-wrapper">
		<div id="mapid"></div>	
	</div>


	<div class="d-flex lapor">
		<div class="d-grid flex-grow-1 pr-2">
			<a href="<?= base_url('potensi/add') ?>" class="btn btn-danger btn-block">Lapor Potensi</a>
		</div>
	</div>
	
</div>

<?php $this->load->view('part/berita') ?>

<?php $this->load->view('part/potensi_bencana') ?>

<?php $this->load->view('layout/end.php') ?>
