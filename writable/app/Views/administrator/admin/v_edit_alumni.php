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
          <h4 class="page-title">Edit Alumni</h4>
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
               <input type="hidden" name="id" value="<?php echo $alumni['id_alumni']; ?>">
              <label class="control-label col-xs-3">Nama Lengkap</label>
                <div class="col-xs-12">
                    <input name="nama" class="form-control" type="text" value="<?php echo $alumni['nama'] ?>">
                </div>
              <p class="form-text text-danger"><?= form_error('nama'); ?></p>
            </div>  
            <div class="form-group">
              <label class="control-label col-xs-3">Tempat Lahir</label>
              <div class="col-xs-9">
                  <input name="tempat_lahir" class="form-control" type="text" value="<?php echo $alumni['tempat_lahir'] ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Tanggal Lahir</label>
              <div class="col-xs-9">
                  <input name="tanggal_lahir" class="form-control" type="date" value="<?php echo $alumni['tanggal_lahir'] ?>">
                  <p class="text-danger"><?= form_error('password'); ?></p>
              </div>
            </div>   
            <div class="form-group">
              <label class="control-label col-xs-3">Alamat</label>
              <div class="col-xs-9">
                  <input name="alamat" class="form-control" type="text" value="<?php echo $alumni['alamat'] ?>">
                  <p class="text-danger"><?= form_error('telepon'); ?></p>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-xs-3">Email</label>
              <div class="col-xs-9">
                  <input name="email" class="form-control" type="email" value="<?php echo $alumni['email'] ?>">
                  <p class="text-danger"><?= form_error('email'); ?></p>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Jurusan</label>
              <div class="col-xs-9">
                <select class="form-control" id="exampleFormControlSelect2" name="jurusan">
                  <?php foreach ($jurusan as $j) { ?>
                    <?php if ($j['id_jurusan'] == $alumni['id_jurusan']) { ?>
                      <option value="<?php echo $j['id_jurusan']; ?>" selected><?php echo $j['nama_jurusan']; ?></option>
                    <?php }else{ ?>
                      <option value="<?php echo $j['id_jurusan']; ?>"><?php echo $j['nama_jurusan']; ?></option>
                    <?php } ?>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-3">Tahun Lulus</label>
              <div class="col-xs-9">
                  <input name="tahun_lulus" class="form-control" type="number" value="<?php echo $alumni['tahun_lulus'] ?>">
                  <p class="text-danger"><?= form_error('email'); ?></p>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-9">
                <div class="form-group">
                  <label for="exampleFormControlSelect2">Jenis Kelamin</label>
                    <select class="form-control" id="exampleFormControlSelect2" name="jenis_kelamin">
                     <?php foreach ($jenis_kelamin as $jk) { ?>
                      <?php if ($jk == $alumni['jenis_kelamin']) { ?>
                        <option value="<?php echo $jk; ?>" selected><?php echo $jk; ?></option>
                      <?php }else{ ?>
                        <option value="<?php echo $jk; ?>"><?php echo $jk; ?></option>
                      <?php } ?>
                    <?php } ?>
                    </select>
                </div>
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