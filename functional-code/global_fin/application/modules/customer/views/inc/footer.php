<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php  echo base_url() ;  ?>admin-assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php  echo base_url() ;  ?>admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?php  echo base_url() ;  ?>admin-assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php  echo base_url() ;  ?>admin-assets/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php  echo base_url() ;  ?>admin-assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php  echo base_url() ;  ?>admin-assets/dist/js/pages/dashboard3.js"></script>
<script src="<?php  echo base_url() ;  ?>admin-assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php  echo base_url() ;  ?>admin-assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php  echo base_url() ;  ?>admin-assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php  echo base_url() ;  ?>admin-assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php  echo base_url() ;  ?>admin-assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php  echo base_url() ;  ?>admin-assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php  echo base_url() ;  ?>admin-assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php  echo base_url() ;  ?>admin-assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php  echo base_url() ;  ?>admin-assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php  echo base_url() ;  ?>admin-assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php  echo base_url() ;  ?>admin-assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php  echo base_url() ;  ?>admin-assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php  echo base_url() ;  ?>admin-assets/plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "info": false,"ordering": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": false,
      "responsive": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
  });
</script>
<script type="text/javascript">
  $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
</script>
<script type="text/javascript">
 $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</body>
</html>
