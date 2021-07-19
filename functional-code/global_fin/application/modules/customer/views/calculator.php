<?php 
$this->load->view('inc/header', $this->data);
$this->load->view('inc/sidebar', $this->data);
?>
<style type="text/css">
  tbody#rate_stock tr:hover {
    cursor: pointer;
    background-color: #ddd;
}
.active-class{
  background-color: #ddd;
}
div.img-cc {
    text-align: center;
}
</style>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info" style="background: #3667b7;border-color:#3667b7; ">Long Term Rental</a>
                        <a href="#" class="btn btn-danger" style="background-color: #e9ecef;border-color: #ddd;color: #212529;">Bridge Loan</a>
                      </div>
          </div>
           
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <div class="sticky-top mb-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Branch Pricing</h4>
                </div>
                <div class="card-body class-calculator-form" style="background: #3667b7; color: #fff;">
                  <!-- the events -->
                  <form  class="calculator"  >
                   <fieldset>
                      
                      <!-- form --> 
                      <div class="row">
                        <div class="col-md-12">
                          <h5>Loan Information</h5>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputBorder">Loan Amount <code>*</code></label>
                          <input type="number" required="" name="LoanAmount" id="LoanAmount" class="form-control form-control-border" value=""  placeholder="$0">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleSelectBorder">Loan Purpose</label>
                          <select class="custom-select form-control-border" name="LoanPurpose" id="LoanPurpose">

                            <option value="Purchase">Purchase</option>
                            <option value="Cash Out">Cashout</option>
                            <option value="Rate/Term">Rate/Term</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <h5>Borrower Information</h5>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputBorder">FICO</label>
                          <input type="number"  class="form-control form-control-border" name="FICO" id="fico" placeholder="700" value="700">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleSelectBorder">Is Foreign National ?</label>
                          <select class="custom-select form-control-border"   name="ForeignNational"  id="ForeignNational">
                            <option value="N">No</option>
                            <option value="Y">Yes</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <h5>Property Information</h5>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputBorder">Property Type</label>
                          <select class="custom-select form-control-border" name="PropertyType" >
                            <option value="SFR">SFR</option>
                            <option value="2-4 Unit">2-4 Unit</option>
                            <option value="Condo">Condo</option>
                            <option value="Townhouse">Townhouse</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputBorder">Number of Units</label>
                          <input type="number" class="form-control form-control-border"  name="Doors" placeholder="1" value="1">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="exampleInputBorder">Total Rental <code>*</code></label>
                          <input type="number" required="" class="form-control form-control-border" name="RentalIncome"  placeholder="$0" value="">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputBorder">Appraised Value <code>*</code></label>
                          <input type="number" required="" class="form-control form-control-border" id="EstimatedValue" name="EstimatedValue"  placeholder="$0" value="">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="exampleInputBorder">Purchase Price <code>*</code></label>
                          <input type="number" required="" class="form-control form-control-border" id="PurchasePrice" name="PurchasePrice"  placeholder="$0" value="">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputBorder">Property State</label>
                          <select required="" class="custom-select form-control-border" name="StateName" id="exampleSelectBorderWidth2">
                            <option value="">None</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
                          </select>
                        </div>
                      </div>    
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="exampleInputBorder">Property Zip <code>*</code></label>
                          <input type="number" required="" name="ZipCode" class="form-control form-control-border"   placeholder="" value="">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputBorder">Annual Taxes  </label>
                          <input type="number" name="PropertyTaxesYearly" id="PropertyTaxesYearly" class="form-control form-control-border"   placeholder="$0" value="">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="exampleInputBorder">Annual HOI</label>
                          <input type="number" class="form-control form-control-border" name="HomeownersInsYearly"  placeholder="$0" value="">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputBorder">Escrow Other  </label>
                          <input type="number" class="form-control form-control-border" name="EscrowOther"   placeholder="$0" value="">
                        </div>
                      </div>  
                      <div class="row">
                        <div class="col-md-12">
                          <h5>Other Information</h5>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleSelectBorder">Pre-Pay Term</label>
                          <select class="form-control" id="PrePayTerm" name="PrePayTerm">
                            <option value="60 Mos.">60 Mos.</option>
                            <option value="48 Mos.">48 Mos.</option>
                            <option value="36 Mos.">36 Mos.</option>
                            <option value="24 Mos.">24 Mos.</option>
                            <option value="12 Mos.">12 Mos.</option>
                            <option value="No PPP">No PPP</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputBorder">Global Points</label>
                          <input type="text" class="form-control form-control-border" name="GlobalPoints" id="GlobalPoints" placeholder="0%" value="">
                        </div>

                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="exampleSelectBorder">Est.Closing Cost <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="right" title="( $1,250 = Processing & U/W Fees) , ($1,250 = Doc Prep. , Credit/Background, AVM, Wire Fees) , ( $1,250 = Title Estimate )"></i></label> 
                          <input type="text" class="form-control form-control-border" name="EstClosingCost"  placeholder="$0" value="3750" id="EstClosingCost">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputBorder">Broker Points</label>
                          <input type="text" class="form-control form-control-border" name="BrokerChargedPoints"   placeholder="0%" id="BrokerChargedPoints" value="">
                        </div>

                      </div>
                      <div class="row">
                        <div class="form-group col-md-12">
                           
                          <button type="submit" class="btn btn-block btn-success btn-sm">Get Pricing</button>
                        </div> 
                      </div>
                   </fieldset>
                  </form>
                  <div class="img-cc">
            
                  </div>
                 
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
               
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                  <h4 class="card-title">Rate Stack</h4>
                </div>
                <div class="card-body">
                  <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Rate</th>
                      <th>DSCR</th>
                      <th>Payment</th>
                      <th>Price</th>
                      <th>Disc./(Prem.)</th>
                    </tr>
                  </thead>
                  <tbody id="rate_stock">

                    
                    <!-- <tr>
                      <td>1.</td>
                      <td>Update software</td>
                      <td>Update software</td>
                      <td>Update software</td>
                      <td><span class="badge bg-danger">55%</span></td>
                    </tr> -->
                     
                     
                     
                  </tbody>
                  </table>
                  <div class="img-cc">
                     
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <!-- <div class="card-body">
                   <div class="jumbotron" style="padding: 0;">
                       <table class="table table-hover">
                         
                        <tbody>
                          <tr>
                            <td style="vertical-align: middle;">Loan Amount:  </td>
                            <td style="vertical-align: middle; color: green;">Pass</td>
                            <td style="vertical-align: middle;">Property Value:</td>
                            <td style="vertical-align: middle;color:red;">Minimum Property Value is $75k</td>
                            <td style="vertical-align: middle;">Per Door Min:</td>
                            <td style="vertical-align: middle;color:red;">Minimum Per Door Value is $50k</td>
                          </tr>
                           
                           
                           
                        </tbody>
                       </table>
                   </div>
                </div> -->
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="row">
             <div class="col-sm-6">
               <div class="card card-primary">
                <div class="card-header">
                  <h4 class="card-title">Calc'd Values</h4>
                </div>
                <div class="card-body">
                  <table class="table table-bordered custom-border123">
                    
                  <tbody>
                    <tr>
                      <th>Max Loan Amount:</th>
                      <td id="max_l_amount">$0</td>
                    </tr>
                    <tr>
                      <th>Max LTV:</th>
                      <td id="max_lvt">$0</td>
                    </tr>
                    <tr>
                      <th>Property Value:</th>
                      <td id="property_value">$0</td>
                    </tr>
                    <tr>
                      <th>LTV:</th>
                      <td id="lvt">$0</td>
                    </tr>
                    <tr>
                      <th>CLTV: </th>
                      <td id="clvt">$0</td>
                    </tr>
                    <tr>
                      <th>Monthly Taxes: </th>
                      <td id="mon_taxes">$0</td>
                    </tr>
                  </tbody>
                  </table>
                </div> 
               </div>
               <div class="card card-primary">
                <div class="card-header">
                  <h4 class="card-title">Loan Breakdown</h4>
                </div>
                <div class="card-body">
                  <table class="table table-bordered custom-border123">
                    
                  <tbody>
                    <tr>
                      <th>Approval Code:  </th>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <th>Selected Rate:</th>
                      <td><span id="sel_rated">0 </span><button type="button" class="btn btn-block btn-success btn-xs" data-toggle="modal" data-target="#modal_primary" style="max-width: 64px;display: inline-block;float: right;">Lock rate</button></td>
                    </tr>
                    <tr>
                      <th>Purchase Price:</th>
                      <td id="pur_price">$0</td>
                    </tr>
                    <tr>
                      <th>Loan Amount:</th>
                      <td id="loan_amount">$0</td>
                    </tr>
                    <tr>
                      <th>Closing Costs: </th>
                      <td id="est_cost">$3,750</td>
                    </tr>
                    <tr>
                      <th>Points/Fees:</th>
                      <td id="poins_fee">&nbsp;</td>
                    </tr>
                    <tr>
                      <th>Cash To/(From):</th>
                      <td id="cash_to_from">&nbsp;</td>
                    </tr>
                  </tbody>
                  </table>
                </div> 
               </div>
             </div>
              <div class="col-sm-6">
               <div class="card card-primary">
                <div class="card-header">
                  <h4 class="card-title">Leverage Guide</h4>
                </div>
                <div class="card-body" style="padding: 0">
                  <table class="table table-bordered  Leverage-guide12"  >
                    <thead>
                     <tr>
                      <th>&nbsp;</th>
                      <th>Purchase</th>
                      <th>Rate/Term</th>
                      <th class="text-nowrap">Cash Out</th>                      
                     </tr>
                    </thead>
                  <tbody>
                    <tr>
                      <th>740-850</th>
                      <td data-pid="11" data-breakdown="740-850">80%</td>
                      <td data-pid="21" data-breakdown="740-850">80%</td>
                      <td data-pid="31" data-breakdown="740-850">75%</td>
                    </tr>
                    <tr>
                      <th>720-739</th>
                      <td  data-pid="12" data-breakdown="720-739">80%</td>
                      <td data-pid="22" data-breakdown="720-739">80%</td>
                      <td data-pid="32" data-breakdown="720-739">70%</td>
                    </tr>
                    <tr>
                      <th>700-719</th>
                      <td data-pid="13" data-breakdown="700-719">80%</td>
                      <td data-pid="23" data-breakdown="700-719">80%</td>
                      <td data-pid="33" data-breakdown="700-719">70%</td>
                    </tr>
                    <tr>
                      <th>680-699</th>
                      <td data-pid="14" data-breakdown="680-699">75%</td>
                      <td data-pid="24" data-breakdown="680-699">75%</td>
                      <td data-pid="34" data-breakdown="680-699">65%</td>
                    </tr> 
                    <tr>
                      <th>660-679</th>
                      <td data-pid="15" data-breakdown="660-679">70%</td>
                      <td data-pid="25" data-breakdown="660-679">70%</td>
                      <td data-pid="35" data-breakdown="660-679">65%</td>
                    </tr>
                    <tr>
                      <th>640-659</th>
                      <td data-pid="16" data-breakdown="640-659">70%</td>
                      <td data-pid="26" data-breakdown="640-659">70%</td>
                      <td data-pid="36" data-breakdown="640-659">65%</td>
                    </tr>
                    <tr>
                      <th>600-639</th>
                      <td data-pid="17" data-breakdown="600-639">65%</td>
                      <td data-pid="27" data-breakdown="600-639">65%</td>
                      <td data-pid="37" data-breakdown="600-639">65%</td>
                    </tr>
                    <tr>
                      <th>Foriegn National</th>
                      <td data-pid="18" >70%</td>
                      <td data-pid="28">70%</td>
                      <td data-pid="38">60%</td>
                    </tr>
                    
                  </tbody>
                  </table>
                </div> 
               
                   
               </div>
               <div class="card card-primary">
                 
                 
               
                  <div class="card-body" style="padding: 0">
                     <div class="jumbotron" style="padding: 0;margin: 0px;">
                       <table class="table table-hover" style="margin: 0px;">
                        <tbody>
                          <tr>
                            <td style="vertical-align: middle;">FICO Bucket:  </td>
                            <td style="vertical-align: middle;" id="fic_buck">&nbsp;</td>
                          </tr>
                          <tr id="p_value">
                            <td style="vertical-align: middle;">Property Value:</td>
                            <td style="vertical-align: middle; color: red">Minimum Property Value is $75k</td>
                          </tr>
                          <tr>
                            <td style="vertical-align: middle;">GIF Leverage: </td>
                            <td style="vertical-align: middle;" id="gif_liverage"></td>
                          </tr>
                          <tr id="loan_pass">
                            <td style="vertical-align: middle;">Loan Amount:  </td>
                            <td style="vertical-align: middle;color: green">  Pass</td>
                          </tr>
                          <tr id="per_door_min">
                            <td style="vertical-align: middle;">Per Door Min: </td>
                            <td style="vertical-align: middle;color: red">  Minimum Per Door Value is $50k</td>
                          </tr>
                        </tbody>
                       </table>
                  </div>
                 </div>
               </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
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
<div class="modal fade" id="modal_primary" style="padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Loan Lock Information</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                    <label for="exampleInputBorder">Address  </label>
                    <input type="text" class="form-control">
                </div>
                <button type="button" class="btn btn-block btn-success btn-sm">Lock Rate</button>
              </form>
            </div>
             
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<?php $this->load->view('inc/footer', $this->data); ?>

<script>
var image = "<?php echo base_url(). 'assets/images/loading.gif'; ?>";
var LoanPurpose = $('select#LoanPurpose').find(":selected").val();
var fico =  $("input[name=FICO]").val();
var EstClosingCost = 3750;
var EstimatedValue = 0 ;
var BrokerChargedPoints = 0;
var GlobalPoints = 0;
select_liverage(gif_levarage_id());
show_fico_bucket(fico_bucket());
show_gif_livrage(gif_levarage_id());
function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}
$('select#LoanPurpose').on('change', function() {

  LoanPurpose = this.value ;
  select_liverage(gif_levarage_id());
  show_fico_bucket(fico_bucket());
  show_gif_livrage(gif_levarage_id());
});

$("#fico").change(function(){

  fico = this.value ; 
  select_liverage(gif_levarage_id());
  show_fico_bucket(fico_bucket());
  show_gif_livrage(gif_levarage_id());
});
$("#LoanAmount").change(function(){
  LoanAmount = this.value ;

  $("#loan_amount").text('$'+formatNumber(LoanAmount));

});


$("#EstClosingCost").change(function(){
  EstClosingCost = this.value ;
  $("#est_cost").text('$'+formatNumber(EstClosingCost));

});

$("#GlobalPoints").change(function(){
  GlobalPoints = this.value ;
});

$("#BrokerChargedPoints").change(function(){
  BrokerChargedPoints = this.value ;
});

// $("#EstClosingCost").change(function(){
//   EstClosingCost = this.value ;
//   $("#est_cost").text('$'+formatNumber(EstClosingCost));

// });

$("#PropertyTaxesYearly").change(function(){
  PropertyTaxesYearly = this.value ;
  $("#mon_taxes").text('$'+formatNumber((PropertyTaxesYearly/12).toFixed(2)));

});
$("#PurchasePrice").change(function(){

  var PurchasePrice  = this.value ; 

  $("#pur_price").html('$'+formatNumber(PurchasePrice));

  if(this.value < 50000){
    $("tr#per_door_min").html('<td style="vertical-align: middle;">Per Door Min: </td><td style="vertical-align: middle;color: red">  Minimum Per Door Value is $50k</td>');
  }
  else{
    $("tr#per_door_min").html('<td style="vertical-align: middle;">Per Door Min: </td><td style="vertical-align: middle;color: green">  Pass</td>');
  }
  
});

$("#EstimatedValue").change(function(){
  var data_disc = 0

  EstimatedValue  = this.value ; 

  var gif_liverage = $('td[data-pid = '+gif_levarage_id()+']').text();

  $("#max_lvt").text(gif_liverage);

  gif_liverage = gif_liverage.replace(/[_\W]+/g, "");

  var max_lvt = EstimatedValue*gif_liverage/100;

  var lvt = (LoanAmount/EstimatedValue)*100 ;

  $("#lvt").text(lvt.toFixed(2));
  $("#clvt").text(lvt.toFixed(2));
  $("#max_l_amount").text('$'+formatNumber(max_lvt));
  $("#property_value").text('$'+formatNumber(EstimatedValue));

  if(this.value < 75000){
    $("tr#p_value").html('<td style="vertical-align: middle;">Property Value: </td><td style="vertical-align: middle;color: red">  Minimum Property Value is $75k</td>');
  }
  else{
    $("tr#p_value").html('<td style="vertical-align: middle;">Property Value: </td><td style="vertical-align: middle;color: green">  Pass</td>');
  }
  
});


function show_gif_livrage(x){

 var gif_liverage = $('td[data-pid = '+x+']').text();

$('#gif_liverage').text(gif_liverage);

}

function select_liverage(x){
$("td").removeClass("active_percent");
$('td[data-pid = '+x+']').addClass('active_percent');
}



function show_fico_bucket(x){

$('#fic_buck').text(x);
}


function fico_bucket(){

  var fic_buc ;

   if (fico >= 740 && fico <= 850){

    fic_buc="740-850";
   }else if(fico >= 720 && fico <= 739){

     fic_buc="720-739";
   }else if(fico >= 700 && fico <= 719){

     fic_buc="700-719";

   }else if(fico >= 680 && fico <= 699){

    fic_buc= "680-699";

   }else if(fico >= 660 && fico <= 679){

    fic_buc="660-679";

   }else if(fico >= 640 && fico <= 659){

    fic_buc="640-659";

   }else if(fico >= 600 && fico <= 639){

    fic_buc="600-639";

   }

   return fic_buc ;

}

function gif_levarage_id(){
   // your base. I'm in it

   var L ;
   var F ;

   if (fico >= 740 && fico <= 850){

    F="1";
   }else if(fico >= 720 && fico <= 739){

     F="2";
   }else if(fico >= 700 && fico <= 719){

     F="3";

   }else if(fico >= 680 && fico <= 699){

    F = "4";

   }else if(fico >= 660 && fico <= 679){

    F="5";

   }else if(fico >= 640 && fico <= 659){

    F="6";

   }else if(fico >= 600 && fico <= 639){

    F="7";

   }

   if(LoanPurpose == "Cash Out"){

    L = "3";

   }else if(LoanPurpose == "Rate/Term"){

    L = "2";

   }else if(LoanPurpose == "Purchase"){

    L = "1";
   }

   return L+F;

}

$('#rate_stock').on('click', 'tr.add', function(){
    $('tr.active-class').removeClass("active-class");
    $(this).addClass('active-class');

    var data_rate =  $(this).attr("data-rate");
   $("#sel_rated").text(data_rate);
    data_disc  = $(this).attr("data-disc");
    $("#poins_fee").text(formatNumber(data_disc));
    data_disc = data_disc.replace("$", "");
    data_disc =  parseFloat(data_disc);
    EstimatedValue = parseFloat(EstimatedValue);
    EstClosingCost = parseFloat(EstClosingCost);
    BrokerChargedPoints  = parseFloat(BrokerChargedPoints);
    GlobalPoints= parseFloat(GlobalPoints);
    LoanAmount = parseFloat(LoanAmount);
    data_disc = data_disc + GlobalPoints*LoanAmount/100 + EstimatedValue*BrokerChargedPoints/100  ;
    var cash_to_from = LoanAmount - EstimatedValue - data_disc - EstClosingCost ;
    $("#cash_to_from").text(formatNumber(cash_to_from));
});

// $( "#myselect option:selected" ).text();
  
  $( "form" ).submit(function( event ) {
      event.preventDefault();

      var $myForm = $('form');
      if(! $myForm[0].checkValidity()) {
        $myForm.find(':submit').click();
      }else{

      $('.img-cc').html("<img  height='50' src='"+image+"' />");
      $.ajax({
      type: "post",
      url:'<?php echo site_url('admin/get_cal_data') ; ?>' ,
      cache: false,   
      data :  $( this ).serialize() ,   
      success: function(response){
      $('.img-cc').html('');   
      $( "#rate_stock" ).html('');         
       $( "#rate_stock" ).append(response)
      },
      error: function(){            
        alert('Error while request..');
      }
     });
    }



});
</script>