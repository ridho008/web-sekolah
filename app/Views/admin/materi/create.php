<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Tambah Data Materi</h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <?= form_open_multipart('/admin/materi/create') ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="materi">Judul Materi</label>
                        <input type="text" name="materi" id="materi" class="form-control" required>
                     </div>
                     <div class="form-group">
                        <label for="upload_materi">Upload</label>
                        <input type="file" name="upload_materi" id="upload_materi" class="form-control-file">
                     </div>
                     <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                     </div>
                  <?= form_close(); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
<?= $this->endSection() ?>