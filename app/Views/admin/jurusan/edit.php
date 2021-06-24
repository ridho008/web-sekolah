<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Edit Data Jurusan <?= $jurusan['jurusan']; ?></h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <?= form_open('/admin/jurusan/update/' . $jurusan['id']) ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="jurusan">Nama Jurusan</label>
                        <input type="text" name="jurusan" id="jurusan" class="form-control" required value="<?= $jurusan['jurusan']; ?>">
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