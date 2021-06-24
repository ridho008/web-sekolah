<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Pengumuman</h1>

   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6">
            <a href="<?= base_url('admin/pengumuman/new'); ?>" class="btn btn-primary">Tambah Data Pengumuman</a>
         </div>
      </div>
      <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Semua Pengumuman</h6>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="m-0 font-weight-bold table">
                  <thead class="bg-primary text-light">
                     <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $no = 1; foreach($pengumuman as $p) : ?>
                     <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $p['judul_pengumuman']; ?></td>
                        <td><?= $p['isi_pengumuman']; ?></td>
                        <td>
                           <img src="<?= base_url('img/pengumuman/' . $p['foto_pengumuman']) ?>" width="50" class="img-fluid">
                        </td>
                        <td>
                           <a href="<?= base_url('admin/pengumuman/edit/' . $p['id']) ?>" class="btn btn-info">Edit</a>
                           <a href="<?= base_url('admin/pengumuman/delete/' . $p['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a>
                        </td>
                     </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
<?= $this->endSection() ?>