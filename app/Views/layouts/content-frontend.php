<?= $this->extend('layouts/theme-frontend') ?>
<?= $this->section('content-frontend') ?>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('frontend/img/bg1.png') ?>" height="580" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>Selamat Datang</h2>
        <p>SMA NEGERI 1 RANGSANG</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('frontend/img/bg2.png') ?>" height="580" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Halaman Kelas</h5>
        <p></p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<nav class="nav-2 navbar-light bg-dark">
  <div class="nav">
    <ul class="nav-sendiri">
      <li><a href="<?= base_url('tentang') ?>" class="text-light">Visi & Misi</a></li>
      <li><a href="<?= base_url('pengumuman') ?>" class="text-light">Pengumuman</a></li>
      <li><a href="<?= base_url('materi') ?>" class="text-light">Materi</a></li>
    </ul>
  </div>
</nav>

<!-- Kata Pengatar Kepala Sekolah -->
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center mt-4 mb-4">
      <h3 class="font-weight-bold">Kata Pengantar Kepala Sekolah</h3>
      <hr class="hr-title">
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <!-- <div class="foto-kepsek">
        <img src="<?= base_url('frontend/img/kepsek.jpeg') ?>" alt="" class="img-fluid shadow-lg rounded">
        <div class="title-kepsek">
          <h6><?= $kepsek['nama_kepsek'] ?></h6>
        </div>
      </div> -->
      <div class="card-kepsek">
          <a class="card-image" href="#" target="_blank" style="background-image: url(<?= base_url('img/kepsek/' . $kepsek['foto_kepsek']) ?>);" data-image-full="<?= base_url('img/kepsek/' . $kepsek['foto_kepsek']) ?>">
            <img src="<?= base_url('img/kepsek/' . $kepsek['foto_kepsek']) ?>" alt="Psychopomp" />
          </a>
          <a class="card-description" href="#" target="_blank">
            <h2><?= $kepsek['nama_kepsek'] ?></h2>
            <p>Kepala Sekolah</p>
          </a>
        </div>
    </div>
    <div class="col-md-8 shadow-lg p-3 mb-5 bg-white rounded">
      <p><?= $kepsek['kata_sambutan'] ?></p>
    </div>
  </div>
</div>

<!-- Fasilitas -->
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center mt-4 mb-4">
      <h3 class="font-weight-bold">Fasilitas</h3>
      <hr class="hr-title">
    </div>
  </div>
  <div class="row">
    <?php foreach($fasilitas as $f) : ?>
      <div class="col-md-4">
        <div class="foto-fasilitas">
          <img src="<?= base_url('img/fasilitas/' . $f['foto_fasilitas']) ?>" alt="" class="img-fluid shadow-lg rounded">
          <div class="title-fasilitas">
            <h5 class="font-weight-bold"><?= $f['fasilitas'] ?></h5>
            <p><?= $f['deskripsi'] ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- Ekstrakurikuler -->
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-4 mb-4">
      <h3 class="font-weight-bold text-center">Ekstrakurikuler</h3>
      <hr class="hr-title">
    </div>
  </div>
  <div class="row">
    <?php foreach($ekstra as $e) : ?>
    <div class="col-md-6">
      <div class="container-ekstra">
          <img src="<?= base_url('img/ekstrakurikuler/' . $e['foto_ekstrakurikuler']) ?>" alt="Krishna Radhe">
          <div class="caption-ekstra">
              <h1><?= $e['ekstrakurikuler'] ?></h1>
              <p><?= $e['isi'] ?></p>
          </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- Berita -->
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-4 mb-4">
      <h3 class="font-weight-bold text-center">Berita</h3>
      <hr class="hr-title">
    </div>
  </div>
  <div class="row">
    <?php foreach($berita as $b) : ?>
    <div class="col-md-4">
      <div class="card shadow p-3 mb-5 bg-white rounded">
        <a href="<?= base_url('berita/' . $b['id']) ?>">
          <img src="<?= base_url('img/artikel/' . $b['foto_artikel']) ?>" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <h5 class="card-title"><a href="<?= base_url('berita/' . $b['id']) ?>"><?= $b['judul'] ?></a></h5>
          <p class="card-text"><?= $b['isi'] ?></p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><span>Penulis : Admin</span></li>
        </ul>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <!-- Button Lihat Lainnya -->
  <div class="row">
    <div class="col-md-12 text-center">
      <a href="" onclick="return fitur_belum_dibuat()" class="btn btn-outline-dark font-weight-bold">Lihat Lainnya</a>
    </div>
  </div>
</div>

<!-- Lokasi Sekolah -->
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5 mb-4">
      <h3 class="font-weight-bold text-center">Lokasi Sekolah</h3>
      <hr class="hr-title">
    </div>
  </div>
</div>
<div class="jumbotron-fluid">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.383591215028!2d103.07331929042495!3d0.8458130541394088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d7167db0a56e43%3A0xbb0c534b2d200b94!2sSMA%20Negeri%201%20Rangsang!5e0!3m2!1sid!2sid!4v1623817691468!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<!-- Daftar Sekolah -->
<div class="overlay2">
  <div class="header-daftar">
    <img src="<?= base_url('frontend/img/daftar-sekarang.jpg') ?>">
    <div class="title-daftar">
      <h1>AYO DAFTAR SEKARANG!</h1>
      <h1>SMAN 1 Rangsang</h1>
    </div>
    <div class="btn-daftar">
      <a href="#" onclick="return fitur_belum_dibuat()" class="btn btn-success shadow-lg p-2 mb-3 rounded">Daftar Sekarang</a>
    </div>
    <div class="body-daftar">
      <h2><?= $setting['visi'] ?></h2>
      <p class="lead"><?= $setting['misi'] ?></p>
    </div>
  </div>
</div>

<!-- Kontak -->
<div class="container text-light">
  <div class="row mt-5">
    <div class="col-md-6 bg-dark p-3">
      <div class="row">
        <div class="col-md-12 text-center">
          <h4>Kontak Kami</h4>
          <hr class="hr-kontak">
          <p>Ada Pertanyaan ? Hubungi Kami</p>
        </div>
      </div>
      <form action="<?= base_url('kirim_pesan') ?>" method="post">
      <div class="row shadow-lg p-2 mb-3 rounded">
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" placeholder="Nama Lengkap" class="form-control" required>
          </div>
          <div class="form-group">
            <input type="email" placeholder="Email Address" class="form-control" required>
          </div>
          <div class="form-group">
            <textarea name="pesan" id="pesan" class="form-control" required placeholder="Pesan Anda..."></textarea>
          </div>
          <div class="form-group">
            <button type="submit" id="kirim" onload="return kontakKami()" class="btn btn-success btn-block">Kirim</button>
          </div>
        </div>
      </div>
      </form>
    </div>
    <div class="col-md-6">
      <div class="item uncover">
          <img src="<?= base_url('frontend/img/gabung-kami.jpg') ?>" alt="image" style="">
          <div class="overlay-kontak">
            <span>"</span>
            <span>Segera Bergabung Dengan Kami.</span>
            <span></span>
            <span></span>
          </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>