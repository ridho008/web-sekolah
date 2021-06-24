<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Edit Data Artikel <?= $artikel['judul']; ?></h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <?= form_open_multipart('/admin/artikel/update/' . $artikel['id']) ?>
               <?= csrf_field(); ?>
            <div class="row">
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="judul">Judul Artikel</label>
                           <input type="text" name="judul" id="judul" class="form-control" required value="<?= $artikel['judul']; ?>">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label for="foto_artikel">Foto</label>
                           <input type="file" name="foto_artikel" id="foto_artikel" class="form-control-file">
                           <input type="hidden" name="foto_artikel_lama" id="foto_artikel_lama" class="form-control-file" value="<?= $artikel['foto_artikel']; ?>">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <img src="<?= base_url('img/artikel/' . $artikel['foto_artikel']) ?>" width="200" class="img-fluid">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="isi">Isi Artikel</label>
                           <textarea name="isi" id="isi" class="form-control" placeholder="isi artikel..."><?= $artikel['isi']; ?></textarea>
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?= form_close(); ?>
         </div>
      </div>
   </div>
<?= $this->endSection() ?>

                  
                     
                     
                     
                     
                  
