<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Edit Data Materi <?= $materi['materi'] ?></h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-4">
                  <?= form_open_multipart('/admin/materi/update/' . $materi['id']) ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="materi">Judul Materi</label>
                        <input type="text" name="materi" id="materi" class="form-control" required value="<?= $materi['materi']; ?>">
                     </div>
                     <div class="form-group">
                        <label for="upload_materi">Upload</label><br>
                        <img src="<?= base_url('img/materi/' . $materi['upload_materi']) ?>" alt="" class="img-fluid">
                        <input type="file" name="upload_materi" id="upload_materi" class="form-control-file">
                        <input type="hidden" name="upload_materi_lama" id="upload_materi_lama" class="form-control-file" required value="<?= $materi['upload_materi']; ?>">
                     </div>
                     <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                     </div>
                  <?= form_close(); ?>
               </div>
               <div class="col-md-8">
                  <h4><?= $materi['materi']; ?></h4>
                  <div class="form-group">
                     <embed type="application/pdf" src="<?= base_url('img/materi/' . $materi['upload_materi']); ?>" width="600" height="400"></embed>
                  </div>
               </div>   
            </div>
         </div>
      </div>
   </div>
<?= $this->endSection() ?>