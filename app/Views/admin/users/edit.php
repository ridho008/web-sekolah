<?= $this->extend('layouts/theme-backend') ?>

<?= $this->section('content') ?>
   <h1 class="h3 mb-4 text-gray-800">Edit Data User <?= $user['nama']; ?></h1>

   <div class="container-fluid">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <?= form_open('/admin/users/update/' . $user['id']) ?>
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" class="form-control" required value="<?= $user['email'] ?>">
                     </div>
                     <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control" required value="<?= $user['nama'] ?>">
                     </div>
                     <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required value="<?= $user['username'] ?>">
                     </div>
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                     </div>
                     <div class="form-group">
                        <label for="password">Hak Akses</label>
                        <select name="roles" id="roles" class="form-control">
                           <option value="">-- Hak Akses --</option>
                           <option value="0" <?php if($user['roles'] === '0'){echo "selected";} ?>>Administrator</option>
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