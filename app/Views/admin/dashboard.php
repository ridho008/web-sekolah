<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Dashborad</h1>
   <div class="jumbotron">
     <h1 class="display-4"><strong>Selamat Datang</strong></h1>
     <p class="lead">Aplikasi website sekolah</p>
     <hr class="my-4">
     <p>Sedang Tahap Pengembangan</p>
     <?= session()->get('id'); ?>
     <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
   </div>
<?= $this->endSection() ?>