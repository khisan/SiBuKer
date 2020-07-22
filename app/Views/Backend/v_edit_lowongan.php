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
          <h4 class="page-title">Edit Lowongan</h4>
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
              <input type="hidden" name="id" value="<?php echo $lowongan['id_lowongan']; ?>">
              <label class="control-label col-xs-3" >ID Kategori</label>
                <div class="col-xs-12">
                    <select class="form-control" name="kategori">
                      <option value="none">Pilih Kategori</option>
                      <?php foreach ($kategori as $kat) { ?>
                          <option <?php if ($kat['id_kategori'] == $lowongan['id_kategori']){ echo 'selected="selected"'; } ?> value="<?php echo $kat['id_kategori'] ?>"><?php echo $kat['nama_kategori'] ?></option>
                      <?php } ?>
                    </select>
                </div>
              <p class="form-text text-danger"><?= form_error('nama'); ?></p>
            </div>  
           <div class="form-group">
              <label class="control-label col-xs-3" >Nama Perusahaan</label>
                <div class="col-xs-12">
                    <select class="form-control" name="perusahaan">
                      <option value="none">Pilih Perusahaan</option>
                      <?php foreach ($perusahaan as $psh) { ?>
                          <option <?php if ($psh['id_perusahaan'] == $lowongan['id_perusahaan']){ echo 'selected="selected"'; } ?> value="<?php echo $psh['id_perusahaan'] ?>"><?php echo $psh['nama_perusahaan'] ?></option>
                      <?php } ?>
                    </select>
                </div>
              <p class="form-text text-danger"><?= form_error('nama'); ?></p>
            </div>  
            <div class="form-group">
                <label class="control-label col-xs-3" >Judul</label>
                <div class="col-xs-9">
                    <input name="judul" class="form-control" type="text" placeholder="Judul" value="<?php echo $lowongan['judul'] ?>">
                    <p class="text-danger"><?= form_error('judul'); ?></p>
                </div>
            </div>   
            <div class="form-group">
                <label class="control-label col-xs-3" >Batas Akhir</label>
                <div class="col-xs-9">
                    <input name="batas_akhir" class="form-control" type="text" placeholder="Batas Akhir" value="<?php echo $lowongan['batas_akhir'] ?>">
                    <p class="text-danger"><?= form_error('batas_akhir'); ?></p>
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3" >Status Lowongan</label>
                <div class="col-xs-9">
                    <select class="form-control" name="status_lowongan">
                      <option value="none">Pilih Status Lowongan</option>
                      <?php foreach ($status_lowongan as $sl) { ?>
                        <?php if ($sl == $lowongan['status_lowongan']) { ?>
                          <option value="<?php echo $sl; ?>" selected><?php echo $sl; ?></option>
                        <?php }else{ ?>
                          <option value="<?php echo $sl; ?>"><?php echo $sl; ?></option>
                        <?php } ?>
                      <?php } ?>
                    </select> 
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3" >Deskripsi</label>
                <div class="col-xs-9">
                    <textarea name="deskripsi" class="form-control" type="text" rows="10"><?php echo $lowongan['deskripsi'] ?></textarea>
                    <p class="text-danger"><?= form_error('deskripsi'); ?></p>
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3" >Gaji</label>
                <div class="col-xs-9">
                    <input name="gaji" class="form-control" type="text" placeholder="Gaji" value="<?php echo $lowongan['gaji'] ?>">
                    <p class="text-danger"><?= form_error('gaji'); ?></p>
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3" >Lokasi</label>
                <div class="col-xs-9">
                    <input name="lokasi" class="form-control" type="text" placeholder="Lokasi" value="<?php echo $lowongan['lokasi'] ?>">
                    <p class="text-danger"><?= form_error('lokasi'); ?></p>
                </div>
            </div> 
            <div class="form-group">
                <label class="control-label col-xs-3" >Gambar</label>
                <?php if($lowongan['gambar'] !== NULL) {?>
                <div class="col-xs-9">
                 <img src="<?php echo base_url('img/lowongan/' . $lowongan['gambar']);?>" alt="" style="margin-bottom: 20px;" width="80px"> 
                 <input name="userfile" class="form-control" type="file" value="<?php echo $lowongan['gambar']; ?>">
                 <p class="text-danger"><?= form_error('gambar'); ?></p>
                </div>
                <?php } ?>
            </div> 
          </div>
          <div class="modal-footer">
              <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
              <button type="submit" class="btn btn-success" type="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
  include(APPPATH.'views/administrator/footer.php')
?>