<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Tambah Data Pengumuman</h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <?= form_open_multipart('/admin/pengumuman/create') ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="judul_pengumuman">Judul Pengumuman</label>
                        <input type="text" name="judul_pengumuman" id="judul_pengumuman" class="form-control" required>
                     </div>
                     <div class="form-group">
                        <label for="isi_pengumuman">Deskripsi</label>
                        <textarea name="isi_pengumuman" id="isi" class="form-control"></textarea>
                     </div>
                     <div class="form-group">
                        <label for="foto_pengumuman">Foto</label>
                        <input type="file" name="foto_pengumuman" id="foto_pengumuman" class="form-control-file">
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