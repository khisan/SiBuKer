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
          <h4 class="page-title">Tambah Jurusan</h4>
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
              <label class="control-label col-xs-3" >Nama Jurusan</label>
                <div class="col-xs-12">
                    <input name="nama_jurusan" class="form-control" type="text" placeholder="Nama Jurusan">
                </div>
                <p class="text-danger"><?php echo form_error('nama_jurusan'); ?></p>
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