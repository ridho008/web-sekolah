<?= $this->extend('layouts/theme-frontend') ?>
<?= $this->section('content-frontend') ?>

<div class="jumbotron-fluid p-4" style="background-color: #84b4b1;color: #fff;">
   <div class="row">
      <div class="col-md-12">
         <h1 class="text-center display-4"><?= $info['judul_pengumuman'] ?></h1>
         <h4 class="text-center">[ SMAN 1 RANGSANG ]</h4>
      </div>
   </div>
</div>

<div class="container">
   <div class="row">
      <div class="col-md-6 mt-4">
         <h4>Alur Pendaftaran Online</h4>
         <img src="<?= base_url('img/pengumuman/' . $info['foto_pengumuman']) ?>" class="img-fluid">
      </div>
      <div class="col-md-6 mt-4">
         <?= $info['isi_pengumuman'] ?>
      </div>
   </div>
</div>

<?= $this->endSection() ?>