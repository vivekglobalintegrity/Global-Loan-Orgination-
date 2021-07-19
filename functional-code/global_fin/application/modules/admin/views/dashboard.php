<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Global Integrity Finance</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- new common page -->
  <link rel="stylesheet" href="<?php   echo base_url() ; ?>admin-assets/dist/css/adminlte.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php   echo base_url() ; ?>admin-assets/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php   echo base_url() ; ?>admin-assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php   echo base_url() ; ?>admin-assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php   echo base_url() ; ?>admin-assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php   echo base_url() ; ?>admin-assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php   echo base_url() ; ?>admin-assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php   echo base_url() ; ?>admin-assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="<?php   echo base_url() ; ?>admin-assets/plugins/daterangepicker/daterangepicker.css">
  <!-- end comman page -->
  <!-- map -->
  <link rel="stylesheet" href="<?php   echo base_url() ; ?>admin-assets/plugins/jqvmap/jqvmap.min.css">
  <!-- map -->
  <style type="text/css">
    .small-box p, .small-box h3 {
    margin: 0;
}
.small-box h3 {
  font-size: 21px !important;
}
.small-box .icon>i.fa, .small-box .icon>i.fab, .small-box .icon>i.fad, .small-box .icon>i.fal, .small-box .icon>i.far, .small-box .icon>i.fas, .small-box .icon>i.ion {
    font-size: 56px;
    top: 11px;
}
.card-title { 
    font-size: 0.9rem;
  }
  .small-box p {
    font-size: 0.8rem;
}
  </style>
 <!-- new chart1 -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Archived',  12.50],
          ['Lead',  25.00],
          ['Stage 1 Proc',  12.50],  
          ['Affliate Partner', 25],
          ['Suspense',    25]
        ]);

        var options = {
          // title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  <!-- new chart1 -->
  
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Rental Loan', 20],
          ['Agency Loan',  20],
          ['Bridge Loan',  60], 
        ]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3dw'));
        chart.draw(data, options);
      }
    </script>
    
  </head> 
</head>
 
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav top-nav009">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" style="border-bottom: 3px solid; background: #ddd;">
        <a href="#" class="nav-link">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Resources</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <img src="<?php   echo base_url() ; ?>admin-assets/dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"><?php  echo $this->session->userdata('email'); ?> <span class="d-none d-md-inline"> <i class="fas fa-angle-down"></i></span></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="<?php   echo base_url() ; ?>admin-assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            
            <p>
              <?php echo $this->session->userdata('fname'); ?>
            </p>
          </li>
          <!-- Menu Body -->
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="<?php   echo site_url('admin/profile') ;  ?>" class="btn btn-default btn-flat">Profile</a>
            <a href="<?php echo site_url('admin/logout') ; ?>" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('inc/sidebar', $this->data); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
           
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>$ 245,000</h3>

                <p>Lead</p>
              </div>
              <div class="icon">
                <i class="fas fa-globe-americas"></i>
              </div>
              <a href="#" class="small-box-footer">File(s) 0<!-- <i class="fas fa-arrow-circle-right"></i> --></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>$ 0</h3>

                <p>Stage 1 Proc</p>
              </div>
              <div class="icon">
                <i class="fas fa-globe-americas"></i>
              </div>
              <a href="#" class="small-box-footer">File(s) 3</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>$ 0</h3>

                <p>Waiting On Borrower</p>
              </div>
              <div class="icon">
                <i class="fas fa-globe-americas"></i>
              </div>
              <a href="#" class="small-box-footer">File(s) 2</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>$ 0</h3>

                <p>Stage 2 & 3 Proc</p>
              </div>
              <div class="icon">
                <i class="fas fa-globe-americas"></i>
              </div>
              <a href="#" class="small-box-footer">File(s) 5</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>$ 0</h3>

                <p>Affliate Partner</p>
              </div>
              <div class="icon">
                <i class="fas fa-globe-americas"></i>
              </div>
              <a href="#" class="small-box-footer">File(s) 2</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>$ 0</h3>

                <p>Pre-Underwriting</p>
              </div>
              <div class="icon">
                <i class="fas fa-globe-americas"></i>
              </div>
              <a href="#" class="small-box-footer">File(s) 1</a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>$ 0</h3>

                <p>Affliate Partner</p>
              </div>
              <div class="icon">
                <i class="fas fa-globe-americas"></i>
              </div>
              <a href="#" class="small-box-footer">File(s) 2</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>$ 0</h3>

                <p>Pre-Underwriting</p>
              </div>
              <div class="icon">
                <i class="fas fa-globe-americas"></i>
              </div>
              <a href="#" class="small-box-footer">File(s) 1</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>$ 0</h3>
                <p>Underwriting</p>
              </div>
              <div class="icon">
                <i class="fas fa-globe-americas"></i>
              </div>
              <a href="#" class="small-box-footer">File(s) 1</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>$ 0</h3>

                <p>Clear To Close</p>
              </div>
              <div class="icon">
                <i class="fas fa-globe-americas"></i>
              </div>
              <a href="#" class="small-box-footer">File(s) 6<!-- <i class="fas fa-arrow-circle-right"></i> --></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>$ 0</h3>

                <p>Affliate Partner</p>
              </div>
              <div class="icon">
                <i class="fas fa-globe-americas"></i>
              </div>
              <a href="#" class="small-box-footer">File(s) 2</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>$ 0</h3>

                <p>Pre-Underwriting</p>
              </div>
              <div class="icon">
                <i class="fas fa-globe-americas"></i>
              </div>
              <a href="#" class="small-box-footer">File(s) 1</a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="col-12 col-sm-12  ">
            <div class="card card-success">
              <div class="card card-primary card-outline card-outline-tabs" style="margin-bottom: 0;">
                <div class="card-header p-0 border-bottom-0 card-header">
                  <ul class="nav nav-tabs card-title" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true"> <i class="fas fa-calendar-alt"></i> Upcoming Closings</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false"> <i class="fas fa-history"></i> Most Recent</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false"><i class="fas fa-cog"></i> Top Producers</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false"><i class="fas fa-clipboard"></i> Task & Reminder</a>
                    </li>
                  </ul>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false">
                      <i class="fas fa-sync-alt"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                      <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                       <h6>No Loans have a closing date set</h6>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                       
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                       <table class="table table-hover text-nowrap">
                          <thead>
                            <tr>
                              <th colspan="4" style="text-align: center; background: #ddd;">BROKER</th>
                              
                            </tr>
                            <tr>
                              <th>NAME</th>
                              <th>COMPANY</th>
                              <th># FILES</th>
                              <th>TOTAL LOAN AMT</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><a href="#!">Keco Capital Cory/Alexander</a></td>
                              <td>Keco Capital LLC</td>
                              <td>1</td>
                              <td>$</td>
                            </tr>
                            <tr>
                              <td><a href="#!">Envision Funding Solutions Regine Daley</a></td>
                              <td>Envision Funding Solutions</td>
                              <td>3</td>
                              <td>$</td>
                            </tr>
                            <tr>
                              <td><a href="#!">Envision Funding Solutions Sales Manager</a></td>
                              <td>Envision Funding Solutions</td>
                              <td>2</td>
                              <td>$</td>
                            </tr>
                              
                          </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                    <p>
                      <span class="badge" style="background-color:#ffcccc !important;">Not Started</span>
                      <span class="badge" style="background-color:#f3f3f3 !important;">In Progress</span>
                      <span class="badge">Completed</span>
                      <span class="badge" style="background-color:#cccccc !important;">Not Applicable</span>
                      <span class="badge bg-danger">Past Due</span>
                    </p>
                       <table class="table table-hover text-nowrap">
                          <thead>
                            <tr>
                              <th>BORROWER</th>
                              <th>SUBJECT</th>
                              <th>DUE DATE</th>
                              <th>NOTES</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                              
                          </tbody>
                        </table>
                    </div>
                  </div>
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
         <div class="row">
          <div class="col-md-6"> 
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Statewide Map</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 bg-gradient-primary">
                   <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div>
              <!-- /.card-body -->
             </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6"> 
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pipeline Stats for Deal Flow</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 ">
                   <div id="piechart_3d" style="width: 100%; height: 250px;"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
         </div>
         <div class="row">
          <div class="col-md-6"> 
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Loan Programs / Services Stats</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 bg-gradient-primary">
                    
                   <div id="piechart_3dw" style="width: 100%; height: 250px;"></div>
              </div>
              <!-- /.card-body -->
             </div>
            <!-- /.card -->
          </div> 
         </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


<!-- REQUIRED SCRIPTS -->
 
<!-- jQuery -->
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- AdminLTE -->
<script src="<?php   echo base_url() ; ?>admin-assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php   echo base_url() ; ?>admin-assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php   echo base_url() ; ?>admin-assets/dist/js/pages/dashboard3.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/select2/js/select2.full.min.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
 
<script src="<?php   echo base_url() ; ?>admin-assets/dist/js/pages/dashboard.js"></script> 
<!-- Summernote -->
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->

<!-- jQuery Knob Chart -->
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php   echo base_url() ; ?>admin-assets/plugins/moment/moment.min.js"></script>

<script src="<?php   echo base_url() ; ?>admin-assets/dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "info": false,"ordering": false,
      "buttons": ["copy"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": false,
      "responsive": true,
      "buttons": ["copy"]
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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e7bcca769e9320caabd0a3e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
 

<!-- map -->
 
</body>
</html>
