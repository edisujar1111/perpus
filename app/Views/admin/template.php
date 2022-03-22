<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url(); ?>/assets/img/logo-book.png">
    <title>
        Admin-<?= $page; ?>
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url(); ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/yearpicker.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link id="pagestyle" href="<?= base_url(); ?>/assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
                <img src="<?= base_url(); ?>/assets/img/logo-book.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Perpustakaan</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white <?= ($page == 'Home') ? 'active bg-gradient-primary' : ''; ?>" href="<?= base_url('admin'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">home</i>
                        </div>
                        <span class="nav-link-text ms-1">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?= ($page == 'Buku') ? 'active bg-gradient-primary' : ''; ?>" href="<?= base_url('admin/buku'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">inventory_2</i>
                        </div>
                        <span class="nav-link-text ms-1">Buku</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?= ($page == 'Anggota') ? 'active bg-gradient-primary' : ''; ?>" href="<?= base_url('admin/anggota'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">inventory_2</i>
                        </div>
                        <span class="nav-link-text ms-1">Anggota</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?= ($page == 'Data Master') ? 'active bg-gradient-primary' : ''; ?>" href="<?= base_url('admin/data-master'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">inventory_2</i>
                        </div>
                        <span class="nav-link-text ms-1">Data Master</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Transaksi</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?= ($page == 'Data Peminjaman') ? 'active bg-gradient-primary' : ''; ?>" href="<?= base_url('admin/data-peminjaman'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">arrow_circle_up</i>
                        </div>
                        <span class="nav-link-text ms-1">Peminjaman</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?= ($page == 'Data Pengembalian') ? 'active bg-gradient-primary' : ''; ?>" href="<?= base_url('admin/data-pengembalian'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">arrow_circle_down</i>
                        </div>
                        <span class="nav-link-text ms-1">Pengembalian</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="./pages/virtual-reality.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">description</i>
                        </div>
                        <span class="nav-link-text ms-1">Laporan</span>
                    </a>
                </li>
            </ul>
        </div>

    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><?= $page; ?></li>
                        <?php if ($subpage != null) : ?>
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><?= $subpage; ?></li>
                        <?php endif; ?>
                    </ol>
                    <h6 class="font-weight-bolder mb-0"><?= $page; ?></h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <ul class="navbar-nav justify-content-end">
                            <li class="nav-item d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                    <i class="fa fa-user me-sm-1"></i>
                                    <span class="d-sm-inline d-none">Log Out</span>
                                </a>
                            </li>
                            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <?= $this->renderSection('content') ?>
    </main>
    <!--   Core JS Files   -->
    <script src="<?= base_url(); ?>/assets/js/jquery.min.js "></script>
    <script src="<?= base_url(); ?>/assets/js/yearpicker.js" async></script>
    <script src="<?= base_url(); ?>/assets/js/jquery-ui.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/core/popper.min.js "></script>
    <script src="<?= base_url(); ?>/assets/js/core/bootstrap.min.js "></script>
    <script src="<?= base_url(); ?>/assets/js/plugins/perfect-scrollbar.min.js "></script>
    <script src="<?= base_url(); ?>/assets/js/plugins/smooth-scrollbar.min.js "></script>
    <script src="<?= base_url(); ?>/assets/js/plugins/chartjs.min.js "></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src=" https://buttons.github.io/buttons.js "></script>
    <script src=" <?= base_url(); ?>/assets/js/material-dashboard.min.js?v=3.0.0 "></script>
    <script>
        $(document).ready(function() {
            var tabel = [
                $('#mytable'),
                $('#mytable1'),
                $('#mytable2'),
                $('#mytable3'),
                $('#mytable4'),
            ]
            for (var i = 0; i < tabel.length; i++) {
                tabel[i].DataTable({
                    "oLanguage": {
                        "sEmptyTable": "Tidak ada Data"
                    }
                });
            }

            $('#datepicker').datepicker({
                regional: 'id',
                changeMonth: true,
                dateFormat: 'dd MM yy',
                changeYear: true,
                yearRange: "1980:2045"
            });
            $('.year').yearpicker({
                year: '2022'
            });
        });
    </script>
</body>

</html>