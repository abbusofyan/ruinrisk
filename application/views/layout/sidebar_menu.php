<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a href="<?= base_url('/home') ?>" class="<?= $this->router->fetch_class() == 'home' ? 'menu-active' : '' ?>">Home</a>
	<a href="#">Relawan</a>
	<a href="#">Kejadian</a>
	<a href="<?= base_url('/potensi') ?>" class="<?= $this->router->fetch_class() == 'potensi' ? 'menu-active' : '' ?>">Potensi</a>
	<a href="#">Bencana Alam</a>
	<a href="#">Posko Relawan</a>
	<a href="#">Nomor Darurat</a>
	<a href="#">Jejaring Lembaga</a>
	<a href="#">Donasi</a>
	<a href="<?= base_url('/account') ?>" class="<?= $this->router->fetch_class() == 'account' ? 'menu-active' : '' ?>">Akun</a>
</div>

<!-- <input type="checkbox"/>
<span></span>
<span></span>
<span></span> -->
<div class="d-flex justify-content-between pt-3 pb-1">
	<span style="font-size:30px;cursor:pointer; color:white; margin-left:25px;" onclick="openNav()">&#9776; </span>
	<a class="navbar-brand" href="<?= base_url() ?>">
		<img src="<?= base_url('assets_mobile/img/lg-rr.png') ?>" alt="" height="40" class="mr-4">
	</a>
</div>