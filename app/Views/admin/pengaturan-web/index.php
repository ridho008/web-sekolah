<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Pengaturan Website</h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Pengaturan Website</h6>
         </div>
         <div class="card-body">
            <?= form_open_multipart('/admin/pengaturanweb/update/' . $pengaturan['id']) ?>
            <?= csrf_field(); ?>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="nama_website">Nama Website</label>
                     <input type="text" name="nama_website" id="nama_website" class="form-control" required value="<?= ($pengaturan['nama_website'] ? $pengaturan['nama_website'] : 'Wajib Diisi.') ?>">
                  </div>
                  <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" name="email" id="email" class="form-control" required value="<?= ($pengaturan['email'] ? $pengaturan['email'] : 'Wajib Diisi.') ?>">
                  </div>
                  <div class="form-group">
                     <label for="no_telp">Telepon</label>
                     <input type="number" name="no_telp" id="no_telp" class="form-control" required value="<?= ($pengaturan['no_telp'] ? $pengaturan['no_telp'] : 'Wajib Diisi.') ?>">
                  </div>
                  <div class="form-group">
                     <label for="no_whatsapp">No.Whatsapp</label>
                     <input type="number" name="no_whatsapp" id="no_whatsapp" class="form-control" required value="<?= ($pengaturan['no_whatsapp'] ? $pengaturan['no_whatsapp'] : 'Wajib Diisi.') ?>">
                  </div>
                  <div class="form-group">
                     <label for="facebook">Facebook</label>
                     <input type="text" name="facebook" id="facebook" class="form-control" required value="<?= ($pengaturan['facebook'] ? $pengaturan['facebook'] : 'Wajib Diisi.') ?>" placeholder="Link Facebook">
                  </div>

                  <div class="form-group">
                     <label for="twitter">Twitter</label>
                     <input type="text" name="twitter" id="twitter" class="form-control" required value="<?= ($pengaturan['twitter'] ? $pengaturan['twitter'] : 'Wajib Diisi.') ?>" placeholder="Link Twitter">
                  </div>
                  <div class="form-group">
                     <label for="instagram">Instagram</label>
                     <input type="text" name="instagram" id="instagram" class="form-control" required value="<?= ($pengaturan['instagram'] ? $pengaturan['instagram'] : 'Wajib Diisi.') ?>" placeholder="Link Instagram">
                  </div>
                  <div class="form-group">
                     <label for="visi">Visi</label>
                     <textarea name="visi" id="isi" class="form-control"><?= ($pengaturan['visi'] ? $pengaturan['visi'] : 'Wajib Diisi.') ?></textarea>
                  </div>
                  <div class="form-group">
                     <label for="misi">Misi</label>
                     <textarea name="misi" id="misi" class="form-control"><?= ($pengaturan['misi'] ? $pengaturan['misi'] : 'Wajib Diisi.') ?></textarea>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="alamat">Alamat</label>
                     <textarea name="alamat" id="alamat" class="form-control"><?= ($pengaturan['alamat'] ? $pengaturan['alamat'] : 'Wajib Diisi.') ?></textarea>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="logo_sekolah">Logo Sekolah</label>
                           <input type="file" name="logo_sekolah" id="logo_sekolah" class="form-control-file"><br>
                           <input type="hidden" name="logo_sekolah_lama" id="logo_sekolah_lama" class="form-control-file" required value="<?= $pengaturan['logo_sekolah']; ?>">
                           <img src="<?= base_url('img/pengaturan/' . ($pengaturan['logo_sekolah'] ? $pengaturan['logo_sekolah'] : 'default.png')) ?>" width="150" class="img-fluid">
                        </div>
                        <div class="form-group">
                           <label for="logo_akreditasi">Logo Akreditasi</label>
                           <input type="file" name="logo_akreditasi" id="logo_akreditasi" class="form-control-file"><br>
                           <input type="hidden" name="logo_akreditasi_lama" id="logo_akreditasi_lama" class="form-control-file" required value="<?= $pengaturan['logo_akreditasi']; ?>">
                           <img src="<?= base_url('img/pengaturan/' . ($pengaturan['logo_akreditasi'] ? $pengaturan['logo_akreditasi'] : 'default.png')) ?>" width="150" class="img-fluid">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="logo_wilayah">Logo Wilayah</label>
                           <input type="file" name="logo_wilayah" id="logo_wilayah" class="form-control-file"><br>
                           <input type="hidden" name="logo_wilayah_lama" id="logo_wilayah_lama" class="form-control-file" required value="<?= $pengaturan['logo_wilayah']; ?>">
                           <img src="<?= base_url('img/pengaturan/' . ($pengaturan['logo_wilayah'] ? $pengaturan['logo_wilayah'] : 'default.png')) ?>" width="150" class="img-fluid">
                        </div>
                        <div class="form-group">
                           <label for="logo_kabupaten">Logo Kabupaten</label>
                           <input type="file" name="logo_kabupaten" id="logo_kabupaten" class="form-control-file"><br>
                           <input type="hidden" name="logo_kabupaten_lama" id="logo_kabupaten_lama" class="form-control-file" required value="<?= $pengaturan['logo_kabupaten']; ?>">
                           <img src="<?= base_url('img/pengaturan/' . ($pengaturan['logo_kabupaten'] ? $pengaturan['logo_kabupaten'] : 'default.png')) ?>" width="150" class="img-fluid">
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                  </div>
               </div>
            </div>
         <?= form_close(); ?>
         </div>
      </div>
   </div>
<?= $this->endSection() ?>