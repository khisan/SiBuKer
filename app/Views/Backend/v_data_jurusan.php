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
              <?php if (session()->getFlashData('flash')) {?>
              <div class="alert alert-success alert-dismissible fade show float-right" role="alert">
                Data jurusan <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php }?>
              <table class="table table-bordered table-striped" id="table1" style="margin-top: 20px;text-align: center;">
                <thead>
                  <tr>
                    <th> No </th>
                    <th> Nama Jurusan </th>
                    <th> Aksi </th>
                  </tr>
                </thead>
                <tbody id="show_data">
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
  <form action="<?php echo site_url('Backend/Jurusan/edit_jurusan'); ?>" method="post">
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
                    <input name="nama_jurusan_2" class="form-control" type="text" placeholder="Nama Jurusan">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="id">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!--DELETE RECORD MODAL-->
  <form action="<?php echo site_url('Backend/Jurusan/hapus_jurusan');?>" method="post">
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header no-bd">
            <h5 class="modal-title">
              <span class="fw-mediumbold">
                Hapus Jadwal</span>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="alert alert-info">
              Anda yakin ingin menghapus data ini?
            </div>
          </div>
          <div class="modal-footer no-bd">
            <input type="hidden" name="id">
            <button type="submit" class="btn btn-primary">Hapus</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
<script>
$(document).ready(function() {
  tampil_data_jurusan(); // pemanggilan fungsi tampil jurusan

  // fungsi tampil barang
  function tampil_data_jurusan(){
    $.ajax({
      method  : 'get',
      url   : '<?php echo base_url('backend/jurusan/data_jurusan') ?>',
      async : false,
      dataType  : 'json',
      success : function(data){
        var html = '';
        var no=1;
        for(i=0; i<data.length; i++){
          html += '<tr>'+
                  '<td>'+ no++ +'</td>'+
                  '<td>'+data[i].nama_jurusan+'</td>'+
                  '<td><a href="javascript:void(0);" class="btn btn-xs btn-warning btn-edit" data-id="' + data[i].id_jurusan + '" data-nama_jurusan="' + data[i].nama_jurusan + '"><i class="fa fa-edit"></i></a> <a href="javascript:void(0)" class="btn btn-xs btn-danger btn-delete" data-id="' + data[i].id_jurusan + '"><i class="fa fa-eraser"></i></a></td>'+
                  '</tr>';
        }
        $('#show_data').html(html);
      }
    });
  }

  //Edit Record
  $('.btn-edit').on('click', function() {
    var id = $(this).data('id');
    var nama_jurusan = $(this).data('nama_jurusan');
    $('[name="id"]').val(id);
    $('[name="nama_jurusan_2"]').val(nama_jurusan);
    $('#editModal').modal('show');
  });

  //Delete Record
    $('.btn-delete').on('click', function() {
      var id = $(this).data('id');
      $('[name="id"]').val(id);
      $('#deleteModal').modal('show');
    });

});
</script>
<?php echo $this->endSection(); ?>
