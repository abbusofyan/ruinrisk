<?php $this->load->view('layout/start.php')?>
<div id="head" class="head">
    <div class="row align-items-center">
        <div class="col-12">
            <div class="logo d-flex align-items-center">
                <a class="navbar-brand" href="<?=base_url('/')?>">
                    <i class='bx bx-arrow-back bx-md' style='color:#ffffff'  ></i>
                </a>
				<h4 class="text-white mt-2">Semua Layanan</h4>
            </div>
        </div>
    </div>
</div>
<section id="layanan" class="layanan" style="margin-top: 80px;">
	<div class="row g-3">
		<div class="col-3">
			<a href="#" class=" text-decoration-none">
			<div class="menu-item rounded shadow-sm">
				<img class="d-block m-auto mb-2 mt-1" src="<?=base_url('assets_mobile/img/ic/relawan.png')?>" height="40">
				<p class="text-center">Relawan</p>
			</div>
			</a>
		</div>
		<div class="col-3">
			<a href="#" class=" text-decoration-none">
			<div class="menu-item rounded shadow-sm">
				<img class="d-block m-auto mb-2 mt-1" src="<?=base_url('assets_mobile/img/ic/kejadian.png')?>" height="40">
				<p class="text-center">Potensi Bencana</p>
			</div>
			</a>
		</div>
		<div class="col-3">
			<a href="#" class=" text-decoration-none">
			<div class="menu-item rounded shadow-sm">
				<img class="d-block m-auto mb-2 mt-1" src="<?=base_url('assets_mobile/img/ic/resiko.png')?>" height="40">
				<p class="text-center">Resiko</p>
			</div>
			</a>
		</div>
		<div class="col-3">
			<a href="#" class=" text-decoration-none">
			<div class="menu-item rounded shadow-sm">
				<img class="d-block m-auto mb-2 mt-1" src="<?=base_url('assets_mobile/img/ic/tsunami.png')?>" height="40">
				<p class="text-center">Kejadian Bencana</p>
			</div>
			</a>
		</div>
		<div class="col-3">
			<a href="#" class=" text-decoration-none">
			<div class="menu-item rounded shadow-sm">
				<img class="d-block m-auto mb-2 mt-1" src="<?=base_url('assets_mobile/img/ic/tent.png')?>" height="40">
				<p class="text-center">Posko Relawan</p>
			</div>
			</a>
		</div>
		<div class="col-3">
			<a href="#" class=" text-decoration-none">
			<div class="menu-item rounded shadow-sm">
				<img class="d-block m-auto mb-2 mt-1" src="<?=base_url('assets_mobile/img/ic/call.png')?>" height="40">
				<p class="text-center">Nomor Darurat</p>
			</div>
			</a>
		</div>
		<div class="col-3">
			<a href="#" class=" text-decoration-none">
			<div class="menu-item rounded shadow-sm">
				<img class="d-block m-auto mb-2 mt-1" src="<?=base_url('assets_mobile/img/ic/network.png')?>" height="40">
				<p class="text-center">Jejaring Lembaga</p>
			</div>
			</a>
		</div>
		<!-- <div class="col-3">
			<a href="#" class=" text-decoration-none">
			<div class="menu-item rounded shadow-sm">
				<img class="d-block m-auto mb-2 mt-1" src="<?=base_url('assets_mobile/img/ic/donasi.png')?>" height="40">
				<p class="text-center">Donasi</p>
			</div>
			</a>
		</div> -->
		<div class="col-3">
			<a href="#" class=" text-decoration-none">
			<div class="menu-item rounded shadow-sm">
				<img class="d-block m-auto mb-2 mt-1" src="<?=base_url('assets_mobile/img/ic/information.png')?>" height="40">
				<p class="text-center">Tentang Kami</p>
			</div>
			</a>
		</div>
	</div>
</section>
<?php $this->load->view('layout/end.php') ?>
