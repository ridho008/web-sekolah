<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Edit Data Ekstrakurikuler <?= $ekstrakurikuler['ekstrakurikuler']; ?></h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <?= form_open_multipart('/admin/ekstrakurikuler/update/' . $ekstrakurikuler['id']) ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="ekstrakurikuler">Ekstrakurikuler</label>
                        <input type="text" name="ekstrakurikuler" id="ekstrakurikuler" class="form-control" required value="<?= $ekstrakurikuler['ekstrakurikuler']; ?>">
                     </div>
                     <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="deskripsi..."><?= $ekstrakurikuler['isi']; ?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="foto_ekstrakurikuler">Foto</label><br>
                        <img src="<?= base_url('img/ekstrakurikuler/' . $ekstrakurikuler['foto_ekstrakurikuler']) ?>" alt="" class="img-fluid">
                        <input type="file" name="foto_ekstrakurikuler" id="foto_ekstrakurikuler" class="form-control">
                        <input type="text" name="foto_ekstrakurikuler_lama" id="foto_ekstrakurikuler_lama" class="form-control" required value="<?= $ekstrakurikuler['foto_ekstrakurikuler']; ?>">
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