<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Tambah Data Galeri</h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <?= form_open_multipart('/admin/galeri/create') ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="nama_galeri">Nama Galeri</label>
                        <input type="text" name="nama_galeri" id="nama_galeri" class="form-control" required>
                     </div>
                     <div class="form-group">
                        <label for="foto_galeri">Foto</label>
                        <input type="file" name="foto_galeri" id="foto_galeri" class="form-control-file">
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