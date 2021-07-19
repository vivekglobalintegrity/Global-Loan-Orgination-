<?php 
$this->load->view('inc/header', $this->data);
$this->load->view('inc/sidebar', $this->data);
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding-top: 10px;">
     
<div class="col-md-12">
<div class="card card-success">
  <div class="card-header">
    <h3 class="card-title">Loans In Process</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
      </button>
    </div>
    <!-- /.card-tools -->
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>NICKNAME</th>
                    <th>ADDRESS</th>
                    <th>LOAN NUMBER</th>
                    <th>PRODUCT</th>
                    <th>STATUS</th>
                    <th>STATUS DATE</th>
                    <th>LOAN AMOUNT</th>
                  </tr>
                  </thead>
                  <tbody>
                   
                  <tr>
                    <td>Peters</td>
                    <td>700 S. Ash St., APT.12</td>
                    <td>09</td>
                    <td>Product1</td>
                    <td>Active</td>
                    <td>09/07/2021</td>
                    <td>40,000</td>
                  </tr>
                  <tr>
                    <td>Jackson</td>
                    <td>410 Mariposa St., #10</td>
                    <td>10</td>
                    <td>Product2</td>
                    <td>Active</td>
                    <td>09/01/2021</td>
                    <td>45,000</td>
                  </tr>
                  <tr>
                    <td>Miller</td>
                    <td>340 MAIN STREET, #7</td>
                    <td>11</td>
                    <td>Product3</td>
                    <td>Inactive</td>
                    <td>05/07/2021</td>
                    <td>70,000</td>
                  </tr>
                  <tr>
                    <td>Smith</td>
                    <td> 1340 N. Ash Street, #3</td>
                    <td>12</td>
                    <td>Product4</td>
                    <td>Active</td>
                    <td>01/03/2021</td>
                    <td>80,000</td>
                  </tr>
                  <tr>
                    <td>Jackson</td>
                    <td>133 BROADWAY APT. 1</td>
                    <td>13</td>
                    <td>Product5</td>
                    <td>Inactive</td>
                    <td>09/03/2021</td>
                    <td>90,000</td>
                  </tr>
                  <tr>
                    <td>Smith</td>
                    <td>2000 Humboldt St., #6</td>
                    <td>14</td>
                    <td>Product6</td>
                    <td>Active</td>
                    <td>09/07/2020</td>
                    <td>40,000</td>
                  </tr>
                   <tr>
                    <td>Peters</td>
                    <td>700 S. Ash St., APT.12</td>
                    <td>09</td>
                    <td>Product1</td>
                    <td>Active</td>
                    <td>09/07/2021</td>
                    <td>40,000</td>
                  </tr>
                  <tr>
                    <td>Smith</td>
                    <td>410 Mariposa St., #10</td>
                    <td>10</td>
                    <td>Product2</td>
                    <td>Active</td>
                    <td>09/01/2021</td>
                    <td>45,000</td>
                  </tr>
                  <tr>
                    <td>Peters</td>
                    <td>340 MAIN STREET, #7</td>
                    <td>11</td>
                    <td>Product3</td>
                    <td>Inactive</td>
                    <td>05/07/2021</td>
                    <td>70,000</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td> 1340 N. Ash Street, #3</td>
                    <td>12</td>
                    <td>Product4</td>
                    <td>Active</td>
                    <td>01/03/2021</td>
                    <td>80,000</td>
                  </tr>
                  <tr>
                    <td>Smith</td>
                    <td>133 BROADWAY APT. 1</td>
                    <td>13</td>
                    <td>Product5</td>
                    <td>Inactive</td>
                    <td>09/03/2021</td>
                    <td>90,000</td>
                  </tr>
                  <tr>
                    <td>Peters</td>
                    <td>2000 Humboldt St., #6</td>
                    <td>14</td>
                    <td>Product6</td>
                    <td>Active</td>
                    <td>09/07/2020</td>
                    <td>40,000</td>
                  </tr>
                  </tbody>
                   
                </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<div class="col-md-12">
<div class="card card-success">
  <div class="card-header">
    <h3 class="card-title">Funded Loans</h3>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
      </button>
    </div>
    <!-- /.card-tools -->
  </div>
  <!-- /.card-header -->
  <div class="card-body">
     <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NICKNAME</th>
                    <th>ADDRESS</th>
                    <th>LOAN NUMBER</th>
                    <th>REMAINING ESCROW</th>
                    <th>CONSTRUCTION BUDGET</th>
                    <th>DRAW STATUS</th>
                     
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Smith</td>
                    <td>New Delhi</td>
                    <td>0994</td>
                    <td>8000</td>
                    <td>80,000</td>
                    <td>Active</td>
                  </tr>
                  <tr>
                    <td>Jackson</td>
                    <td>Noida</td>
                    <td>065</td>
                    <td>5000</td>
                    <td>20,000</td>
                    <td>Active</td>
                  </tr>
                  <tr>
                    <td>Miller</td>
                    <td>Noida</td>
                    <td>078</td>
                    <td>9000</td>
                    <td>70,000</td>
                    <td>Inactive</td>
                  </tr>
                  <tr>
                    <td>Smith</td>
                    <td>New Delhi</td>
                    <td>0994</td>
                    <td>8000</td>
                    <td>80,000</td>
                    <td>Active</td>
                  </tr>
                  <tr>
                    <td>Jackson</td>
                    <td>Noida</td>
                    <td>065</td>
                    <td>5000</td>
                    <td>20,000</td>
                    <td>Active</td>
                  </tr>
                  <tr>
                    <td>Miller</td>
                    <td>Noida</td>
                    <td>078</td>
                    <td>9000</td>
                    <td>70,000</td>
                    <td>Inactive</td>
                  </tr>
                  <tr>
                    <td>Smith</td>
                    <td>New Delhi</td>
                    <td>0994</td>
                    <td>8000</td>
                    <td>80,000</td>
                    <td>Active</td>
                  </tr>
                  <tr>
                    <td>Jackson</td>
                    <td>Noida</td>
                    <td>065</td>
                    <td>5000</td>
                    <td>20,000</td>
                    <td>Active</td>
                  </tr>
                  <tr>
                    <td>Miller</td>
                    <td>Noida</td>
                    <td>078</td>
                    <td>9000</td>
                    <td>70,000</td>
                    <td>Inactive</td>
                  </tr>
                   
                  </tbody>
                  
                </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
     
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  
</div>
<!-- ./wrapper -->
<?php $this->load->view('inc/footer', $this->data); ?>