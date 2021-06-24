<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Edit Data Galeri <?= $galeri['nama_galeri']; ?></h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <?= form_open_multipart('/admin/galeri/update/' . $galeri['id']) ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="nama_galeri">Nama Galeri</label>
                        <input type="text" name="nama_galeri" id="nama_galeri" class="form-control" required value="<?= $galeri['nama_galeri']; ?>">
                     </div>
                     <div class="form-group">
                        <label for="foto_galeri">Foto</label><br>
                        <img src="<?= base_url('img/galeri/' . $galeri['foto_galeri']) ?>" alt="" class="img-fluid">
                        <input type="file" name="foto_galeri" id="foto_galeri" class="form-control">
                        <input type="hidden" name="foto_galeri_lama" id="foto_galeri_lama" class="form-control-file" required value="<?= $galeri['foto_galeri']; ?>">
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