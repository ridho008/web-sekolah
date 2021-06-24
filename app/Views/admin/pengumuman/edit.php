<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Edit Data Pengumuman <?= $pengumuman['judul_pengumuman'] ?></h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <?= form_open_multipart('/admin/pengumuman/update/' . $pengumuman['id']) ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="judul_pengumuman">Judul Pengumuman</label>
                        <input type="text" name="judul_pengumuman" id="judul_pengumuman" class="form-control" required value="<?= $pengumuman['judul_pengumuman']; ?>">
                     </div>
                     <div class="form-group">
                        <label for="isi_pengumuman">Deskripsi</label>
                        <textarea name="isi_pengumuman" id="isi" class="form-control"><?= $pengumuman['isi_pengumuman'] ?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="foto_pengumuman">Foto</label><br>
                        <img src="<?= base_url('img/pengumuman/' . $pengumuman['foto_pengumuman']) ?>" alt="" class="img-fluid">
                        <input type="file" name="foto_pengumuman" id="foto_pengumuman" class="form-control">
                        <input type="hidden" name="foto_pengumuman_lama" id="foto_pengumuman_lama" class="form-control-file" required value="<?= $pengumuman['foto_pengumuman']; ?>">
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