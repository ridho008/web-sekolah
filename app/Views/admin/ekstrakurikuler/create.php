<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Tambah Data Ekstrakurikuler</h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <?= form_open_multipart('/admin/ekstrakurikuler/create') ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="ekstrakurikuler">Ekstrakurikuler</label>
                        <input type="text" name="ekstrakurikuler" id="ekstrakurikuler" class="form-control" required>
                     </div>
                     <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="deskripsi..."></textarea>
                     </div>
                     <div class="form-group">
                        <label for="foto_ekstrakurikuler">Foto</label>
                        <input type="file" name="foto_ekstrakurikuler" id="foto_ekstrakurikuler" class="form-control-file">
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