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
          <h3 class="card-title"><strong>FixNFlip | Bridge Application</strong></h3>
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
          <h3>Guarantor Information</h3>
          <label>Select Property Type*</label>
          <ul class="property_ck_bx">
              <li>
                  <div class="form-check">
                    <span class="radio_customize01">
                      <input class="form-check-input" type="radio" name="radio1">
                      <label class="form-check-label" style="white-space: nowrap;">Single Family</label>
                    </span>                    
                  </div>
              </li>
              <li>
                  <div class="form-check">
                    <span class="radio_customize01">
                      <input class="form-check-input" type="radio" name="radio1">
                      <label class="form-check-label">2-4 Unit</label>
                    </span>                    
                  </div>
              </li>
              <li>
                  <div class="form-check">
                    <span class="radio_customize01">
                      <input class="form-check-input" type="radio" name="radio1">
                      <label class="form-check-label">Condo</label>
                    </span>                    
                  </div>
              </li> 
          </ul> 
                  <div class="row">
                    <div class="col-md-12"> <hr> </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Street Address <span>*</span></label>
                        <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>City  <span>*</span></label>
                        <input type="text" class="form-control"  >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Unit Number <span>*</span></label>
                        <input type="text" class="form-control" >
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label>State <span>*</span></label>
                          <input type="text" class="form-control" >
                        </div>
                        <div class="form-group col-md-6">
                          <label>Zip  <span>*</span></label>
                          <input type="text" class="form-control" >
                        </div>
                      </div> 
                    </div>
                    <div class="col-md-12"> <hr> 
                     <h3 class="card-title"><strong>Requested Loan Information</strong></h3>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Loan Purpose <span>*</span></label>
                        <select class="form-control">
                           <option value="">Choose Option</option>
                           <option value="Purchase">Purchase</option>
                           <option value="Refinance (cash out)"  >Refinance (cash out)</option>
                           <option value="Refinance (rate and term)">Refinance (rate and term)</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Loan Program <span>*</span></label>
                        <select class="form-control">
                          <option value="">Choose Option</option>
                          <option  value="FixNFlip" >FixNFlip (Rehab works is being completed)</option>
                          <option value="Bridge Loan" >Bridge Loan (No rehab)</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>How long do you anticipate it taking from loan close, to selling/refinancing the property? <span>*</span></label>
                        <input type="text" class="form-control" >
                      </div>
                       
                    </div>
                    <div class="col-md-6" >
                        
                        <div class="form-group">
                          <label>Target Close Date <span>*</span></label>
                          <input type="date" class="form-control" >
                        </div>
                        <div class="form-group">
                          <label>Exit Strategy <span>*</span></label>
                          <select class="form-control">
                            <option value="">Choose Option</option>
                            <option value="Sell" >Sell</option>
                            <option value="Hold as rental" >Hold as rental</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-md-12"> <hr> </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Purchase Price (provide the original purchase price for refinances)* </label>
                        <input type="text" class="form-control" placeholder="$0" >
                      </div>
                      <div class="form-group">
                        <label>Total Rehab Budget Remaining* </label>
                        <input type="text" class="form-control" placeholder="$0">
                      </div>
                      <div class="form-group">
                        <label>Estimated After Repair Value* </label>
                        <input type="text" class="form-control" placeholder="$0" >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Current As-Is Market Value* </label>
                        <input type="text" class="form-control" placeholder="$0" >
                      </div>
                      <div class="form-group">
                        <label>Total Verifiable Rehab Already Completed to Date* </label>
                        <input type="text" class="form-control" placeholder="$0">
                      </div>
                      <div class="form-group">
                        <label>Requested Loan Amount* </label>
                        <input type="text" class="form-control" placeholder="$0">
                      </div>
                    </div>
                     <div class="col-md-12">
                      <hr>
                       <table class="table table-bordered">
                          <tbody>
                            <tr>
                               <td>
                                  <label>Will rehab draws be requested? <span>*</span></label>
                                  <div class="form-group">
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
                                  </div>
                               </td>
                               <td>
                                  <label>Are permits required for your project? <span>*</span></label>
                                  <div class="form-group">
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
                                  </div>
                               </td>
                            </tr>
                            <tr>
                               <td>
                                  <label>Will the property type be changing (i.e. from a SFR to a 2-unit, etc.) <span>*</span></label>
                                  <div class="form-group">
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
                                  </div>
                               </td>
                               <td>
                                  <label>Does the property require any zoning changes to complete your project? <span>*</span></label>
                                  <div class="form-group">
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
                                  </div>
                               </td>
                            </tr>
                            <tr>
                               <td>
                                  <label>Do you intend to subdivide the property or request partial releases? <span>*</span></label>
                                  <div class="form-group">
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
                                  </div>
                               </td>
                               <td>
                                  <label>Is there an existing mortgage on the property? <span>*</span></label>
                                  <div class="form-group">
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
                                  </div>
                               </td>
                            </tr>
                            <tr>
                               <td>
                                  <label>Are there any other existing liens on the property? <span>*</span></label>
                                  <div class="form-group">
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
                                  </div>
                               </td>
                               <td>
                                  <label>Is the home already under contract? <span>*</span></label>
                                  <div class="form-group">
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
                                  </div>
                               </td>
                            </tr>
                            <tr>
                               <td>
                                  <label>Using a third party contractor?<span>*</span></label>
                                  <div class="form-group">
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
                                  </div>
                               </td>
                               <td>
                                  <label>Will the property have a well or septic system? <span>*</span></label>
                                  <div class="form-group">
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
                                  </div>
                               </td>
                            </tr>
                            <tr>
                               <td>
                                  <label>Are you relocating or adding any mechanicals? (HVAC, electrical, or plumbing. Permits will be required where applicable.) <span>*</span></label>
                                  <div class="form-group">
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
                                  </div>
                               </td>
                               <td>
                                  <label>Do you intend to remove two or more load-bearing walls? <span>*</span></label>
                                  <div class="form-group">
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
                                  </div>
                               </td>
                            </tr>
                            <tr>
                               <td>
                                  <label>Are you adding livable square footage to the existing structure? (e.g. finishing a basement or attic) <span>*</span></label>
                                  <div class="form-group">
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
                                  </div>
                               </td>
                               <td>
                                  <label>Are you expanding the building envelope to add livable space? (e.g. an addition to the property, an ADU, etc.) <span>*</span></label>
                                  <div class="form-group">
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
                                  </div>
                               </td>
                            </tr>
                             
                          </tbody>
                       </table> 

                    </div>
                    <div class="col-md-12"> 
                       <h3>Property Access Contact Information</h3> 
                       <hr>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Property Access Contact Name <span>*</span></label>
                        <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Property Access Contact Phone  </label>
                        <input type="text" class="form-control" placeholder="xxx-xxx-xxxx">
                      </div> 
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Property Access Contact Email  </label>
                        <input type="text" class="form-control" >
                      </div> 
                    </div>
                    <div class="col-md-12"> 
                       <h3>Title Contact Information</h3> 
                       <hr>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Title Company Name </label>
                        <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Title Contact Email  </label>
                        <input type="text" class="form-control" >
                      </div> 
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Title Contact Name  </label>
                        <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Title Contact Phone  </label>
                        <input type="text" class="form-control" placeholder="xxx-xxx-xxxx">
                      </div> 
                    </div>
                    <div class="col-md-12"> 
                       <h3>Insurance Contact Information</h3> 
                       <hr>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Insurance Company Name </label>
                        <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Insurance Contact Email </label>
                        <input type="text" class="form-control" >
                      </div> 
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Insurance Contact Name  </label>
                        <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Insurance Contact Phone  </label>
                        <input type="text" class="form-control" placeholder="xxx-xxx-xxxx">
                      </div> 
                    </div> 
                    <div class="col-md-12">
                        
                       <hr>
                       <p><strong>Submit Application</strong></p>
                       <p>My transmission of this application as an “electronic record” containing my “electronic signature,” as those terms are defined in applicable federal and/or state laws (excluding audio and video recordings), or my facsimile transmission of this application containing a facsimile of my signature, shall be as effective, enforceable and valid as if a paper version of this application were delivered containing my original written signature.</p>

                       <p>Borrower is an applicant for the loan requested from Global Integrity Finance Capital, LLC (“Lender”) pursuant to this Application (the “Loan”). Completion and/or submission of this Application is not to be considered a loan commitment from the Lender or the Lender’s broker for the Loan.</p>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>First and Last Name of Broker <span>*</span></label>
                        <input type="text" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Date <span>*</span> </label>
                        <input type="date" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-12">
                      <p>In addition, you consent to the terms and conditions outlined <a href="#!" data-toggle="modal" data-target="#exampleModalCenter">here</a></p>
                      <div class="form-check" style="margin-bottom: 12px;">
                        <span class="radio_customize01">
                          <input class="form-check-input" type="radio" name="radio">
                          <label class="form-check-label" style="white-space: nowrap;"> I/We Agree *</label>
                        </span>
                      </div>
                      <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                  </div>
                   
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