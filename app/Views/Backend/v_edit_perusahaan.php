<?php
  include(APPPATH.'views/administrator/header.php');
?> 
<?php
  include(APPPATH.'views/administrator/sidebar.php');
?> 
<div class="main-panel">
  <div class="content-wrapper">
  <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Edit Perusahaan</h4>
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
              <input type="hidden" name="id" value="<?php echo $perusahaan['id_perusahaan']; ?>">
              <label class="control-label col-xs-3" >Nama Perusahaan</label>
                <div class="col-xs-12">
                  <input name="nama" class="form-control" type="text" placeholder="Nama Perusahaan" value="<?php echo $perusahaan['nama_perusahaan'] ?>" >
                </div>
                <p class="text-danger"><?= form_error('nama'); ?></p>
            </div>  
            <div class="form-group">
                <label class="control-label col-xs-3" >Alamat</label>
                <div class="col-xs-12">
                    <input name="alamat" class="form-control" type="text" placeholder="Alamat" value="<?php echo $perusahaan['alamat'] ?>" >
                </div>
                <p class="text-danger"><?= form_error('alamat'); ?></p>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" >Website</label>
                <div class="col-xs-12">
                    <input name="website" class="form-control" type="text" placeholder="Website" value="<?php echo $perusahaan['website'] ?>">
                    <p class="text-danger"><?= form_error('website'); ?></p>
                </div>
            </div>   
            <div class="form-group">
                <label class="control-label col-xs-3" >Deskripsi</label>
                <div class="col-xs-12">
                  <textarea name="deskripsi" class="form-control" type="text" placeholder="Deskripsi" rows="5"><?php echo $perusahaan['deskripsi'] ?></textarea>
                  <p class="text-danger"><?= form_error('deskripsi'); ?></p>
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3" >Foto</label>
                <?php if($perusahaan['foto'] !== NULL) {?>
                <div class="col-xs-9">
                 <img src="<?php echo base_url('img/perusahaan/' . $perusahaan['foto']);?>" alt="" style="margin-bottom: 20px;" width="80px"> 
                 <input name="userfile" class="form-control" type="file" value="<?php echo $perusahaan['foto']; ?>">
                </div>
                <?php } ?>
            </div> 
          </div>
          <div class="modal-footer">
              <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
              <button type="submit" class="btn btn-success" type="submit">Simpan</button>
          </div>
        </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  include(APPPATH.'views/administrator/footer.php')
?>