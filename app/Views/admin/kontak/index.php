<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Kontak Masuk</h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Semua Kontak</h6>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="m-0 font-weight-bold table">
                  <thead class="bg-primary text-light">
                     <tr>
                        <th>No</th>
                        <th>Pengirim</th>
                        <th>Email</th>
                        <th>Isi</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $no = 1; foreach($kontak as $g) : ?>
                     <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $g['nama']; ?></td>
                        <td><?= $g['email']; ?></td>
                        <td><?= $g['isi']; ?></td>
                        <td>
                           <a href="<?= base_url('admin/kontak/delete/' . $g['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a>
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