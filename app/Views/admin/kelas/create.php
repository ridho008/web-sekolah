<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Tambah Data Kelas</h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <?= form_open('/admin/kelas/create') ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="nama_kelas">Nama Kelas</label>
                        <input type="nama_kelas" name="nama_kelas" id="nama_kelas" class="form-control" required>
                     </div>
                     <div class="form-group">
                        <label for="jml_kelas">Jumlah Kelas</label>
                        <input type="number" name="jml_kelas" id="jml_kelas" class="form-control" required>
                     </div>
                     <div class="form-group">
                        <label for="id_jurusan">Jurusan</label>
                        <select name="id_jurusan" id="id_jurusan" class="form-control">
                           <option value="">-- Pilih Jurusan --</option>
                           <?php foreach($jurusans as $jurusan) : ?>
                              <option value="<?= $jurusan['id']; ?>"><?= $jurusan['jurusan']; ?></option>
                           <?php endforeach; ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="kouta">Kouta</label>
                        <input type="number" name="kouta" id="kouta" class="form-control" required>
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