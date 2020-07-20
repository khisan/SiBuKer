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
          <h4 class="page-title">Tambah Alumni</h4>
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
                    <input name="nama" class="form-control" type="text" placeholder="Nama Lengkap">
                </div>
              <p class="form-text text-danger"><?= form_error('nama'); ?></p>
            </div>  
            <div class="form-group">
              <label class="control-label col-xs-3">Tempat Lahir</label>
              <div class="col-xs-9">
                  <input name="tempat_lahir" class="form-control" type="text" placeholder="Tempat Lahir">
                <p class="form-text text-danger"><?= form_error('tempat_lahir'); ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Tanggal Lahir</label>
              <div class="col-xs-9">
                  <input name="tanggal_lahir" class="form-control" type="date" placeholder="Tanggal Lahir">
                  <p class="text-danger"><?= form_error('tanggal_lahir'); ?></p>
              </div>
            </div>   
            <div class="form-group">
              <label class="control-label col-xs-3">Alamat</label>
              <div class="col-xs-9">
                  <input name="alamat" class="form-control" type="text" placeholder="Alamat">
                  <p class="text-danger"><?= form_error('alamat'); ?></p>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-xs-3">Email</label>
              <div class="col-xs-9">
                  <input name="email" class="form-control" type="email" placeholder="Email">
                  <p class="text-danger"><?= form_error('email'); ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Jurusan</label>
              <div class="col-xs-9">
                <select class="form-control" name="jurusan">
                  <option value="none">Pilih Jurusan</option>
                  <?php foreach ($jurusan as $jrs) { ?>
                    <option value="<?php echo $jrs['id_jurusan']?>"><?php echo $jrs['nama_jurusan'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Tahun Lulus</label>
              <div class="col-xs-9">
                  <input name="tahun_lulus" class="form-control" type="number" placeholder="Tahun Lulus">
                  <p class="text-danger"><?= form_error('tahun_lulus'); ?></p>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-9">
                <div class="form-group">
                  <label for="exampleFormControlSelect2">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                      <option value="">Pilih Jenis Kelamin</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
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