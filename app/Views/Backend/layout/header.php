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
    <style>
      .btn-tambah{
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
            <img src="<?php echo base_url('assets/admin/images/logo-mini.sv') ?>" alt="logo"/>
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