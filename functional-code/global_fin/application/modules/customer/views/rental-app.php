<?php 

$this->load->view('inc/header', $this->data);
$this->load->view('inc/sidebar', $this->data);

 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

    <!-- Main content -->
    <section class="content" style="padding-top: 10px;">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><strong>Rental Property Application</strong></h3>
        </div>
        <div class="card-body">
          <p><strong>Please fill out the application below in its entirety. Your changes will not be saved until the application is submitted.</strong></p>

          <p>Have you either received a quoted, submitted a file, or closed a loan with this client and Lima One Capital before?</p>
           <form>
          <div class="form-check">
            <span class="radio_customize01">
              <input class="form-check-input" type="radio" name="radio1">
              <label class="form-check-label">Yes</label>
            </span>
            <span class="radio_customize01">
              <input class="form-check-input" type="radio" name="radio1" checked="">
              <label class="form-check-label">No</label>
            </span>
          </div>
          <p><strong>If submitting a deal application on behalf of a new customer or a new borrowing entity, you’ll eventually need to submit a line of credit application for them to be approved as a borrower. Please contact your sales representative with any questions.</strong></p>
          <h3>PROPERTY INFORMATION</h3>
          <label>Select Property Type*</label>
          <ul class="property_ck_bx">
              <li>
                  <div class="form-check">
                    <span class="radio_customize01">
                      <input class="form-check-input" type="radio" name="radio1">
                      <label class="form-check-label" style="white-space: nowrap;">Single Property</label>
                    </span>                    
                  </div>
                  <div class="form-check">
                    <span class="radio_customize01">
                      <input class="form-check-input" type="radio" name="radio1">
                      <label class="form-check-label">Portfolio</label>
                    </span>                    
                  </div>
              </li>
               
          </ul> 
           
                   
                </form>
        </div>
        
      </div>
      <!-- /.card -->

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
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Terms & Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>This loan application (this “Application”) is designed to be completed by the authorized signatory(s) on behalf of the borrower entity (“Borrower”). Borrower is an applicant for the loan requested from Global Integrity Finance Capital, LLC (“Lender”) pursuant to this Application (the “Loan”). Completion and/or submission of this Application is not to be considered a loan commitment from the Lender or the Lender’s broker for the Loan.</p>

        <p>Borrower hereby warrants and represents to Lender and Lender’s actual or potential agents, brokers, processors, attorneys, insurers, servicers, successors and assigns (collectively “Representatives”) that (i) it wishes to continue with this Application, (ii) the Loan is for business and commercial purposes and not personal, family or household or other noncommercial or farming or agricultural purposes, (iii) the Loan proceeds are intended to be used for business and commercial purposes only and not for personal, family or household or other noncommercial or farming or agricultural purposes, (iv) the property(s) securing the Loan is not currently occupied by or planned to be occupied by any of Borrower’s members or such members’ family members as a primary residence or vacation home and none of Borrower’s members or such members’ family members shall occupy or reside in the property(s) securing the Loan during the term of the Loan, (v) the Loan will be secured by a mortgage or deed of trust on the property(s) described in this Application; (vi) the information provided in this Application is true and correct as of the date hereof and any intentional or negligent misrepresentation of this information contained in this Application may result in civil or criminal liability to any person who may suffer any loss due to reliance upon any misrepresentation made on this Application; (vii) the property(s) securing the Loan will not be used for any illegal or prohibited purpose or use, (viii) all statements made in this Application are made for the purpose of obtaining a commercial and business purpose loan; (ix) the Lender and its Representatives may retain the original and/or an electronic record of this Application, whether or not the Loan is approved; (x) the Lender and its Representatives may continuously rely on the information contained in this Application, and Borrower is obligated to amend and/or supplement the information provided in this application if any of the material facts that Borrower has represented herein should change prior to closing of the Loan; (xi) in the event that any payments on the Loan become delinquent, the Lender, its servicers, successors or assigns may, in addition to any other rights and remedies that it may have relating to such delinquency, report Borrower’s name and account information to one or more consumer reporting agencies; (xii) ownership of the Loan and/or administration of the Loan account may be transferred with such notice as may be required by law; and (xiii) neither Lender nor its agents, brokers, insurers, servicers, successors or assigns has made any representation or warranty, express or implied, to Borrower regarding the property(s) or the condition or value of the property(s).</p>

        <p><u>Acknowledgement.</u> The undersigned hereby acknowledges that any owner of the Loan, its servicers, successors and assigns, may verify or reverify any information contained in this Application or obtain any information or data relating to the Loan, for any legitimate business purpose through any source, including a consumer reporting agency chosen by Lender. In addition, each of the undersigned represents to Lender that he/she is authorized to sign this Application on behalf of Borrower.</p>
        <p><em>My transmission of this Application as an "electronic record" containing my "electronic signature," as those terms are defined in applicable federal and/or state laws (excluding audio and video recordings), or my facsimile transmission of this Application containing a facsimile of my signature, shall be as effective, enforceable and valid as if a paper version of this Application were delivered containing my original written signature.</em></p>
      </div>
       
    </div>
  </div>
</div>
<?php $this->load->view('inc/footer', $this->data); ?>