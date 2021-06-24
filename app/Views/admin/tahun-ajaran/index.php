<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Tahun Ajaran</h1>

   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6">
            <a href="<?= base_url('admin/tahunajaran/new'); ?>" class="btn btn-primary">Tambah Data Tahun Ajaran</a>
         </div>
      </div>
      <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Semua Tahun</h6>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="m-0 font-weight-bold table">
                  <thead class="bg-primary text-light">
                     <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Status</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $no = 1; foreach($tahun as $t) : ?>
                     <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $t['tahun_ajaran']; ?></td>
                        <td><?= ($t['status'] === 0 ? 'Tidak Aktif' : 'Sedang Aktif'); ?>
                           <?php if($t['status'] == null || 0) : ?>
                           <a href="/admin/tahunajaran/active/<?= $t['id']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-check"></i> Aktifkan</a>
                           <?php else : ?>
                            <small class="badge badge-success">Sedang Aktif</small>
                            <?php endif; ?>
                        </td>
                        <td>
                           <a href="<?= base_url('admin/tahunajaran/edit/' . $t['id']) ?>" class="btn btn-info">Edit</a>
                           <a href="<?= base_url('admin/tahunajaran/delete/' . $t['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a>
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