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
          <h4 class="page-title">Tambah Lowongan</h4>
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
              <label class="control-label col-xs-3" >Kategori</label>
                <div class="col-xs-12">
                    <select class="form-control" name="kategori">
                      <option value="none">Pilih Kategori</option>
                      <?php foreach ($kategori as $kt) { ?>
                      <option value="<?php echo $kt['id_kategori'] ?>"><?php echo $kt['nama_kategori'] ?></option>
                      <?php } ?>
                    </select>
                </div>
                <p class="text-danger"><?php echo form_error('kategori'); ?></p>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Nama Perusahaan</label>
                <div class="col-xs-12">
                    <select class="form-control" name="perusahaan">
                      <option value="none">Pilih Perusahaan</option>
                      <?php foreach ($perusahaan as $psh) { ?>
                      <option value="<?php echo $psh['id_perusahaan'] ?>"><?php echo $psh['nama_perusahaan'] ?></option>
                      <?php } ?>
                    </select>
                </div>
                <p class="text-danger"><?php echo form_error('kategori'); ?></p>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3" >Judul Lowongan</label>
              <div class="col-xs-9">
                  <input name="judul" class="form-control" type="text" placeholder="Judul Lowongan">
              </div>
              <p class="text-danger"><?php echo form_error('judul'); ?></p>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3" >Batas Akhir</label>
              <div class="col-xs-9">
                  <input name="batas_akhir" class="form-control" type="date" placeholder="Batas Akhir">
              </div>
              <p class="text-danger"><?php echo form_error('batas_akhir'); ?></p>
            </div>   
            <div class="form-group">
              <label class="control-label col-xs-3" >Status Lowongan</label>
              <div class="col-xs-9">
                 <select class="form-control" name="status_lowongan">
                    <option value="none">Pilih Status</option>
                    <option value="aktif">Aktif</option>
                    <option value="nonaktif">Nonaktif</option>
                  </select>
              </div>
              <p class="text-danger"><?php echo form_error('batas_akhir'); ?></p>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3" >Deskripsi</label>
              <div class="col-xs-9">
                  <textarea name="deskripsi" class="form-control" type="text" placeholder="Deskripsi" rows="10"></textarea>
                  <p class="text-danger"><?= form_error('deskripsi'); ?></p>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-xs-3" >Gaji</label>
              <div class="col-xs-9">
                  <input name="gaji" class="form-control" type="number" placeholder="Gaji">
                  <p class="text-danger"><?= form_error('deskripsi'); ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3" >Lokasi</label>
              <div class="col-xs-9">
                  <input name="lokasi" class="form-control" type="text" placeholder="Lokasi">
                  <p class="text-danger"><?= form_error('lokasi'); ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3" >Gambar</label>
              <div class="col-xs-9">
                  <input name="gambar" class="form-control" type="file">
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