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
          <h4 class="page-title">Data Alumni Filter</h4>
        </div>
      </div>
    </div>
  <!-- Page Title Header Ends-->
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
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