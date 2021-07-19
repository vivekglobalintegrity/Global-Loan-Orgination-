<?php $this->load->view('inc/header', $this->data); ?>

 <!-- Main Sidebar Container -->
<?php $this->load->view('inc/sidebar', $this->data); ?>

<style type="">
  a.btn.btn-default.active {
    background: #3667b7;
    color: white;
}
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Loan File</h1>
          </div>
           
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-body form-listing009">
               <!--  <a href="javascript:void(0);" class="btn btn-default " title="Quick App"> 
                  Quick App <i class="fa fa-file"></i> 
                </a> -->
                <a href="javascript:void(0);" class="btn btn-default active" title="Full App"> 
                  Full App <i class="fa fa-file"></i> 
                </a>
                <a href="javascript:void(0);" class="btn btn-default" title="Borrower Info"> 
                  Borrower Info <i class="fa fa-user-circle"></i> 
                </a>
                <a href="javascript:void(0);" class="btn btn-default" title="Loan Info"> 
                  Loan Info <i class="ml-2  fa fa-percent"></i>
                </a>
                <a href="javascript:void(0);" class="btn btn-default" title="Property Info"> 
                  Property Info <i class="fa fa-home"></i>
                </a>
                <a href="javascript:void(0);" class="btn btn-default" title="Docs"> 
                  Docs <i class="fa fa-folder"></i>
                </a>
                <!-- <a href="javascript:void(0);" class="btn btn-default" title="Servicing"> 
                  Servicing <i class="fa fa-handshake"></i>
                </a>
                <a href="javascript:void(0);" class="btn btn-default" title="Workflow"> 
                  Workflow <i class="fa fa-tasks"></i>
                </a>
                <a href="javascript:void(0);" class="btn btn-default" title="Task"> 
                  Task <i class="fa fa-tasks"></i> 
                </a>
                <a href="javascript:void(0);" class="btn btn-default" title="Market Place"> 
                  Market Place <i class="fa fa-cart-arrow-down"></i>
                </a>
                <a href="javascript:void(0);" class="btn btn-default" title="Admin"> 
                  Admin <i class="fa fa-shield-alt"></i>
                </a>
                <a href="javascript:void(0);" class="btn btn-default" title="Billing & Com"> 
                  Billing &amp; Com  <i class="fa fa-credit-card"></i> 
                </a>
                <a href="javascript:void(0);" class="btn btn-default" title="3rd Party Services"> 
                  3rd Party Services <i class="fa fa-code-branch"></i>
                </a>
                <a href="javascript:void(0);" class="btn btn-default" title="Offers"> 
                  Offers <i class="fa fa-gift"></i>
                </a>
                <a href="javascript:void(0);" class="btn btn-default" title="Credit Memo"> 
                   Credit Memo <i class="fa fa-list "></i> 
                </a> -->
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>

        <!-- SELECT2 EXAMPLE -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Admin Info</h3>
            <div class="card-tools">
               
            </div>
          </div>
          <!-- /.card-header -->
          <form id="quickForm">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Select the Branch:</label>
                    <select class="form-control" style="width: 100%;" name="branch">
                      <option selected="selected" value="">-Select-</option>
                      <option value="Rachel Coffey">Rachel Coffey</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Select Broker</label>
                    <select class="form-control" style="width: 100%;" name="broker">
                       <option value="">- Select -</option>  
                       <option value="Envision Funding Solutions Regine Daley - info@envisionfs.net">Envision Funding Solutions Regine Daley - info@envisionfs.net</option>
                       <option value="Envision Funding Solutions Sales Manager - clane@envisionfs.net">Envision Funding Solutions Sales Manager - clane@envisionfs.net</option>
                       <option value="Global Integrity Finance Rachel Coffey - rcoffey@globalintegrityfinance.com">Global Integrity Finance Rachel Coffey - rcoffey@globalintegrityfinance.com</option>
                       <option value="JASON LEON - remove@remove.com">JASON LEON - remove@remove.com</option>
                       <option value="JW Capital Group LLC Maurice Wilson - mwilson@twgfl.com">JW Capital Group LLC Maurice Wilson - mwilson@twgfl.com</option>
                       <option value="Keco Capital Cory/Alexander - cory@kecocapital.com">Keco Capital Cory/Alexander - cory@kecocapital.com</option>
                       <option value="Option Funding Inc Tony Ko - Kimberly@optionfunding.net">Option Funding Inc Tony Ko - Kimberly@optionfunding.net</option>
                       <option value="Stout Lending Rockford Steele - rockford@stoutlending.com">Stout Lending Rockford Steele - rockford@stoutlending.com</option>
                       <option value="Wendy Dookie - wendy@jmrecapital.com">Wendy Dookie - wendy@jmrecapital.com</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Select the Loan Officer</label>
                    <select class="form-control"  style="width: 100%;" name="loan_officer">
                      <option selected="selected">-Select-</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>File Type</label>
                    <select class="form-control" style="width: 100%;" name="file_type">
                      <option value="HMLO" selected="">Commercial/Residential Real Estate</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
               
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>What kind of program are you looking for?</label>
                    <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" name="kind_of_program">
                      <option value="Aff">Affiliate loan program</option>
                      <option value="Age441">Agency Loan</option>
                      <option value="BRL">Bridge Loan</option>
                      <option value="COR">Cash Out Refi</option>
                      <option value="FAF">Fix and Flip</option>
                      <option value="P">Purchase Only</option>
                      <option value="Pur974">Purchase with rehab</option>
                      <option value="RBH">Rental Loan</option>
                      <option value="Refi">Refinance</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>Select Internal Loan Program</label>
                      <select class="select2" multiple="multiple" data-placeholder="Loan Program" name="internal_loan_program"   style="width: 100%;">
                       
                      </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>Where are you in the process?</label>
                    <select class="form-control select2 select2-hidden-accessible"  style="width: 100%;" name="the_process">
                       <option value=""> - Select -</option>
                       <option value="Looking for General Info">Looking for General Info</option>
                       <option value="Actively Looking For Property">Actively Looking For Property</option>
                       <option value="Identified a Property">Identified a Property</option>
                       <option value="Have Property Under Contract">Have Property Under Contract</option>
                       <option value="I Own The Property/Land">I Own The Property/Land</option>                                   
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>Select Primary Client File Status</label>
                      <select class="select2"    data-placeholder="Primary Client File Status" style="width: 100%;" name="primary_client_file">
                        <option value=""> - Select -</option>
                        <optgroup label="Commercial/Residential Real Estate"> 
                          <option value="Lead">Lead</option>
                          <option value="Stage 1 Proc">Stage 1 Proc</option>
                          <option value="waiting on Borrower">waiting on Borrower</option>              
                          <option value="Stage 2 & 3 Proc">Stage 2 &amp; 3 Proc</option>
                          <option value="Affliate partner">Affliate partner</option>
                          <option value="Pre-Underwriting">Pre-Underwriting</option>
                          <option value="Underwriting">Underwriting</option>
                          <option value="Clear to Close">Clear to Close</option>
                          <option value="Doc's being Draw">Doc's being Draw</option>
                          <option value="Closed">Closed</option>
                          <option value="Servicing">Servicing</option>
                          <option value="Sold">Sold</option>
                          <option value="Suspense">Suspense</option>
                          <option value="Archived">Archived</option>
                        </optgroup>
                      </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <div class="row">
                  
                <!-- /.col -->
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label>File Sub Status</label>
                      <select class="select2" multiple="multiple" data-placeholder="File Sub Status"   style="width: 100%;" name="file_sub_status">
                        <option class="optnGrp" disabled="" value="">Commercial/Residential Real Estate</option>
                      
                      <optgroup label="Application">
                        <option value="Borrower Not Qualified">Borrower Not Qualified</option>
                        <option value="Borrower Unreachable">Borrower Unreachable</option>
                        <option value="Other-See Notes">Other-See Notes</option>
                        <option value="Property Not Qualified">Property Not Qualified</option>
                        <option value="Sent Pre-Approval">Sent Pre-Approval</option>
                        <option value="Waiting for Purchase Contract">Waiting for Purchase Contract</option>
                        <option value="Waiting on authorization for background check">Waiting on authorization for background check</option>
                        <option value="Waiting on authorization for credit pull">Waiting on authorization for credit pull</option>
                        <option value="Waiting on loan terms signature">Waiting on loan terms signature</option>
                        <option value="Waiting on Past Deals worksheet">Waiting on Past Deals worksheet</option>
                        <option value="Waiting on Rehab Budget">Waiting on Rehab Budget</option>
                        <option value="Waiting on Revised Purchase Contract">Waiting on Revised Purchase Contract</option>
                      </optgroup>                                                                                  <optgroup label="Closing">
                        <option value="Doc's being drawn">Doc's being drawn</option>
                        <option value="Global / Alphaflow">Global / Alphaflow</option>
                        <option value="Global / Toorak">Global / Toorak</option>
                        <option value="RAI / Alphaflow">RAI / Alphaflow</option>
                        <option value="RAI / Toorak">RAI / Toorak</option>
                        <option value="RAI / Vianova">RAI / Vianova</option>
                        <option value="waiting on Note buyer">waiting on Note buyer</option>
                        <option value="Closing Package needs Legal Review">Closing Package needs Legal Review</option>
                        <option value="Closing Package needs manager review">Closing Package needs manager review</option>
                        <option value="RAI / Bayview">RAI / Bayview</option>
                        <option value="Waiting on Closing Date Confirmation">Waiting on Closing Date Confirmation</option>
                      </optgroup>
                      <optgroup label="Processing">
                        <option value="LOE required for Credit">LOE required for Credit</option>
                        <option value="Background/Credit Cleared">Background/Credit Cleared</option>
                        <option value="Borrower Unreachable">Borrower Unreachable</option>
                        <option value="Missing Docs">Missing Docs</option>
                        <option value="Need Manager Review/Approval">Need Manager Review/Approval</option>
                        <option value="Other-See Notes">Other-See Notes</option>
                        <option value="LOE required for Background">LOE required for Background</option>
                        <option value="Waiting on Appraisal">Waiting on Appraisal</option>
                      </optgroup>
                      <optgroup label="Servicing">
                        <option value="GIF Owned">GIF Owned</option>
                        <option value="Sold to Notebuyer">Sold to Notebuyer</option>
                      </optgroup>
                      <optgroup label="Underwriting">
                        <option value="Rachelle to give final appro">Rachelle to give final appro</option>
                        <option value="Preparing Preliminary HUD">Preparing Preliminary HUD</option>
                        <option value="Reviewing Construction-Rehab Budget">Reviewing Construction-Rehab Budget</option>
                        <option value="Reviewing Property Valuation">Reviewing Property Valuation</option>
                        <option value="waiting on Title work">waiting on Title work</option>
                        <option value="need to order BPO">need to order BPO</option>
                        <option value="Waiting on Final conditions">Waiting on Final conditions</option>
                        <option value="Waiting on Latest bank Statements">Waiting on Latest bank Statements</option>
                        <option value="Waiting on Legal Review of Entity">Waiting on Legal Review of Entity</option>
                      </optgroup>                                                                                           
                      </select>

                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>Loan Number</label>
                    <div class="input-group"  >
                      <input type="text" class="form-control" name="loan_number"  />
                      <div class="input-group-append"  >
                          <div class="input-group-text"><i class="fas fa-sync-alt"></i></div>
                      </div>
                    </div>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <div class="row">
                <!-- /.col -->
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>How did you hear about Our firm?</label>
                        <select class="form-control select2" style="width: 100%;" name="our_firm"> 
                          <option value="Approved Lender"  selected="selected">Approved Lender</option>
                          <option value="Broker">Broker</option>
                          <option value="CIX">CIX</option>
                          <option value="GIF sponsored event (Lava Cantina, etc.)">GIF sponsored event (Lava Cantina, etc.)</option>
                          <option value="Google Search">Google Search</option>
                          <option value="Internet">Internet</option>
                          <option value="Juan Antonio Dela Vasco">Juan Antonio Dela Vasco</option>
                          <option value="Lender">Lender</option>
                          <option value="Other">Other</option>
                          <option value="REF FROM BROKER">REF FROM BROKER</option>
                          <option value="REF FROM KERIANN ELLISON">REF FROM KERIANN ELLISON</option>
                          <option value="Referral">Referral</option>
                          <option value="Referral from boker">Referral from boker</option>
                          <option value="Referral from Broker">Referral from Broker</option>
                          <option value="Referral from Current Customer">Referral from Current Customer</option>
                          <option value="Referral from Friend">Referral from Friend</option>
                          <option value="Referral from Realtor">Referral from Realtor</option>
                          <option value="REIA Meeting">REIA Meeting</option>
                          <option value="Return Customer">Return Customer</option>
                          <option value="Toby">Toby</option>
                        </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-md-6">
                   <div class="form-group">
                      <label>Project Name</label>
                      <input type="text" class="form-control"   placeholder="Project Name" name="project_name">
                   </div>
                </div>
              </div>
              <!-- /.row -->
              <div class="row">
                <!-- /.col -->
                <div class="col-12 col-md-6">
                   <div class="form-group">
                      <label>Broker/Referring Party</label>
                      <input type="text" class="form-control"   placeholder="Broker/Referring Party" name="referring_party">
                   </div>
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>Actual - Closing Date</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="closing_date" />
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                  </div>
                  <!-- /.form-group -->
                </div>
              </div>
              <!-- /.row -->

            </div>
            <!-- /.card-body -->
          </form>
        </div>
        <!-- /.card -->

        <!-- Borrower Info -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Borrower Info</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
               
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control" placeholder="First Name" name="first_name">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                 <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                      <label>Borrower Email</label>
                      <input type="text" class="form-control" placeholder="Borrower Email" name="borrower_email">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                 <div class="form-group">
                      <label>Secondary Email</label>
                      <input type="text" class="form-control" placeholder="Secondary Email" name="secondary_email">
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                      <label>Home Phone</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask  placeholder="Home Phone" name="home_phone">
                      </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                 <div class="form-group">
                      <label>Cell Phone</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask  placeholder="Cell Phone" name="cell_phone">
                      </div>
                 </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                      <label>Preferred Communication</label>
                      <select class="select2" multiple="multiple" data-placeholder="Preferred Communication"   style="width: 100%;" name="preferred_communication">
                        <option value="phone">Phone</option>
                        <option value="email">E-mail</option>
                        <option value="text">Text</option>
                        <option value="webPortal">Web Portal</option>
                      </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                 <div class="form-group">
                      <label>Is there a Co-borrower?</label>
                      <div class="input-group">
                         <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch>
                      </div>
                 </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                      <label>Work Phone #</label>
                        <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999 Ext 9999"' data-mask  placeholder="(___) ___ - ____ Ext. ____" name="work_phone">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control" placeholder="Address" name="address">
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                      <label>City</label>
                      <input type="text" class="form-control" placeholder="City" name="city">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                      <label>State</label>
                      <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="state" >
                         <option value=""> - Select -</option>
                         <option value="AL">Alabama</option>
                         <option value="AK">Alaska</option>
                         <option value="AZ">Arizona</option>
                         <option value="AR">Arkansas</option>
                         <option value="CA">California</option>
                         <option value="CO">Colorado</option>
                         <option value="CT">Connecticut</option>
                         <option value="DE">Delaware</option>
                         <option value="DC">District of Columbia</option>
                         <option value="FL">Florida</option>
                         <option value="GA">Georgia</option>
                         <option value="HI">Hawaii</option>
                         <option value="ID">Idaho</option>
                         <option value="IL">Illinois</option>
                         <option value="IN">Indiana</option>
                         <option value="IA">Iowa</option>
                         <option value="KS">Kansas</option>
                         <option value="KY">Kentucky</option>
                         <option value="LA">Louisiana</option>
                         <option value="ME">Maine</option>
                         <option value="MD">Maryland</option>
                         <option value="MA">Massachusetts</option>
                         <option value="MI">Michigan</option>
                         <option value="MN">Minnesota</option>
                         <option value="MS">Mississippi</option>
                         <option value="MO">Missouri</option>
                         <option value="MT">Montana</option>
                         <option value="NE">Nebraska</option>
                         <option value="NV">Nevada</option>
                         <option value="NH">New Hampshire</option>
                         <option value="NJ">New Jersey</option>
                         <option value="NM">New Mexico</option>
                         <option value="NY">New York</option>
                         <option value="NC">North Carolina</option>
                         <option value="ND">North Dakota</option>
                         <option value="OH">Ohio</option>
                         <option value="OK">Oklahoma</option>
                         <option value="OR">Oregon</option>
                         <option value="PA">Pennsylvania</option>
                         <option value="PR">Puerto Rico</option>
                         <option value="RI">Rhode Island</option>
                         <option value="SC">South Carolina</option>
                         <option value="SD">South Dakota</option>
                         <option value="TN">Tennessee</option>
                         <option value="TX">Texas</option>
                         <option value="UT">Utah</option>
                         <option value="VT">Vermont</option>
                         <option value="VA">Virginia</option>
                         <option value="WA">Washington</option>
                         <option value="WV">West Virginia</option>
                         <option value="WI">Wisconsin</option>
                         <option value="WY">Wyoming</option>
                      </select>
                </div>
                  
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                      <label>Zip Code</label>
                      <input type="text" class="form-control"  name="zip_code">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                      <label>Length of time at present address</label>
                      <input type="text" class="form-control"  name="length_of_time">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                      <label>
                         Has the borrower resided at the present address for less than two years?
                      </label> &nbsp;&nbsp;
                       
                      <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio" name="less_than_two_years">
                          <label for="customRadio1" class="custom-control-label">Custom Radio</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio"   name="less_than_two_years">
                          <label for="customRadio2" class="custom-control-label">Custom Radio checked</label>
                        </div>
                </div>
                <!-- /.form-group -->
                 
              </div>
              <!-- /.col --> 
            </div>
            <!-- /.row -->
            <div class="card-footer"> 
              <h5 style="margin: 0">Mailing Address</h5>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                      <label>Mailing Address</label>
                      <input type="text" class="form-control" placeholder="Mailing Address" name="mailing_address">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                      <label>Mailing City</label>
                      <input type="text" class="form-control" placeholder="Mailing City" name="mailing_city">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                      <label>Mailing State</label>
                      <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="mailing_state" >
                         <option value=""> - Select -</option>
                         <option value="AL">Alabama</option>
                         <option value="AK">Alaska</option>
                         <option value="AZ">Arizona</option>
                         <option value="AR">Arkansas</option>
                         <option value="CA">California</option>
                         <option value="CO">Colorado</option>
                         <option value="CT">Connecticut</option>
                         <option value="DE">Delaware</option>
                         <option value="DC">District of Columbia</option>
                         <option value="FL">Florida</option>
                         <option value="GA">Georgia</option>
                         <option value="HI">Hawaii</option>
                         <option value="ID">Idaho</option>
                         <option value="IL">Illinois</option>
                         <option value="IN">Indiana</option>
                         <option value="IA">Iowa</option>
                         <option value="KS">Kansas</option>
                         <option value="KY">Kentucky</option>
                         <option value="LA">Louisiana</option>
                         <option value="ME">Maine</option>
                         <option value="MD">Maryland</option>
                         <option value="MA">Massachusetts</option>
                         <option value="MI">Michigan</option>
                         <option value="MN">Minnesota</option>
                         <option value="MS">Mississippi</option>
                         <option value="MO">Missouri</option>
                         <option value="MT">Montana</option>
                         <option value="NE">Nebraska</option>
                         <option value="NV">Nevada</option>
                         <option value="NH">New Hampshire</option>
                         <option value="NJ">New Jersey</option>
                         <option value="NM">New Mexico</option>
                         <option value="NY">New York</option>
                         <option value="NC">North Carolina</option>
                         <option value="ND">North Dakota</option>
                         <option value="OH">Ohio</option>
                         <option value="OK">Oklahoma</option>
                         <option value="OR">Oregon</option>
                         <option value="PA">Pennsylvania</option>
                         <option value="PR">Puerto Rico</option>
                         <option value="RI">Rhode Island</option>
                         <option value="SC">South Carolina</option>
                         <option value="SD">South Dakota</option>
                         <option value="TN">Tennessee</option>
                         <option value="TX">Texas</option>
                         <option value="UT">Utah</option>
                         <option value="VT">Vermont</option>
                         <option value="VA">Virginia</option>
                         <option value="WA">Washington</option>
                         <option value="WV">West Virginia</option>
                         <option value="WI">Wisconsin</option>
                         <option value="WY">Wyoming</option>
                      </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                      <label>Mailing Zip Code</label>
                      
                      <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot; 999999&quot;" data-mask="" placeholder="______" name="mailing_zip_code" inputmode="text">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
             <div class="card-footer"> 
              <h5 style="margin: 0">Personal Info</h5>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                      <label>Date Of Birth</label>
                      <input type="date" class="form-control" placeholder="MM/DD/YYYY" name="date_of_birth">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                      <label>Social Security Number</label>
                       <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot; 999-99-9999&quot;" data-mask="" placeholder="___-__-____" name="social_security_number" inputmode="text">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                      <label>
                        Marital Status?
                      </label> &nbsp;&nbsp;
                       
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="Radio1" name="marital">
                          <label for="Radio1" class="custom-control-label">Unmarried</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="Radio2" name="marital">
                          <label for="Radio2" class="custom-control-label">Married</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="Radio3" name="marital">
                          <label for="Radio3" class="custom-control-label">Separated</label>
                        </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                      <label>Credit Score</label>
                      
                      <input type="text" class="form-control" placeholder="Credit Score" name="credit_score" inputmode="text">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
           
        </div>
        <!-- /.card -->
        <!-- Business Entity -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Business Entity</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
               
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="card-footer"> 
              <h5 style="margin: 0">General Business Info</h5>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                      <label>Entity Name</label>
                      <input type="text" class="form-control" placeholder="Entity Name" name="entity_name">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                 <div class="form-group">
                      <label>Entity Type</label> 
                      <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="entity_type" >
                        <option value=""> - Select -</option>
                        <option value="Sole Proprietorship">Sole Proprietorship</option>
                        <option value="Partnership">Partnership</option>
                        <option value="LLC">LLC</option>
                        <option value="Corp">Corp</option>
                        <option value="S-Corp">S-Corp</option>
                        <option value="Self Employed-1099 Contractor">Self Employed-1099 Contractor</option>
                        <option value="501 (c)(3) Nonprofit">501 (c)(3) Nonprofit</option>
                        <option value="501 (c)(19) Veterans Org">501 (c)(19) Veterans Org</option>
                        <option value="Tribal Business">Tribal Business</option>
                        <option value="Trust">Trust</option>
                        <option value="Other">Other</option>                 
                      </select>
               
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                      <label>Date Of Birth</label>
                      <input type="date" class="form-control" placeholder="MM/DD/YYYY" name="business_date_of_birth">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                      <label>State Of Formation</label>
                       <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="formation_state" >
                         <option value=""> - Select -</option>
                         <option value="AL">Alabama</option>
                         <option value="AK">Alaska</option>
                         <option value="AZ">Arizona</option>
                         <option value="AR">Arkansas</option>
                         <option value="CA">California</option>
                         <option value="CO">Colorado</option>
                         <option value="CT">Connecticut</option>
                         <option value="DE">Delaware</option>
                         <option value="DC">District of Columbia</option>
                         <option value="FL">Florida</option>
                         <option value="GA">Georgia</option>
                         <option value="HI">Hawaii</option>
                         <option value="ID">Idaho</option>
                         <option value="IL">Illinois</option>
                         <option value="IN">Indiana</option>
                         <option value="IA">Iowa</option>
                         <option value="KS">Kansas</option>
                         <option value="KY">Kentucky</option>
                         <option value="LA">Louisiana</option>
                         <option value="ME">Maine</option>
                         <option value="MD">Maryland</option>
                         <option value="MA">Massachusetts</option>
                         <option value="MI">Michigan</option>
                         <option value="MN">Minnesota</option>
                         <option value="MS">Mississippi</option>
                         <option value="MO">Missouri</option>
                         <option value="MT">Montana</option>
                         <option value="NE">Nebraska</option>
                         <option value="NV">Nevada</option>
                         <option value="NH">New Hampshire</option>
                         <option value="NJ">New Jersey</option>
                         <option value="NM">New Mexico</option>
                         <option value="NY">New York</option>
                         <option value="NC">North Carolina</option>
                         <option value="ND">North Dakota</option>
                         <option value="OH">Ohio</option>
                         <option value="OK">Oklahoma</option>
                         <option value="OR">Oregon</option>
                         <option value="PA">Pennsylvania</option>
                         <option value="PR">Puerto Rico</option>
                         <option value="RI">Rhode Island</option>
                         <option value="SC">South Carolina</option>
                         <option value="SD">South Dakota</option>
                         <option value="TN">Tennessee</option>
                         <option value="TX">Texas</option>
                         <option value="UT">Utah</option>
                         <option value="VT">Vermont</option>
                         <option value="VA">Virginia</option>
                         <option value="WA">Washington</option>
                         <option value="WV">West Virginia</option>
                         <option value="WI">Wisconsin</option>
                         <option value="WY">Wyoming</option>
                      </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                      <label>Federal Tax ID/EIN</label>
                      <input type="text" class="form-control" data-inputmask='"mask": "99-9999999"' data-mask  placeholder="__ - _______" name="federal_tax">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                      <label>Website Address</label>
                      <input type="text" class="form-control" placeholder="Website Address" name="website_address">
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="card-footer"> 
              <h5 style="margin: 0">Business Address</h5>
            </div>
             <div class="row">
              
              <div class="col-md-6">
                <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control" placeholder="Address" name="address">
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                      <label>City</label>
                      <input type="text" class="form-control" placeholder="City" name="city">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
               
              <div class="col-md-6">
                <div class="form-group">
                      <label>State</label>
                      <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="state" >
                         <option value=""> - Select -</option>
                         <option value="AL">Alabama</option>
                         <option value="AK">Alaska</option>
                         <option value="AZ">Arizona</option>
                         <option value="AR">Arkansas</option>
                         <option value="CA">California</option>
                         <option value="CO">Colorado</option>
                         <option value="CT">Connecticut</option>
                         <option value="DE">Delaware</option>
                         <option value="DC">District of Columbia</option>
                         <option value="FL">Florida</option>
                         <option value="GA">Georgia</option>
                         <option value="HI">Hawaii</option>
                         <option value="ID">Idaho</option>
                         <option value="IL">Illinois</option>
                         <option value="IN">Indiana</option>
                         <option value="IA">Iowa</option>
                         <option value="KS">Kansas</option>
                         <option value="KY">Kentucky</option>
                         <option value="LA">Louisiana</option>
                         <option value="ME">Maine</option>
                         <option value="MD">Maryland</option>
                         <option value="MA">Massachusetts</option>
                         <option value="MI">Michigan</option>
                         <option value="MN">Minnesota</option>
                         <option value="MS">Mississippi</option>
                         <option value="MO">Missouri</option>
                         <option value="MT">Montana</option>
                         <option value="NE">Nebraska</option>
                         <option value="NV">Nevada</option>
                         <option value="NH">New Hampshire</option>
                         <option value="NJ">New Jersey</option>
                         <option value="NM">New Mexico</option>
                         <option value="NY">New York</option>
                         <option value="NC">North Carolina</option>
                         <option value="ND">North Dakota</option>
                         <option value="OH">Ohio</option>
                         <option value="OK">Oklahoma</option>
                         <option value="OR">Oregon</option>
                         <option value="PA">Pennsylvania</option>
                         <option value="PR">Puerto Rico</option>
                         <option value="RI">Rhode Island</option>
                         <option value="SC">South Carolina</option>
                         <option value="SD">South Dakota</option>
                         <option value="TN">Tennessee</option>
                         <option value="TX">Texas</option>
                         <option value="UT">Utah</option>
                         <option value="VT">Vermont</option>
                         <option value="VA">Virginia</option>
                         <option value="WA">Washington</option>
                         <option value="WV">West Virginia</option>
                         <option value="WI">Wisconsin</option>
                         <option value="WY">Wyoming</option>
                      </select>
                </div>
                  
              </div>
              <!-- /.col -->
               <div class="col-md-6">
                <div class="form-group">
                      <label>Zip Code</label>
                      <input type="text" class="form-control"  name="zip_code">
                </div>
                <!-- /.form-group -->
              </div>
            </div>
            <!-- /.row -->
            <div class="row">
               
              <!-- /.col -->
              <div class="col-md-6">
                 <div class="form-group">
                      <label>Is the billing address the same as above?</label>
                      <div class="input-group">
                         <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch>
                      </div>
                 </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
              
            <!-- /.row -->
            <div class="card-footer"> 
              <h5 style="margin: 0">Members/Officers (List all members with 20% ownership or more.)</h5>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p>&nbsp;</p>
                <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked="">
                        <label for="checkboxPrimary1"> Same as Borrower/Applicant Info Above
                        </label>
                      </div> 
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-12">
                 
                <div class="form-group">
                     
                        
                        <label for="checkboxPrimary1"> Add More Members/Officers Info</label>
                        <span class="btn btn-success">
                        <i class="fas fa-plus"></i>
                         
                      </span>
                       
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
              
          </div>
          <!-- /.card-body -->
           
        </div>
        <!-- /.card -->

        <!-- Additional Guarantors -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Additional Guarantors</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
               
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                      <label>Are there any additional guarantors?</label>
                       <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="guarantors" name="guarantors" name="less_than_two_years">
                          <label for="guarantors" class="custom-control-label">Yes</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="guarantors1" name="guarantors"   name="less_than_two_years">
                          <label for="guarantors1" class="custom-control-label">No</label>
                        </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
               <div class="col-md-12">
                <div class="form-group">
                      <label>General Guarantor Notes</label>
                       <textarea class="form-control" rows="4"></textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
               
            </div>
            <!-- /.row -->
             
            
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
           
        </div>
        <!-- /.card -->
        <!-- Additional Guarantors -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">HMDA - (Borrower)</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
               
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                      <label>Do you wish to furnish this information?</label>
                       <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="furnish" name="furnish" name="less_than_two_years">
                          <label for="furnish" class="custom-control-label">Yes</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="furnish1" name="furnish"   name="less_than_two_years">
                          <label for="furnish1" class="custom-control-label">No</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="furnish2" name="furnish"   name="less_than_two_years">
                          <label for="furnish2" class="custom-control-label">N/A</label>
                        </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                      <label>What is your Ethnicity:</label>
                       <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="Latino" name="Latino" name="less_than_two_years">
                          <label for="Latino" class="custom-control-label">Hispanic or Latino</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="Latino1" name="Latino"   name="less_than_two_years">
                          <label for="Latino1" class="custom-control-label">Not Hispanic or Latino</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="Latino2" name="Latino"   name="less_than_two_years">
                          <label for="Latino2" class="custom-control-label">Not Disclosed</label>
                        </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                      <label>What is your Race:</label>
                       <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="Alaska" name="Alaska" name="less_than_two_years">
                          <label for="Alaska" class="custom-control-label">American Indian or Alaska Native</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="Alaska1" name="Alaska"   name="less_than_two_years">
                          <label for="Alaska1" class="custom-control-label">Asian</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="Alaska2" name="Alaska"   name="less_than_two_years">
                          <label for="Alaska2" class="custom-control-label">Black or African American</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="Alaska3" name="Alaska"   name="less_than_two_years">
                          <label for="Alaska3" class="custom-control-label">Native Hawaiian or Other Pacific Islander</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="Alaska4" name="Alaska"   name="less_than_two_years">
                          <label for="Alaska4" class="custom-control-label">White</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="Alaska5" name="Alaska"   name="less_than_two_years">
                          <label for="Alaska5" class="custom-control-label">Not Disclosed</label>
                        </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                      <label>Sex:</label>
                       <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="sex" name="sex" >
                          <label for="sex" class="custom-control-label">Male</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="sex1" name="sex"   >
                          <label for="sex1" class="custom-control-label">Female</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="sex2" name="sex"   >
                          <label for="sex2" class="custom-control-label">Not Disclosed</label>
                        </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
           
        </div>
        <!-- /.card -->
         <!-- Additional Guarantors -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Tell us more about your scenario & what you are looking for in more detail</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
               
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                       
                      <textarea class="form-control" rows="4"></textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
               
            </div>
            <!-- /.row -->
             
          </div>
          <!-- /.card-body -->
           
        </div>
        <!-- /.card -->
        <div class="card card-success">
           
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group text-center">
                       <button type="submit" class="btn btn-primary">Save</button>
                       <button type="submit" class="btn  btn-primary">Save & Next</button>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
               
            </div>
            <!-- /.row -->
             
          </div>
          <!-- /.card-body -->
           
        </div>
        <!-- /.card -->
 
  
      </div>
      <!-- /.container-fluid -->
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
<?php $this->load->view('footer', $this->data); ?>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({ 
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
      branch: {
        required: true
      },
      primary_client_file: {
        required: true
      },
      first_name: {
        required: true
      },
      last_name: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms",
      branch: "Please select Branch",
      primary_client_file: "Please Select Primary Client File Status",
      first_name: "Please Enter First Name",
      last_name: "Please Enter Last Name",
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>