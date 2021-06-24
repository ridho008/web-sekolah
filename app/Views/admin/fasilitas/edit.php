<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Edit Data Fasilitas <?= $fasilitas['fasilitas']; ?></h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <?= form_open_multipart('/admin/fasilitas/update/' . $fasilitas['id']) ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="fasilitas">Fasilitas</label>
                        <input type="text" name="fasilitas" id="fasilitas" class="form-control" required value="<?= $fasilitas['fasilitas']; ?>">
                     </div>
                     <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="deskripsi..."><?= $fasilitas['deskripsi']; ?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="foto_fasilitas">Foto</label><br>
                        <img src="<?= base_url('img/fasilitas/' . $fasilitas['foto_fasilitas']) ?>" alt="" class="img-fluid">
                        <input type="file" name="foto_fasilitas" id="foto_fasilitas" class="form-control">
                        <input type="hidden" name="foto_fasilitas_lama" id="foto_fasilitas_lama" class="form-control" required value="<?= $fasilitas['foto_fasilitas']; ?>">
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