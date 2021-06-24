<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Kepala Sekolah</h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Kepala Sekolah</h6>
         </div>
         <div class="card-body">
            <?= form_open_multipart('admin/kepsek/update/' . $kepsek['id']); ?>
            <div class="row">
               <div class="col-md-4">
                  <img src="<?= base_url('img/kepsek/' . $kepsek['foto_kepsek']) ?>" class="img-fluid">
                  <div class="form-group">
                     <input type="file" name="foto_kepsek" id="foto_kepsek" class="form-control-file">
                     <input type="hidden" name="foto_kepsek_lama" id="foto_kepsek_lama" class="form-control" value="<?= $kepsek['foto_kepsek'] ?>">
                  </div>
               </div>
               <div class="col-md-8">
                  
                     <div class="form-group">
                        <label for="nama_kepsek">Nama Kepala Sekolah</label>
                        <input type="text" name="nama_kepsek" id="nama_kepsek" class="form-control" required value="<?= $kepsek['nama_kepsek'] ?>">
                     </div>
                     <div class="form-group">
                        <label for="kata_sambutan">Kata Sambutan</label>
                        <textarea name="kata_sambutan" id="isi" class="form-control" value="Kata Sambutan"><?= $kepsek['kata_sambutan'] ?></textarea>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                     </div>
                  
               </div>
            </div>
            <?= form_close(); ?>
         </div>
      </div>
   </div>
<?= $this->endSection() ?>