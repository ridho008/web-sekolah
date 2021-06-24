<?= $this->extend('layouts/theme-frontend') ?>
<?= $this->section('content-frontend') ?>

<div class="jumbotron-fluid p-4" style="background-color: #84b4b1;color: #fff;">
   <div class="row">
      <div class="col-md-12">
         <h1 class="text-center display-2">Materi</h1>
         <h4 class="text-center">[ SMAN 1 RANGSANG ]</h4>
      </div>
   </div>
</div>

<div class="container">
   <div class="row mt-5">
      <div class="col-md-12">
         <h3 class="text-center">Modul Mata Pelajaran</h3>
      </div>
   </div>
   <div class="row">
      <div class="col-md-8 offset-md-2">
         <div class="table-responsive">
            <table class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>No</th>
                     <th>Modul</th>
                     <th>Lihat</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $no = 1; foreach($materi as $m) : ?>
                     <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $m['materi']; ?></td>
                        <td>
                           <a href="<?= base_url('lihat/' . $m['id']) ?>" target="_blank">Lihat</a>
                        </td>
                     </tr>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<?= $this->endSection() ?>