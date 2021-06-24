<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Kelas</h1>

   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6">
            <a href="<?= base_url('admin/kelas/new'); ?>" class="btn btn-primary">Tambah Data Kelas</a>
         </div>
      </div>
      <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Semua Kelas</h6>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="m-0 font-weight-bold table">
                  <thead class="bg-primary text-light">
                     <tr>
                        <th>No</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Kouta</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $no = 1; foreach($kelas as $k) : ?>
                     <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $k['nama_kelas']; ?></td>
                        <td><?= $k['jurusan']; ?></td>
                        <td><?= $k['kouta']; ?></td>
                        <td>
                           <a href="<?= base_url('admin/kelas/edit/' . $k['id']) ?>" class="btn btn-info">Edit</a>
                           <a href="<?= base_url('admin/kelas/delete/' . $k['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a>
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