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
          <h3 class="card-title"><strong>Borrower and Primary Guarantor Application</strong></h3>
        </div>
        <div class="card-body">
          <p>Please fill out the application below in its entirety. Your changes will not be saved until the application is submitted.   Select existing borrowing entity, or create a new one below.</p>

                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Customer</label>
                    <select class="form-control">
                       <option>New Customer</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select New or Existing Borrowing Entity <span>*</span></label>
                    <select class="form-control">
                       <option>New Borrowing Entity</option>
                    </select>
                  </div>

                  <div class="row">
                    <div class="col-md-12"> <hr> </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Borrowing Entity Name <span>*</span></label>
                        <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Company Type <span>*</span></label>
                        <select class="form-control">
                           <option value="">Choose Option</option>
                           <option>LLC</option>
                           <option>LLP</option>
                           <option>S-Corp</option>
                           <option>C-Corp</option>
                           <option>Land Trust</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Business EIN <span>*</span></label>
                        <input type="text" class="form-control" placeholder="xx-xxxxxxx">
                      </div>
                    </div>
                  <div class="col-md-6" >
                    
                       <label class="form-check-label"> <strong>Registered to Do Business in What States <span>*</span> </strong></label>
                    <div class="register-bussiness">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Alabama</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" checked="">
                          <label class="form-check-label">Alaska</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Arizona</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Arkansas</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">California</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" checked="">
                          <label class="form-check-label">Colorado</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Connecticut</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Delaware</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">District of Columbia</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" checked="">
                          <label class="form-check-label">Florida</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Georgia</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Hawaii</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Idaho</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" checked="">
                          <label class="form-check-label">Illinois</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Indiana</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Iowa</label>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="col-md-12"> 
                      <hr> 
                      <h3>Guarantor Information</h3>
                      <strong>PRIMARY GUARANTOR</strong>
                       <hr>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>First Name <span>*</span></label>
                        <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Title  </label>
                        <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>City  </label>
                        <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Date of Birth <span>*</span></label>
                        <input type="date" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label>Email Address <span>*</span> </label>
                        <input type="email" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Estimated Credit Score <span>*</span> </label>
                        <input type="text" class="form-control" placeholder="XXX">
                      </div>
                      <div class="input-group">
                        <label>Ownership Percentage of Borrowing Entity </label>
                      </div>
                      <div class="input-group">
                         
                        <input type="text" class="form-control">
                        <div class="input-group-append">
                          <span class="input-group-text">%</span>
                        </div>
                      </div>
                      
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Last Name <span>*</span></label>
                        <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Steet Address  <span>*</span></label>
                        <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>State  <span>*</span></label>
                        <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Zip  <span>*</span></label>
                        <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Social Security Number  <span>*</span></label>
                        <input type="text" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Phone Number  <span>*</span></label>
                        <input type="text" class="form-control" >
                      </div>
                        
                      <div class="form-group">
                        <label>Country of Citizenship <span>*</span></label>
                        <select class="form-control">
                           <option value="">Choose Option</option>
                           <option >United States</option>
                           <option >Afghanistan</option>
                           <option>Albania</option>
                           <option>Algeria</option>
                           <option>Andorra</option>
                           <option>Angola</option>
                           <option>Antigua &amp; Deps</option>
                           <option>Argentina</option>
                           <option>Armenia</option>
                           <option>Australia</option>
                           <option>Austria</option>
                           <option >Azerbaijan</option>
                           <option>Bahamas</option>
                           <option>Bahrain</option>
                           <option>Bangladesh</option>
                           <option>Barbados</option>
                           <option>Belarus</option>
                           <option>Belgium</option>
                        </select>
                      </div>
                      
                    </div>
                    <div class="col-md-12"> 
                      <hr> 
                      <p>Which areas of real estate do you operate in? (Select all that apply.)*</p>
                      <ul class="real_estate_ck_bx">
                        <li>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Alabama</label>
                              </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Alabama</label>
                              </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Alabama</label>
                              </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Alabama</label>
                              </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Alabama</label>
                              </div>
                            </div>
                        </li>
                         
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Number of rental units currently owned/bought in the last 3 years <span>*</span></label>
                        <input type="number" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Currently estimated value of your real estate portfolio  <span>*</span></label>
                        <input type="text" class="form-control" placeholder="$0">
                      </div>
                      <div class="form-group">
                        <label>Number of new construction builds in the past 3 years <span>*</span> </label>
                        <input type="number" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Number of rental units currently owned regardless of purchase date <span>*</span></label>
                        <input type="number" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Number of FixNFlips sold in the past 3 years  <span>*</span></label>
                        <input type="number" class="form-control" >
                      </div> 
                        
                      <div class="form-group">
                        <label>Do you have a GC on staff or do you hire a third party? <span>*</span></label>
                        <select class="form-control">
                           <option value="">Select GC on Staff</option>
                           <option value="GC on Staff">GC on Staff</option>
                           <option value="Third Party GC">Third Party GC</option>
                        </select>
                      </div>
                      
                    </div>
                    <div class="col-md-12">
                      <p><strong>Note: If third party, ask your sales representative for a contractor application</strong></p>
                       <table class="table table-bordered">
                          <tbody>
                            <tr>
                               <td>
                                  <label>Convicted of or currently accused of a felony, or any crime involving fraud, financial malfeasance, or misrepresentation? <span>*</span></label>
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
                                  <label>Have any outstanding judgments? <span>*</span></label>
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
                                  <label>Had a foreclosure or given title or deed in lieu of foreclosure, or a short sale, in the past 3 years? <span>*</span></label>
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
                                  <label>Party to any outstanding lawsuits? <span>*</span></label>
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
                                  <label>Declared bankruptcy in the past 4 years, or actively involved in a bankruptcy? <span>*</span></label>
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
                                  <label>Presently delinquent on any mortgage loan of other financial obligation? <span>*</span></label>
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
                       <p><strong>If you answered yes to any of the questions above, please provide your sales representative a seperate page with a detailed explanation.</strong></p>
                       <hr>
                        <h3>Personal Financial Statement</h3>
                        <strong>Complete the below OR provide your own detailed Personal Financial Statement to your sales representative.</strong>
                       <hr>
                       <p><strong>LIQUID ASSETS</strong></p>

                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Cash </label>
                        <input type="text" class="form-control" placeholder="$0" >
                      </div>
                      <div class="form-group">
                        <label>Stocks & Bonds </label>
                        <input type="text" class="form-control" placeholder="$0">
                      </div>
                      <div class="form-group">
                        <label>Total Liquid Assets </label>
                        <input type="text" class="form-control" placeholder="$0" >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Retirement Accounts </label>
                        <input type="text" class="form-control" placeholder="$0" >
                      </div>
                      <div class="form-group">
                        <label>Other Liquid Assets </label>
                        <input type="text" class="form-control" placeholder="$0">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <hr>
                      <p><strong>NON-LIQUID ASSETS</strong></p>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Non-Liquid Real Estate Assets </label>
                        <input type="text" class="form-control" placeholder="$0" >
                      </div>
                      <div class="form-group">
                        <label>Autos </label>
                        <input type="text" class="form-control" placeholder="$0">
                      </div>
                      
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Other Personal Property </label>
                        <input type="text" class="form-control" placeholder="$0" >
                      </div>
                      <div class="form-group">
                        <label>Total Non-Liquid Assets</label>
                        <input type="text" class="form-control" placeholder="$0">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <hr>
                      <p><strong>DEBT</strong></p>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Real Estate Debt</label>
                        <input type="text" class="form-control" placeholder="$0" >
                      </div>
                      <div class="form-group">
                        <label>Installment Debt </label>
                        <input type="text" class="form-control" placeholder="$0">
                      </div>
                      <div class="form-group">
                        <label>Notes Payable</label>
                        <input type="text" class="form-control" placeholder="$0">
                      </div>
                      
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Revolving Debt </label>
                        <input type="text" class="form-control" placeholder="$0" >
                      </div>
                      <div class="form-group">
                        <label>Other Debt</label>
                        <input type="text" class="form-control" placeholder="$0">
                      </div>
                      <div class="form-group">
                        <label>Total Debt</label>
                        <input type="text" class="form-control" placeholder="$0">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Net Worth <span>*</span> </label>
                        <input type="text" class="form-control" placeholder="$0" >
                      </div>
                       
                    </div>
                    <div class="col-md-12">
                      <p>Please be prepared to provide 60 days of current statements for all liquidity mentioned above. </p>
                      <p>Note that Global Integrity Finance will use a discount against retirement accounts, stocks, and other liquid assets in calculating total liquidity for our loan level requirements.</p>
                      <p>Please Provide a detailed track record and REO schedule. (Ask your sales representative if you need a template.)</p>
                       
                    </div>
                    <div class="col-md-12">
                      <hr>
                      <p><strong>Upload Application & Consent</strong></p>
                      <p>In order to process the application for your client, we require an executed Credit Consent Form. Upload a customer-signed copy of the consent form using the upload button below. Use the download button in order to obtain an up-to-date copy of the consent form.</p>
                       <button type="submit" class="btn btn-primary">DOWNLOAD CREDIT CONSENT FORM</button>
                       <hr>
                       <p><strong>UPLOAD APPLICATION & CONSENT FORM</strong></p>
                       <hr>
                       <div class="input-group col-md-8">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                          <span style="color: red;"> &nbsp; &nbsp; *Upload required for submission 
                          </span>
                       </div>
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