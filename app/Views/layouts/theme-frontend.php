<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('frontend/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('frontend/css/style.css') ?>">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icons -->
    <link href="<?= base_url('frontend/vendor/fontawesome/css/all.css') ?>" rel="stylesheet">

    <title><?= $title ?></title>
  </head>
  <body>
    
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>">
        <img src="<?= base_url('frontend/img/logo.png') ?>" width="50" height="50" class="d-inline-block" alt="">
        SMAN 1 Rangsang
      </a>
      <div class="collapse navbar-collapse mt-1" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item<?= (uri_string() == '/' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?= base_url('') ?>">Beranda</a>
            </li>
            <li class="nav-item<?= (uri_string() == 'galeri' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?= base_url('galeri'); ?>">Galeri</a>
            </li>
            <li class="nav-item">
              <?php if(session()->get('id')) : ?>
              <a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">Dashboard</a>
            <?php else: ?>
              <a class="nav-link" href="<?= base_url('login'); ?>">Masuk</a>
            <?php endif; ?>
            </li>
            <li class="nav-item mr-1">
              <img src="<?= base_url('img/pengaturan/' . $setting['logo_akreditasi']) ?>" width="50" height="50" class="d-inline-block" alt="">
            </li>
            <li class="nav-item mr-1">
              <img src="<?= base_url('img/pengaturan/' . $setting['logo_kabupaten']) ?>" width="50" height="50" class="d-inline-block" alt="">
            </li>
            <li class="nav-item">
              <img src="<?= base_url('img/pengaturan/' . $setting['logo_wilayah']) ?>" width="50" height="50" class="d-inline-block" alt="">
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

    <?= $this->renderSection('content-frontend') ?>

    <!-- Footer -->
    <footer>
      <div class="content">
        <div class="top">
          <div class="logo-details">
            <!-- <i class="fab fa-slack"></i> -->
            <img src="<?= base_url('frontend/img/logo.png') ?>" width="50" height="50" class="d-inline-block" alt="">
            <span class="logo_name">SMAN 1 Rangsang</span>
          </div>
          <div class="media-icons">
            <a href="<?= $setting['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
            <a href="<?= $setting['twitter'] ?>"><i class="fab fa-twitter"></i></a>
            <a href="<?= $setting['instagram'] ?>"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="link-boxes">
          <ul class="box">
            <li class="link_name">Berita</li>
            <?php foreach($berita as $b) : ?>
            <li><a href="<?= base_url('berita/' . $b['id']) ?>"><?= $b['judul'] ?></a></li>
            <?php endforeach; ?>
          </ul>
          <ul class="box">
            <li class="link_name">Fasilitas</li>
            <?php foreach($fasilitas as $f) : ?>
            <li><a href="#"><?= $f['fasilitas'] ?></a></li>
            <?php endforeach; ?>
          </ul>
          <ul class="box">
            <li class="link_name">Ekstrakurikuler</li>
            <?php foreach($ekstra as $e) : ?>
            <li><a href="#"><?= $e['ekstrakurikuler'] ?></a></li>
            <?php endforeach; ?>
          </ul>
          <ul class="box">
            <li class="link_name">Alamat</li>
            <li><a href="#">HTML & CSS</a></li>
            <li><a href="#">JavaScript</a></li>
            <li><a href="#">Photography</a></li>
            <li><a href="#">Photoshop</a></li>
          </ul>
          <ul class="box input-box">
            <li class="link_name">Subscribe</li>
            <li><input type="text" placeholder="Enter your email"></li>
            <li><input type="button" value="Subscribe"></li>
          </ul>
        </div>
      </div>
      <div class="bottom-details">
        <div class="bottom_text">
          <span class="copyright_text">Copyright © 2021 <a href="#">SMAN 1 RANGSANG.</a>All rights reserved</span>
          <span class="policy_terms">
            <a href="#">Privacy policy</a>
            <a href="#">Terms & condition</a>
          </span>
        </div>
      </div>
    </footer>


    
    <script src="<?= base_url('frontend/js/jquery-3.5.1.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('frontend/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('frontend/vendor/sweetalert2/dist/sweetalert2.all.min.js') ?>"></script>
    <script>
      function fitur_belum_dibuat()
      {
        Swal.fire({
          title: 'Maaf!',
          text: 'Fitur Belum Dibuat!',
          icon: 'warning',
          confirmButtonText: 'Terima Kasih'
        })
      }

      // Kepala Sekolah
      // wait for the entire page to finish loading
      window.addEventListener('load', function() {
        
        // setTimeout to simulate the delay from a real page load
        setTimeout(lazyLoad, 1000);
        
      });

      function lazyLoad() {
        var card_images = document.querySelectorAll('.card-image');
        
        // loop over each card image
        card_images.forEach(function(card_image) {
          var image_url = card_image.getAttribute('data-image-full');
          var content_image = card_image.querySelector('img');
          
          // change the src of the content image to load the new high res photo
          content_image.src = image_url;
          
          // listen for load event when the new photo is finished loading
          content_image.addEventListener('load', function() {
            // swap out the visible background image with the new fully downloaded photo
            card_image.style.backgroundImage = 'url(' + image_url + ')';
            // add a class to remove the blur filter to smoothly transition the image change
            card_image.className = card_image.className + ' is-loaded';
          });
          
        });
        
      }

      // Kontak KAMI
      const tombolKirim = document.getElementById('kirim');
      tombolKirim.addEventListener('click', function() {
        Swal.fire(
          'Terima Kasih!',
          'Silahkan Tunggu Balasan Melalui Email Anda!',
          'success'
        )
        
        window.onload = function() {
          const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              }
            })

            Toast.fire({
              icon: 'success',
              title: 'Kirim pesan berhasil'
            })
        }
      });



      
      


    </script>
  </body>
</html>
