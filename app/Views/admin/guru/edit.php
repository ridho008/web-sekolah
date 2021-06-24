<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Edit Data Guru <?= $guru['nama_guru']; ?></h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <?= form_open_multipart('/admin/guru/update/' . $guru['id']); ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="nidn">NIDN</label>
                        <input type="text" name="nidn" id="nidn" class="form-control" required value="<?= $guru['nidn']; ?>">
                     </div>
                     <div class="form-group">
                        <label for="nama_guru">Nama Lengkap</label>
                        <input type="text" name="nama_guru" id="nama_guru" class="form-control" required value="<?= $guru['nama_guru']; ?>">
                     </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required value="<?= $guru['email']; ?>">
                     </div>
                     <div class="form-group">
                        <label for="foto_guru">Foto</label><br>
                        <img src="<?= base_url('img/guru/' . $guru['foto_guru']) ?>" alt="" class="img-fluid">
                        <input type="file" name="foto_guru" id="foto_guru" class="form-control">
                        <input type="text" name="foto_guru_lama" id="foto_guru_lama" class="form-control" required value="<?= $guru['foto_guru']; ?>">
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