<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SiBuKer</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/iconfonts/ionicons/css/ionicons.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/iconfonts/typicons/src/font/typicons.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/iconfonts/font-awesome/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?php 
    echo base_url('assets/admin/vendors/css/vendor.bundle.base.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/css/vendor.bundle.addons.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/shared/style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/demo_1/style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/datatables/DataTables/css/datatables.min.css') ?>">
  <link rel="shortcut icon" href="<?php echo base_url('assets/admin/images/favicon.png') ?>" />
  <script src="<?php echo base_url('assets/admin/vendors/jquery/jquery.min.js') ?>"></script>
  <style>
    .btn-tambah {
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="<?php echo base_url('admin/c_admin') ?>">
            <h3 style="margin-top:20px">Admin Page</h3>
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="<?php echo base_url('assets/admin/images/logo-mini.sv') ?>" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex">
        <ul class="navbar-nav" style="margin-left: 75%">
          <li class="nav-item font-weight-semibold d-none d-lg-block">Selamat Datang Admin</li>
          <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="<?php echo base_url('assets/admin/images/faces-clipart/man.png') ?>" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="<?php echo base_url('assets/admin/images/faces-clipart/man.png') ?>" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Admin</p>
                <p class="font-weight-light text-muted mb-0">administrator@gmail.com</p>
              </div>
              <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>

    <?php echo $this->include('Backend/layout/sidebar'); ?>
    <?php echo $this->renderSection('content'); ?>

    <footer class="footer">
      <div class="container-fluid clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
        </span>
      </div>
    </footer>
  </div>
  </div>
  </div>
  <script src="<?php echo base_url('assets/admin/vendors/bootstrap/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendors/js/vendor.bundle.base.js') ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendors/js/vendor.bundle.addons.js') ?>"></script>
  <script src="<?php echo base_url('assets/admin/js/shared/off-canvas.js') ?>"></script>
  <script src="<?php echo base_url('assets/admin/js/shared/misc.js') ?>"></script>
  <script src="<?php echo base_url('assets/admin/js/demo_1/dashboard.js') ?>"></script>
  <script src="<?php echo base_url('assets/admin/datatables/DataTables/js/datatables.min.js') ?>"></script>

  <script>
    $(document).ready(function() {
      $('#table1').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            title: function() {
              return $(".page-title").text()
            },
            exportOptions: {
              // columns: ':visible'
              columns: ':not(.notexport)',

            }
          },
          {
            extend: 'csv',
            title: function() {
              return $(".page-title").text()
            },
            exportOptions: {
              // columns: ':visible'
              columns: ':not(.notexport)',


            }
          },
          {
            extend: 'excel',
            title: function() {
              return $(".page-title").text()
            },
            exportOptions: {
              // columns: ':visible'
              columns: ':not(.notexport)',


            }
          },
          {
            extend: 'pdf',
            orientation: 'landscape',
            pageSize: 'LEGAL',
            title: function() {
              return $(".page-title").text()
            },
            exportOptions: {
              columns: ':not(.notexport)',
              modifier: {
                alignment: 'center'
              }
              //aligment: 'center',
              // columns: ':visible'
            },
          },
          {
            extend: 'print',
            title: function() {
              return $(".page-title").text()
            },
            exportOptions: {
              // columns: ':visible'
              columns: ':not(.notexport)',

            }
          },
          'colvis'
          // 'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "lengthMenu": [
          [5, 10, 15, 20, 25, 30, -1],
          [5, 10, 15, 20, 25, 30, "All"]
        ]
      });
    });
  </script>
</body>

</html>