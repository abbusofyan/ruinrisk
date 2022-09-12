<div class="tab-nav-container">
<a href="<?= base_url() ?>">
    <div class="tab-menu <?= $this->router->fetch_class() == 'home' ? 'active' : '' ?>">
        <i class='btm-btn-ic bx bx-home-smile bx-sm'></i>
        <p class="pt-3">Home</p>
    </div>
</a>
<div class="tab-menu pink">
    <i class='btm-btn-ic bx bx-message-square-dots bx-sm'></i>
    <p class="pt-3">Pesan</p>
</div>
<div class="tab-menu yellow">
    <i class='btm-btn-ic bx bxs-bell-ring bx-sm'></i>
    <p class="pt-3">Darurat</p>
</div>
<a href="<?= base_url('/cuaca') ?>">
    <div class="tab-menu <?= $this->router->fetch_class() == 'cuaca' ? 'active' : '' ?>">
        <i class='btm-btn-ic bx bx-sun bx-sm'></i>
        <p class="pt-3">Cuaca</p>
    </div>
</a>
<a href="<?= base_url('/account') ?>">
    <div class="tab-menu <?= $this->router->fetch_class() == 'account' ? 'active' : '' ?>">
        <i class='btm-btn-ic bx bx-user bx-sm'></i>
        <p class="pt-3">Akun</p>
    </div>
</a>
</div>

<br>
<br>
<br>