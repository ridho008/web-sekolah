<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Guru</h1>

   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6">
            <a href="<?= base_url('admin/guru/new'); ?>" class="btn btn-primary">Tambah Data Guru</a>
         </div>
      </div>
      <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Semua Guru</h6>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="m-0 font-weight-bold table">
                  <thead class="bg-primary text-light">
                     <tr>
                        <th>No</th>
                        <th>NIDN</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $no = 1; foreach($gurus as $guru) : ?>
                     <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $guru['nidn']; ?></td>
                        <td><?= $guru['nama_guru']; ?></td>
                        <td><?= $guru['email']; ?></td>
                        <td>
                           <img src="<?= base_url('img/guru/' . $guru['foto_guru']) ?>" width="50" class="img-fluid">
                        </td>
                        <td>
                           <a href="<?= base_url('admin/guru/edit/' . $guru['id']) ?>" class="btn btn-info">Edit</a>
                           <a href="<?= base_url('admin/guru/delete/' . $guru['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a>
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