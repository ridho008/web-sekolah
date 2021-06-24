<?php 
use \App\Models\PengaturanwebModel;
$session = session();
$success = $session->getFlashdata('success');

$pengaturan = new PengaturanwebModel;
$infoSekolah = $pengaturan->first();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?> | Web Sekolah</title>

    <!-- Custom fonts for this template-->
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="/assets/vendor/ckeditor/ckeditor.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-graduation-cap"></i>
                    <!-- <img src="<?= base_url('img/pengaturan/' . $infoSekolah['logo_sekolah']) ?>" alt=""> -->
                </div>
                <div class="sidebar-brand-text mx-3"><?= $infoSekolah['nama_website']; ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>" target="_blank">
                    <i class="fas fa-fw fa-globe"></i>
                    <span>Website</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item<?= (uri_string() == 'admin/dashboard' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Master
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Custom Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Semua Data
            </div> -->

            <!-- Nav Item - Charts -->
            <li class="nav-item<?= (uri_string() == 'admin/users' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?= base_url('admin/users') ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Users</span></a>
            </li>

            <li class="nav-item<?= (uri_string() == 'admin/kepsek' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?= base_url('admin/kepsek') ?>">
                    <i class="fas fa-fw fa-user-graduate"></i>
                    <span>Kepsek</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item<?= (uri_string() == 'admin/guru' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?= base_url('admin/guru') ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Guru</span></a>
            </li>

            <li class="nav-item<?= (uri_string() == 'admin/siswa' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?= base_url('admin/siswa') ?>">
                    <i class="fas fa-fw fa-book-reader"></i>
                    <span>Siswa</span></a>
            </li>

            <li class="nav-item<?= (uri_string() == 'admin/kelas' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?= base_url('admin/kelas') ?>">
                    <i class="fas fa-fw fa-door-closed"></i>
                    <span>Kelas</span></a>
            </li>

            <li class="nav-item<?= (uri_string() == 'admin/fasilitas' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?= base_url('admin/fasilitas') ?>">
                    <i class="fas fa-fw fa-archway"></i>
                    <span>Fasilitas</span></a>
            </li>
            <li class="nav-item<?= (uri_string() == 'admin/jurusan' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?= base_url('admin/jurusan') ?>">
                    <i class="fas fa-fw fa-braille"></i>
                    <span>Jurusan</span></a>
            </li>
            <li class="nav-item<?= (uri_string() == 'admin/ekstrakurikuler' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?= base_url('admin/ekstrakurikuler') ?>">
                    <i class="fas fa-fw fa-boxes"></i>
                    <span>Ekstrakurikuler</span></a>
            </li>
            <li class="nav-item<?= (uri_string() == 'admin/artikel' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?= base_url('admin/artikel') ?>">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Artikel</span></a>
            </li>

            <li class="nav-item<?= (uri_string() == 'admin/galeri' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?= base_url('admin/galeri') ?>">
                    <i class="fas fa-fw fa-th"></i>
                    <span>Galeri</span></a>
            </li>

            <li class="nav-item<?= (uri_string() == 'admin/pengumuman' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?= base_url('admin/pengumuman') ?>">
                    <i class="fas fa-fw fa-info-circle"></i>
                    <span>Pengumuman</span></a>
            </li>
            <li class="nav-item<?= (uri_string() == 'admin/materi' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?= base_url('admin/materi') ?>">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Materi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pengaturan
            </div>

            <li class="nav-item<?= (uri_string() == 'admin/tahunajaran' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?= base_url('admin/tahunajaran') ?>">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>Tahun Ajaran</span></a>
            </li>

            <li class="nav-item<?= (uri_string() == 'admin/kontak' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?= base_url('admin/kontak') ?>">
                    <i class="fas fa-fw fa-id-badge"></i>
                    <span>Kontak</span></a>
            </li>

            <li class="nav-item<?= (uri_string() == 'admin/pengaturanweb' ? ' active' : ''); ?>">
                <a class="nav-link" href="<?= base_url('admin/pengaturanweb') ?>">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>Pengaturan Website</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url('img/admin/admin.png'); ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <?php if($success != null) : ?>
                        <div class="alert alert-success" role=alert>
                           <h4>Sukses <?= $success; ?></h4>
                        </div>
                     <?php endif; ?>
                    <?= $this->renderSection('content') ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/assets/js/sb-admin-2.min.js"></script>
    <script>
        $('.alert').delay(5000).fadeOut('slow');
        CKEDITOR.replace('isi');
        CKEDITOR.replace('misi');
    </script>
</body>

</html>

