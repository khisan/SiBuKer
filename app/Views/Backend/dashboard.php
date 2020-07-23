<?php echo $this->extend('Backend/layout/template'); ?>
<?php echo $this->section('content'); ?>
<style>
  h6 {
    margin-top: 15px;
  }
</style>
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Dashboard</h4>
        </div>
      </div>
    </div>
    <!-- Page Title Header Ends-->
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="alert alert-primary" role="alert">
                  <h2 class="font-weight-semibold" style="margin-bottom: 0px;text-align: center;">Selamat Datang Admin</h2></br>
                  <p class="font-weight-semibold" style="text-align: center;">Sistem Informasi Bursa Kerja Khusus SMK</p>
                </div>
                <div class="row mb-3">
                  <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card bg-success text-white h-100">
                      <div class="card-body bg-success">
                        <div class="rotate">
                          <i class="fa fa-user fa-4x"><a href="<?php echo base_url('c_alumni') ?>"></a></i>
                        </div>
                        <h6 class="text-uppercase">Alumni</h6>
                        <h1 class="display-4"><?php echo $data ?></h1>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-danger h-100">
                      <div class="card-body bg-danger">
                        <div class="rotate">
                          <i class="fa fa-briefcase fa-4x"></i>
                        </div>
                        <h6 class="text-uppercase">Lowongan</h6>
                        <h1 class="display-4"><?php echo $data2 ?></h1>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-info h-100">
                      <div class="card-body bg-info">
                        <div class="rotate">
                          <i class="fa fa-industry fa-4x"></i>
                        </div>
                        <h6 class="text-uppercase">Perusahaan</h6>
                        <h1 class="display-4"><?php echo $data3 ?></h1>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-warning h-100">
                      <div class="card-body">
                        <div class="rotate">
                          <i class="fa fa-bars fa-4x"></i>
                        </div>
                        <h6 class="text-uppercase">Kategori</h6>
                        <h1 class="display-4"><?php echo $data4 ?></h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo $this->endSection(); ?>