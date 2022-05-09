<?php $this->load->view('layout/start.php'); ?>

<div class="section full mt-2">
  <?php foreach ($weather->forecast->forecastday as $weather): ?>
    <div class="section-title"><?= $weather->date; ?></div>
    <div class="wide-block pt-2 pb-2">
      <img src="<?= $weather->day->condition->icon; ?>" alt="">
      <?= $weather->day->condition->text ?> <br>
      Suhu : <?= $weather->day->avgtemp_c; ?>
    </div>
  <?php endforeach; ?>
</div>

<?php include 'part/script.php'; ?>

<?php $this->load->view('layout/end.php') ?>
