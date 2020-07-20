          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
              </span>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url('assets/admin/vendors/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/js/vendor.bundle.base.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/js/vendor.bundle.addons.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/shared/off-canvas.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/shared/misc.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/demo_1/dashboard.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/datatables/DataTables/js/datatables.min.js') ?>"></script>

    <script>
      $(document).ready(function() {
        $('#table1').DataTable( {
          // $('#select_bulan').on('change', function () {
          //           table.columns(3).search( this.value ).draw();
          //       } );
            // var exportTitle =$(".page-title").text();
            dom: 'Bfrtip',
            buttons: [
              {
                extend: 'copy',
                title: function () {
                  return $(".page-title").text()
                },
                exportOptions: {
                    // columns: ':visible'
                    columns: ':not(.notexport)',

                }
              },
              {
                extend: 'csv',
                title: function () {
                  return $(".page-title").text()
                },
                exportOptions: {
                    // columns: ':visible'
                    columns: ':not(.notexport)',

                    
                }
              },
              {
                extend: 'excel',
                title: function () {
                  return $(".page-title").text()
                },
                exportOptions: {
                    // columns: ':visible'
                    columns: ':not(.notexport)',

                    
                }
              },
              {
                extend: 'pdf',
                orientation: 'landscape',
                pageSize: 'LEGAL',
                title: function () {
                  return $(".page-title").text()
                },
                exportOptions: {
                  columns: ':not(.notexport)',
                  modifier: {
                       alignment: 'center'
                   }
                  //aligment: 'center',
                    // columns: ':visible'
                },
              },
              {
                extend: 'print',
                title: function () {
                  return $(".page-title").text()
                },
                exportOptions: {
                    // columns: ':visible'
                    columns: ':not(.notexport)',

                }
              },
              'colvis'
              // 'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            "lengthMenu": [[5, 10, 15, 20, 25, 30, -1], [5, 10, 15, 20, 25, 30, "All"]]
          });
        });
    </script>
  </body>
</html>