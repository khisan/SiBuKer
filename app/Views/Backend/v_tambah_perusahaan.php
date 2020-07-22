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
          <h4 class="page-title">Tambah Perusahaan</h4>
        </div>
      </div>
    </div>
  <!-- Page Title Header Ends-->
  <div class="col-md-8 grid-margin stretch-card mx-auto">
    <div class="card">
      <div class="card-body">
        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <label class="control-label col-xs-3" >Nama Perusahaan</label>
                <div class="col-xs-12">
                    <input name="nama" class="form-control" type="text" placeholder="Nama Perusahaan">
                </div>
                <p class="text-danger"><?php echo form_error('nama'); ?></p>
            </div>    
            <div class="form-group">
              <label class="control-label col-xs-3" >Alamat</label>
              <div class="col-xs-9">
                  <input name="alamat" class="form-control" type="text" placeholder="Alamat">
                  <p class="text-danger"><?= form_error('alamat'); ?></p>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-xs-3" >Website</label>
              <div class="col-xs-9">
                  <input name="website" class="form-control" type="text" placeholder="Website">
                  <p class="text-danger"><?= form_error('website'); ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3" >Deskripsi</label>
              <div class="col-xs-9">
                <textarea name="deskripsi" class="form-control" type="text" placeholder="Deskripsi" rows="5"></textarea> 
                <p class="text-danger"><?= form_error('deskripsi'); ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3" >Foto</label>
              <div class="col-xs-9">
                  <input name="foto" class="form-control" type="file">
              </div>
            </div>
          </div>
          <div class="modal-footer">
              <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
              <button class="btn btn-success" type="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
  include(APPPATH.'views/administrator/footer.php')
?>