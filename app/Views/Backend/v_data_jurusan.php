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
            <a href="<?php echo base_url('admin/c_jurusan/tambah_jurusan') ?>" class="btn btn-md btn-primary btn-tambah"><i class="fa fa-plus"></i>Tambah jurusan</a>
            <?php if ($this->session->flashdata('flash')) { ?>
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
                    <a href="<?php echo base_url('admin/c_jurusan/edit_jurusan/') ?><?php echo $jurusan['id_jurusan']; ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo base_url('admin/c_jurusan/hapus_jurusan/') ?><?php echo $jurusan['id_jurusan']; ?>" class="btn btn-xs btn-danger" onclick = "return confirm('Yakin ingin menghapus data?')"><i class="fa fa-eraser"></i></a>
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
<?php
  include(APPPATH.'views/administrator/footer.php')
?>