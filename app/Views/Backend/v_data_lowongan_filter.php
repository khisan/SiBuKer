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
          <h4 class="page-title">Data Lowongan Filter</h4>
        </div>
      </div>
    </div>
  <!-- Page Title Header Ends-->
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
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
                  // die(var_dump($data));
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