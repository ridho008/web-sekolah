<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Tambah Data Tahun Ajaran</h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <?= form_open('/admin/tahunajaran/create') ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="tahun_ajaran">Tahun Ajaran</label>
                        <select name="tahun_ajaran" id="tahun_ajaran" class="form-control">
                           <option value="">-- Pilih Tahun Ajaran --</option>
                           <?php for($i = 2015; $i <= date('Y'); $i++) : ?>
                              <option value="<?= $i . "/" . $i+1; ?>"><?= $i . "/" . $i+1; ?></option>
                           <?php endfor; ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                           <option value="">-- Pilih Status --</option>
                              <option value="0">Tidak Aktif</option>
                              <option value="1">Aktif</option>
                        </select>
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