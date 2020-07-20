<?php
  include(APPPATH.'views/administrator/header.php');
?> 
<?php
  include(APPPATH.'views/administrator/sidebar.php');
?> 
<style>
  .table {
   margin: auto;
   display: block !important;
}
</style>
<div class="main-panel">
  <div class="content-wrapper">
  <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Data Lowongan</h4>
        </div>
      </div>
    </div>
  <!-- Page Title Header Ends-->
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="col-md-12">
              <!-- <form action="<?php echo base_url() ?>admin/c_lowongan/nonaktif_lowongan" method="post">
                <button type="submit" class="btn btn-md btn-danger" style="float: right;margin-top: 0px">
                Nonaktifkan
              </button>
              </form> 
              <form action="<?php echo base_url('admin/validasiLowongan'); ?>" method="post"> 
                <button type="submit" class="btn btn-md btn-success" style="float: right;margin-right: 10px;margin-top: 0px">
                Aktifkan
                </button>
              </form>  -->
            <!-- <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title" >Custom Filter : </h3>
              </div>
              <div class="panel-body">
                <form id="form-filter" class="form-horizontal">
                  <div class="form-group">
                      <label for="LastName" class="col-sm-2 control-label">Address</label>
                      <div class="col-sm-4">
                         <select name="bulan" id="select_bulan">
                          <option value="none">Pilih Bulan</option>
                          <?php foreach ($bulan as $bln) { ?>
                          <option value="<?php echo $bln->bulan ?>"><?php echo konversiBulan($bln->bulan) ?></option>
                          <?php } ?>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="LastName" class="col-sm-2 control-label"></label>
                      <div class="col-sm-4">
                          <button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
                          <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
                      </div>
                  </div>
                </form>
              </div>
            </div> -->
            <form action="<?php echo base_url()?>admin/c_lowongan/tabel_lowongan_filter" method="post">
              <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Pilih Filter Berdasarkan : </h3>
                </div>
                <div class="panel-body">
                  <div class="form-group" >
                    <label for="LastName" class="col-sm-2 control-label">Bulan</label>
                    <div class="col-xs-9">
                        <select name="bulan" id="select_bulan" class="form-control" style="width: 130px">
                          <option value="">Pilih Bulan</option>
                          <?php foreach ($bulan as $bln) { ?>
                          <option value="<?php echo $bln->bulan ?>"><?php echo konversiBulan($bln->bulan) ?></option>
                          <?php } ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="LastName" class="col-sm-2 control-label">Status Lowongan</label>
                    <div class="col-xs-9">
                        <select name="status" id="select_status" class="form-control" style="width: 130px">
                          <option value="">Pilih Status</option>
                          <?php foreach ($status as $sts) { ?>
                          <option value="<?php echo $sts->status_lowongan ?>"><?php echo $sts->status_lowongan ?></option>
                          <?php } ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-9">
                      <button id="btn-filter" name="btn-filter" class="btn btn-success" type="submit">Filter</button>
                      <button type="reset" id="btn-reset" class="btn btn-danger">Reset</button>
                    </div>
                  </div>
                </form>
              </div>
              <a href="<?php echo base_url('admin/c_lowongan/tambah_lowongan') ?>" class="btn btn-md btn-primary btn-tambah"><i class="fa fa-plus"></i>Tambah Lowongan</a>
            </div>
            <?php if ($this->session->flashdata('flash')) { ?>
              <div class="alert alert-success alert-dismissible fade show float-right" role="alert">
                Data lowongan <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php } ?>
            <table class="table table-bordered table-striped table-responsive w-100 d-block d-md-table" id="table1" style="margin-top: 20px;text-align: center;">
              <thead>
                <tr>
                  <th><input id="checkAll" type="checkbox"></th>
                  <th> No </th>
                  <th> Kategori </th>
                  <th> Nama Perusahaan </th>
                  <th> Batas Akhir </th>
                  <th> Judul </th>
                  <th> Status Lowongan </th>
                  <th style="display: none"> Deskripsi </th>
                  <th style="display: none"> Gaji </th>
                  <th style="display: none" class="notexport"> Gambar </th>
                  <th style="display: none"> Tanggal Posting </th>
                  <th> Lokasi </th>
                  <th class="notexport"> Aksi </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
                    $no = 0; 
                    foreach ($data as $lowongan) :
                    $no++
                  ?>
                  <input type="hidden" name="id" value="<?php echo $lowongan['id_lowongan']?>">
                  <td><input type="checkbox" name="pilih[]" value="<?php echo $lowongan['id_lowongan'] ?>"></td>
                  <td><?php echo $no ?></td>
                  <td><?php echo $lowongan['nama_kategori'] ?></td>
                  <td><?php echo $lowongan['nama_perusahaan'] ?></td>
                  <td><?php echo $lowongan['batas_akhir'] ?></td>
                  <td><?php echo $lowongan['judul'] ?></td>
                  <td>
                    <span class="badge badge-<?php echo ( $lowongan['status_lowongan'] == 'aktif' )? 'success' : 'danger' ?>"><?php echo $lowongan['status_lowongan'] ?></span> 
                  <td style="display: none"><?php echo $lowongan['deskripsi'] ?></td>
                  <td style="display: none"><?php echo $lowongan['gaji'] ?></td>
                  <td style="display: none" class="notexport"><img style="display: block;margin: auto" src="<?php echo base_url('img/lowongan/' . $lowongan['gambar']);?>" alt=""></td>
                  <td style="display: none"><?php echo $lowongan['tanggal_posting'] ?></td>
                  <td><?php echo $lowongan['lokasi'] ?></td>
                  <td class="notexport">
                    <a href="<?php echo base_url('admin/c_lowongan/detail_lowongan/') ?><?php echo $lowongan['id_lowongan']; ?>" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                    <a href="<?php echo base_url('admin/c_lowongan/edit_lowongan/') ?><?php echo $lowongan['id_lowongan']; ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo base_url('admin/c_lowongan/hapus_lowongan/') ?><?php echo $lowongan['id_lowongan']; ?>" class="btn btn-xs btn-danger" onclick = "return confirm('Yakin ingin menghapus data?')"><i class="fa fa-eraser"></i></a>
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
<script>
      $(document).ready(function() {
        var table =  $('#table1').DataTable();
        // $('#select_status').on('change', function () {
        //       table.columns(3).search( this.value ).draw();
        //     });
        });
    </script>