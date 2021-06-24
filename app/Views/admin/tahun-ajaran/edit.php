<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Edit Data Tahun Ajaran <?= $tahun['tahun_ajaran']; ?></h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <?= form_open('/admin/tahunajaran/update/' . $tahun['id']) ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="tahun_ajaran">tahun_ajaran</label>
                        <select name="tahun_ajaran" id="tahun_ajaran" class="form-control">
                           <option value="">-- Pilih Tahun Ajaran --</option>
                           <?php for($i = 2015; $i <= date('Y'); $i++) : ?>
                              <?php if($tahun['tahun_ajaran'] == $i . "/" . $i+1) : ?>
                              <option value="<?= $i . "/" . $i+1; ?>" selected><?= $i . "/" . $i+1; ?></option>
                           <?php else : ?>
                              <option value="<?= $i . "/" . $i+1; ?>"><?= $i . "/" . $i+1; ?></option>
                           <?php endif; ?>
                           <?php endfor; ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                           <option value="">-- Pilih Status --</option>
                              <option value="0" <?= ($tahun['status'] == 0 ? 'selected' : '') ?>>Tidak Aktif</option>
                              <option value="1" <?= ($tahun['status'] == 1 ? 'selected' : '') ?>>Aktif</option>
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