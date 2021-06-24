<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Tambah Data Guru</h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <?= form_open_multipart('/admin/guru/create') ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="nidn">NIDN</label>
                        <input type="text" name="nidn" id="nidn" class="form-control" required>
                     </div>
                     <div class="form-group">
                        <label for="nama_guru">Nama Lengkap</label>
                        <input type="text" name="nama_guru" id="nama_guru" class="form-control" required>
                     </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                     </div>
                     <div class="form-group">
                        <label for="foto_guru">Foto</label>
                        <input type="file" name="foto_guru" id="foto_guru" class="form-control">
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