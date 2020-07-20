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
          <h4 class="page-title">Detail Data Perusahaan</h4>
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
              <label class="control-label col-xs-3">Nama Perusahaan</label>
                <div class="col-xs-12">
                    <input name="perusahaan" class="form-control" type="text" value="<?php echo $perusahaan['nama_perusahaan'] ?>" disabled>
                </div>
            </div>  
            <div class="form-group">
                <label class="control-label col-xs-3">Alamat</label>
                <div class="col-xs-9">
                   <input name="alamat" class="form-control" type="text" value="<?php echo $perusahaan['alamat'] ?>" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Website</label>
                <div class="col-xs-9">
                    <input name="website" class="form-control" type="text" value="<?php echo $perusahaan['website'] ?>" disabled>
                </div>
            </div>   
            <div class="form-group">
                <label class="control-label col-xs-3">Deskripsi</label>
                <div class="col-xs-9">
                    <input name="deskripsi" class="form-control" type="text" value="<?php echo $perusahaan['deskripsi'] ?>" disabled>
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3">Foto</label>
                <div class="col-xs-9">
                    <img src="<?php echo base_url('img/perusahaan/' . $perusahaan['foto']);?>" alt="">
                </div>
            </div> 
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
  include(APPPATH.'views/administrator/footer.php')
?>