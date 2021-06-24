<?= $this->extend('layouts/theme-frontend') ?>
<?= $this->section('content-frontend') ?>

<div class="jumbotron-fluid p-4" style="background-color: #84b4b1;color: #fff;">
   <div class="row">
      <div class="col-md-12">
         <h1 class="text-center display-2">Tentang Kami</h1>
         <h4 class="text-center">[ SMAN 1 RANGSANG ]</h4>
      </div>
   </div>
</div>

<div class="container text-center">
   <div class="row mt-5">
      <div class="col-md-12">
         <h2>Visi</h2>
         <hr>
         <?= $setting['visi']; ?>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12 mt-2">
         <h2 class="text-center">Misi</h2>
         <hr>
         <?= $setting['misi']; ?>
      </div>
   </div>
</div>
<?= $this->endSection() ?>