<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Edit Data Siswa <?= $siswa['nama_siswa']; ?></h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <?= form_open('/admin/siswa/update/' . $siswa['id']) ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input type="nisn" name="nisn" id="nisn" class="form-control" required value="<?= $siswa['nisn'] ?>">
                     </div>
                     <div class="form-group">
                        <label for="nama_siswa">Nama Lengkap</label>
                        <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" required value="<?= $siswa['nama_siswa'] ?>">
                     </div>
                     <div class="form-group">
                        <label for="tmp_lahir">Tempat Lahir</label>
                        <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control" required value="<?= $siswa['tmp_lahir'] ?>">
                     </div>
                     <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required value="<?= $siswa['tgl_lahir'] ?>">
                     </div>
                     <div class="form-group">
                        <label for="jk_siswa">Hak Akses</label>
                        <select name="jk_siswa" id="jk_siswa" class="form-control">
                           <option value="">-- Jenis Kelamin --</option>
                           <option value="0" <?= ($siswa['jk_siswa'] == 0 ? 'selected' : '') ?>>Pria</option>
                           <option value="1" <?= ($siswa['jk_siswa'] == 1 ? 'selected' : '') ?>>Perempuan</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="no_telp">Telepon</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control" required value="<?= $siswa['no_telp'] ?>">
                     </div>
                     <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control"><?= $siswa['alamat'] ?></textarea>
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