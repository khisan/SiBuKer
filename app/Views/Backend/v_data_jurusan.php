<?php echo $this->extend('Backend/layout/template'); ?>
<?php echo $this->section('content'); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Data Jurusan</h4>
        </div>
      </div>
    </div>
    <!-- Page Title Header Ends-->
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <button class="btn btn-md btn-primary btn-tambah" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i>Tambah jurusan</button>
              <?php if (session()->getFlashData('flash')) { ?>
              <div class="alert alert-success alert-dismissible fade show float-right" role="alert">
                Data jurusan <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php } ?>
              <table class="table table-bordered table-striped" id="table1" style="margin-top: 20px;text-align: center;">
                <thead>
                  <tr>
                    <th> No </th>
                    <th> Nama Jurusan </th>
                    <th> Aksi </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                      $no = 0; 
                      foreach ($data as $jurusan) :
                      $no++
                    ?>
                    <td><?php echo $no ?></td>
                    <td><?php echo $jurusan['nama_jurusan'] ?></td>
                    <td>
                      <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
                      <a href="<?php echo base_url('admin/c_jurusan/hapus_jurusan/') ?><?php echo $jurusan['id_jurusan']; ?>" class="btn btn-xs btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-eraser"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Add Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form tambah jurusan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="">
            <div class="modal-body">
              <div class="form-group">
                <label class="control-label col-xs-3">Nama Jurusan</label>
                <div class="col-xs-12">
                  <input name="nama_jurusan" class="form-control" type="text" placeholder="Nama Jurusan">
                </div>
                <?php /*
                <p class="text-danger"><?php echo form_error('nama_jurusan'); ?></p>
                */ ?>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-success">Simpan</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form edit jurusan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="">
            <div class="modal-body">
              <div class="form-group">
                <label class="control-label col-xs-3">Nama Jurusan</label>
                <div class="col-xs-12">
                  <input name="nama_jurusan" class="form-control" type="text" placeholder="Nama Jurusan">
                </div>
                <?php /*
                <p class="text-danger"><?php echo form_error('nama_jurusan'); ?></p>
                */ ?>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-success">Simpan</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php echo $this->endSection(); ?>
<script>
  reload_table();

  function reload_table() {
    $.ajax({
      url: "<?php echo site_url('Jurusan/data_jurusan') ?>",
      beforeSend: function(f) {
        $('#table_jurusan').html('Load Table ... ... !');
      },
      success: function(data) {
        $('table_jurusan').html(data);
      }
    });
  }
  var save_method;

  function tambah() {
    save_method = 'tambah';

    $.ajax({
      url: "<?php echo site_url('backend/jurusan/create') ?>",
      success: function(data) {
        $('#myModal .modal-dialog .modal-content .modal-body').html(data);
      }

    });
    $('#myModal').modal(show);
    $('#modal-title').text('Form Tambah Jurusan');
  }

  function simpan() {
    var url;
    if (save_method == 'tambah') {
      url = "<?php echo site_url('backend/jurusan/create') ?>"
    } else {
      url = < ? php echo site_url('backend/jurusan/edit') ? >
    }

    $.ajax({
      url: "url",
      type: "POST",
      //data:$('#form_jurusan').serialize();
      success: function(data) {
        $('#myModal').modal('hide');
        reload_table();
      }

    });
  }
</script>