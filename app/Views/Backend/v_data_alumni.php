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
          <h4 class="page-title">Data Alumni</h4>
        </div>
      </div>
    </div>
  <!-- Page Title Header Ends-->
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form action="<?php echo base_url()?>admin/c_alumni/alumni_filter" method="post">
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="form-group">
                    <label for="LastName" class="col-sm-2 control-label">Jurusan</label>
                    <div class="col-xs-9">
                        <select name="jurusan" class="form-control" style="width: 130px">
                          <option value="none">Pilih Jurusan</option>
                          <?php foreach ($jurusan as $jrs) { ?>
                          <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan ?></option>
                          <?php } ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-9">
                      <button id="btn-filter" class="btn btn-success" type="submit">Filter</button>
                      <button type="reset" id="btn-reset" class="btn btn-danger">Reset</button>
                    </div>
                  </div>
                </form>
              </div>
              <a href="<?php echo base_url('admin/c_alumni/tambah_alumni') ?>" class="btn btn-md btn-primary btn-tambah"><i class="fa fa-plus"></i>Tambah Alumni</a>
            <?php if ($this->session->flashdata('flash')) { ?>
              <div class="alert alert-success alert-dismissible fade show float-right" role="alert">
                Data admin <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php } ?>
            <table class="table table-bordered table-striped table-responsive" id="table1" style="margin-top: 20px;text-align: center;">
              <thead>
                <tr>
                  <th> No </th>
                  <th> Nama </th>
                  <th> Email </th>
                  <th> Jurusan </th>
                  <th> Tahun Lulus </th>
                  <th> Jenis Kelamin </th>
                  <th> Aksi </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
                    $no = 0; 
                    foreach ($data as $alumni) :
                    $no++
                  ?>
                  <td><?php echo $no ?></td>
                  <td><?php echo $alumni['nama'] ?></td>
                  <td><?php echo $alumni['email'] ?></td>
                  <td><?php echo $alumni['nama_jurusan'] ?></td>
                  <td><?php echo $alumni['tahun_lulus'] ?></td>
                  <td><?php echo $alumni['jenis_kelamin'] ?></td>
                  <td class="notexport">
                    <a href="<?php echo base_url('admin/c_alumni/detail_alumni/') ?><?php echo $alumni['id_alumni']; ?>" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                    <a href="<?php echo base_url('admin/c_alumni/edit_alumni/') ?><?php echo $alumni['id_alumni']; ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo base_url('admin/c_alumni/hapus_alumni/') ?><?php echo $alumni['id_alumni']; ?>" class="btn btn-xs btn-danger" onclick = "return confirm('Yakin ingin menghapus data?')"><i class="fa fa-eraser"></i></a>
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