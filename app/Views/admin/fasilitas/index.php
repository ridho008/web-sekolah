<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Fasilitas</h1>

   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6">
            <a href="<?= base_url('admin/fasilitas/new'); ?>" class="btn btn-primary">Tambah Data Fasilitas</a>
         </div>
      </div>
      <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Semua Fasilitas</h6>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="m-0 font-weight-bold table">
                  <thead class="bg-primary text-light">
                     <tr>
                        <th>No</th>
                        <th>Fasilitas</th>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $no = 1; foreach($fasilitas as $f) : ?>
                     <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $f['fasilitas']; ?></td>
                        <td><?= $f['deskripsi']; ?></td>
                        <td>
                           <img src="<?= base_url('img/fasilitas/' . $f['foto_fasilitas']) ?>" width="50" class="img-fluid">
                        </td>
                        <td>
                           <a href="<?= base_url('admin/fasilitas/edit/' . $f['id']) ?>" class="btn btn-info">Edit</a>
                           <a href="<?= base_url('admin/fasilitas/delete/' . $f['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a>
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