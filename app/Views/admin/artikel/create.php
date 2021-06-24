<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Tambah Data Artikel</h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <?= form_open_multipart('/admin/artikel/create') ?>
               <?= csrf_field(); ?>
            <div class="row">
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="judul">Judul Artikel</label>
                           <input type="text" name="judul" id="judul" class="form-control" required>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="foto_artikel">Foto</label>
                           <input type="file" name="foto_artikel" id="foto_artikel" class="form-control-file">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="isi">Isi Artikel</label>
                           <textarea name="isi" id="isi" class="form-control" placeholder="isi artikel..."></textarea>
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

                  
                     
                     
                     
                     
                  
