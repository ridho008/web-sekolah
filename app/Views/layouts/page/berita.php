<?= $this->extend('layouts/theme-frontend') ?>
<?= $this->section('content-frontend') ?>

<div class="container">
   <div class="row mt-5">
      <div class="col-md-8">
         <img src="<?= base_url('img/artikel/' . $berita['foto_artikel']) ?>" alt="" class="img-fluid">
         <h4><?= $berita['judul'] ?></h4>
         <hr>
         <?= $berita['isi'] ?>
      </div>
      <div class="col-md-4">
         <h5>Pendaftaran Peserta Didik Baru</h5>
         <img src="<?= base_url('img/pengumuman/' . $info['foto_pengumuman']) ?>" style="width: 100%;">
      </div>
   </div>
</div>
<?= $this->endSection() ?>