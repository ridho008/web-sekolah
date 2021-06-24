<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Edit Data Kelas <?= $kelas['nama_kelas'] ?></h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <?= form_open('/admin/kelas/update/' . $kelas['id']) ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="nama_kelas">Nama Kelas</label>
                        <input type="nama_kelas" name="nama_kelas" id="nama_kelas" class="form-control" required value="<?= $kelas['nama_kelas']; ?>">
                     </div>
                     <div class="form-group">
                        <label for="jml_kelas">Jumlah Kelas</label>
                        <input type="number" name="jml_kelas" id="jml_kelas" class="form-control" required value="<?= $kelas['jml_kelas']; ?>">
                     </div>
                     <div class="form-group">
                        <label for="id_jurusan">Jurusan</label>
                        <select name="id_jurusan" id="id_jurusan" class="form-control">
                           <option value="">-- Pilih Jurusan --</option>
                           <?php foreach($jurusans as $jurusan) : ?>
                              <?php if($jurusan['id'] == $kelas['id_jurusan']) : ?>
                              <option value="<?= $jurusan['id']; ?>" selected><?= $jurusan['jurusan']; ?></option>
                           <?php else: ?>
                              <option value="<?= $jurusan['id']; ?>"><?= $jurusan['jurusan']; ?></option>
                           <?php endif; ?>
                           <?php endforeach; ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="kouta">Kouta</label>
                        <input type="number" name="kouta" id="kouta" class="form-control" required value="<?= $kelas['kouta']; ?>">
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