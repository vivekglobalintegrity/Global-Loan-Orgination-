<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Global Integrity Finance</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php  echo base_url() ;  ?>admin-assets/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php  echo base_url() ;  ?>admin-assets/dist/css/adminlte.css">
  <link rel="stylesheet" href="<?php  echo base_url() ;  ?>admin-assets/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?php  echo base_url() ;  ?>admin-assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php  echo base_url() ;  ?>admin-assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php  echo base_url() ;  ?>admin-assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php  echo base_url() ;  ?>admin-assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php  echo base_url() ;  ?>admin-assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
   <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
     

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
       <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <img src="<?php  echo base_url() ;  ?>admin-assets/dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"><?php echo $this->session->userdata('email'); ?><span class="d-none d-md-inline"> <i class="fas fa-angle-down"></i></span></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="<?php  echo base_url() ;  ?>admin-assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            
            <p>
             <?php  echo $this->session->userdata('fname'); ?>
           
            </p>
          </li>
          <!-- Menu Body -->
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="<?php  echo site_url('admin/profile') ; ?>" class="btn btn-default btn-flat">Profile</a>
            <a href="<?php  echo site_url('admin/logout'); ?>" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->