<?= $this->extend('layouts/theme-frontend') ?>
<?= $this->section('content-frontend') ?>

<div class="jumbotron-fluid p-4" style="background-color: #84b4b1;color: #fff;">
   <div class="row">
      <div class="col-md-12">
         <h1 class="text-center display-2">GALERI</h1>
         <h4 class="text-center">[ SMAN 1 RANGSANG ]</h4>
      </div>
   </div>
</div>

<div class="container">
   <div class="row mt-5">
      <?php foreach($galeri as $g) : ?>
      <div class="col-md-4">
         <img id="myImg" src="<?= base_url('img/galeri/' . $g['foto_galeri']) ?>" alt="<?= $g['nama_galeri'] ?>" class="img-fluid" style="border-radius: 30px; width: 100%; height: 300px;object-fit: cover;">
      </div>
      <?php endforeach; ?>
   </div>
</div>
<?= $this->endSection() ?>