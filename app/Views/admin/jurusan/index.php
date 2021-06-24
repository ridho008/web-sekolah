<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Jurusan</h1>

   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6">
            <a href="<?= base_url('admin/jurusan/new'); ?>" class="btn btn-primary">Tambah Data Jurusan</a>
         </div>
      </div>
      <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Semua Jurusan</h6>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="m-0 font-weight-bold table">
                  <thead class="bg-primary text-light">
                     <tr>
                        <th>No</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $no = 1; foreach($jurusans as $jurusan) : ?>
                     <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $jurusan['jurusan']; ?></td>
                        <td>
                           <a href="<?= base_url('admin/jurusan/edit/' . $jurusan['id']) ?>" class="btn btn-info">Edit</a>
                           <a href="<?= base_url('admin/jurusan/delete/' . $jurusan['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a>
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