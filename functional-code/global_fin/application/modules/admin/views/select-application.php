<?php 
$this->load->view('inc/header', $this->data);
$this->load->view('inc/sidebar', $this->data);
 ?>
  <style type="text/css">
    .Application img {
    border-radius: 10px;
    max-height: 85px;
}

</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     

    <!-- Main content -->
    <section class="content" style="padding-top: 10px;">

      <!-- Default box -->
      <div class="card ">
        <div class="card-header">
          <h1 class="card-title">Borrower Application</h1>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            
          </div>
        </div>
        <div class="card-body">
           <div class="col-sm-4 text-center Application">
               <img src="<?php   echo base_url() ; ?>admin-assets/dist/img/p-img.png" class="mb-3" >
               <p><a href="<?php echo site_url('admin/line_of_credit_approval') ; ?>">Submit for Line of Credit Approval </a></p>
           </div>
        </div>
      </div>
      <!-- /.card -->
      <!-- Default box -->
      <div class="card ">
        <div class="card-header">
          <h1 class="card-title">Property Application</h1>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            
          </div>
        </div>
        <div class="card-body">
           <div class="row">
                <div class="col-sm-3 text-center Application">
                  <img src="<?php   echo base_url() ; ?>admin-assets/dist/img/p-img.png" class="mb-3" >
                  <p><a href="<?php echo site_url('admin/line_of_credit_approval') ; ?>">Purchase or rehab an individual property in order to sell it for a profit.
                  </a></p>
                </div>
                <div class="col-sm-3 text-center Application">
                  <img src="<?php   echo base_url() ; ?>admin-assets/dist/img/p-img.png" class="mb-3" >
                  <p><a href="<?php echo site_url('admin/rental_app') ; ?>">
                    Purchase or refinance cash-flowing rental properties.
                  </a></p>
                </div>
                <div class="col-sm-3 text-center Application">
                  <img src="<?php   echo base_url() ; ?>admin-assets/dist/img/p-img.png" class="mb-3" >
                   <p><a href="#">
                     Application for Multifamily.
                  </a></p>
                </div>
                <div class="col-sm-3 text-center Application">
                  <img src="<?php   echo base_url() ; ?>admin-assets/dist/img/p-img.png" class="mb-3" >
                   <p><a href="<?php echo site_url('admin/new_application_new_construction'); ?>">
                     Application for New Construction.
                  </a></p>
                </div>
           </div>
        </div>
         
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php $this->load->view('inc/footer', $this->data); ?>