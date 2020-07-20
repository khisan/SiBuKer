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
          <h4 class="page-title">Detail Data Lowongan</h4>
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
                    <input name="username" class="form-control" type="text" value="<?php echo $lowongan['nama_perusahaan'] ?>" disabled>
                </div>
            </div>  
            <div class="form-group">
                <label class="control-label col-xs-3">Judul</label>
                <div class="col-xs-9">
                   <input name="username" class="form-control" type="text" value="<?php echo $lowongan['judul'] ?>" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Batas Akhir</label>
                <div class="col-xs-9">
                    <input name="username" class="form-control" type="text" value="<?php echo $lowongan['batas_akhir'] ?>" disabled>
                </div>
            </div>   
            <div class="form-group">
                <label class="control-label col-xs-3">Status Lowongan</label>
                <div class="col-xs-9">
                    <input name="username" class="form-control" type="text" value="<?php echo $lowongan['status_lowongan'] ?>" disabled>
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3">Deskripsi</label>
                <div class="col-xs-9">
                    <textarea name="deskripsi" class="form-control" type="text" placeholder="Deskripsi" rows="10" disabled><?php echo $lowongan['deskripsi'] ?></textarea>
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3">Gaji</label>
                <div class="col-xs-9">
                    <input name="username" class="form-control" type="text" value="<?php echo $lowongan['gaji'] ?>" disabled>
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3">Gambar</label>
                <div class="col-xs-9">
                    <img style="display: block;margin: auto" src="<?php echo base_url('img/lowongan/' . $lowongan['gambar']);?>" alt="">
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3">Tanggal Posting</label>
                <div class="col-xs-9">
                    <input name="username" class="form-control" type="text" value="<?php echo $lowongan['tanggal_posting'] ?>" disabled>
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3">Lokasi</label>
                <div class="col-xs-9">
                    <input name="username" class="form-control" type="text" value="<?php echo $lowongan['lokasi'] ?>" disabled>
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