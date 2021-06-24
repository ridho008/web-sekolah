<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Siswa</h1>

   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6">
            <a href="<?= base_url('admin/siswa/new'); ?>" class="btn btn-primary">Tambah Data Siswa</a>
         </div>
      </div>
      <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Semua Siswa</h6>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="m-0 font-weight-bold table">
                  <thead class="bg-primary text-light">
                     <tr>
                        <th>No</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $no = 1; foreach($siswas as $siswa) : ?>
                     <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $siswa['nisn']; ?></td>
                        <td><?= $siswa['nama_siswa']; ?></td>
                        <td><?= $siswa['tmp_lahir']; ?></td>
                        <td><?= $siswa['tgl_lahir']; ?></td>
                        <td><?= ($siswa['jk_siswa'] == 0 ? 'Pria' : 'Perempuan') ; ?></td>
                        <td><?= $siswa['no_telp']; ?></td>
                        <td><?= $siswa['alamat']; ?></td>
                        <td>
                           <a href="<?= base_url('admin/siswa/edit/' . $siswa['id']) ?>" class="btn btn-info">Edit</a>
                           <a href="<?= base_url('admin/siswa/delete/' . $siswa['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a>
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