<?php
  include(APPPATH.'views/administrator/header.php');
?>
<?php
  include(APPPATH.'views/administrator/sidebar.php');
?>  
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
  <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Detail Data Alumni</h4>
        </div>
      </div>
    </div>
  <!-- Page Title Header Ends-->
  <div class="col-md-8 grid-margin stretch-card mx-auto">
    <div class="card">
      <div class="card-body">
        <form class="form-horizontal" method="post" action="">
          <div class="modal-body">
            <div class="form-group">
              <label class="control-label col-xs-3">Nama Lengkap</label>
                <div class="col-xs-12">
                    <input name="username" class="form-control" type="text" placeholder="Username" value="<?php echo $alumni['nama'] ?>" disabled>
                </div>
            </div>  
            <div class="form-group">
                <label class="control-label col-xs-3">Tempat Lahir</label>
                <div class="col-xs-9">
                   <input name="username" class="form-control" type="text" placeholder="Username" value="<?php echo $alumni['tempat_lahir'] ?>" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Tanggal Lahir</label>
                <div class="col-xs-9">
                    <input name="username" class="form-control" type="text" placeholder="Username" value="<?php echo $alumni['tanggal_lahir'] ?>" disabled>
                </div>
            </div>   
            <div class="form-group">
                <label class="control-label col-xs-3">Alamat</label>
                <div class="col-xs-9">
                    <input name="username" class="form-control" type="text" placeholder="Username" value="<?php echo $alumni['alamat'] ?>" disabled>
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3">Email</label>
                <div class="col-xs-9">
                    <input name="username" class="form-control" type="text" placeholder="Username" value="<?php echo $alumni['email'] ?>" disabled>
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3">Jurusan</label>
                <div class="col-xs-9">
                    <input name="username" class="form-control" type="text" placeholder="Username" value="<?php echo $alumni['nama_jurusan'] ?>" disabled>
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3">Tahun Lulus</label>
                <div class="col-xs-9">
                    <input name="username" class="form-control" type="text" placeholder="Username" value="<?php echo $alumni['tahun_lulus'] ?>" disabled>
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3">Jenis Kelamin</label>
                <div class="col-xs-9">
                    <input name="username" class="form-control" type="text" placeholder="Username" value="<?php echo $alumni['jenis_kelamin'] ?>" disabled>
                </div>
            </div> 
            <!-- <div class="form-group">
                <label class="control-label col-xs-3">Username</label>
                <div class="col-xs-9">
                    <input name="username" class="form-control" type="text" placeholder="Username" value="<?php echo $alumni['username'] ?>" disabled>
                </div>
            </div>  -->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
  include(APPPATH.'views/administrator/footer.php')
?>