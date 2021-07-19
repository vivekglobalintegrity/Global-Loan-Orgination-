<?php 
$this->load->view('inc/header', $this->data);
$this->load->view('inc/sidebar', $this->data);
 ?>
 <style type="text/css">
    #main {
  margin: 50px 0;
}

#main #faq .card {
  margin-bottom: 30px;
  border: 0;
}

#main #faq .card .card-header {
  border: 0;
  -webkit-box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
          box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
  border-radius: 0px !important;
  padding: 0;
}
 

#main #faq .card .card-header .btn-header-link {
  color: #fff;
  display: block;
  text-align: left;
  background: #ccc;
  color: #222;
  padding: 20px;
  border-radius: 0px !important;
}
#main #faq .card .card-header a:hover {
  background: #ccc !important;
  }

#main #faq .card .card-header .btn-header-link:after {
  content: "\f107";
  font-family: 'Font Awesome 5 Free';
  font-weight: 900;
  float: right;
}

#main #faq .card .card-header .btn-header-link.collapsed {
  background: #eee;
  color: #444;
}

#main #faq .card .card-header .btn-header-link.collapsed:after {
  content: "\f106";
}

#main #faq .card .collapsing {
  background: #f1f1f1;
  line-height: 30px;
}

#main #faq .card .collapse {
  border: 0;
}

#main #faq .card .collapse.show {
  background: #f1f1f1;
  line-height: 30px;
  color: #222;
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
          <h1 class="card-title">FAQ</h1>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            
          </div>
        </div>
        <div class="card-body">
          <div id="main">
  <div class="container">
<div class="accordion" id="faq">
                    <div class="card">
                        <div class="card-header" id="faqhead1">
                            <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1">When is my payment due, and how do I make my payment to Global Integrity Finance?</a>
                        </div>

                        <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                            <div class="card-body">
                                <p>By the fifth business day of each month, invoices are uploaded to the online portal.  You can access your account information through the portal, and make your payment through the site.  Your payment due date is reflected on the portal.  A late charge of 5% of your monthly payment amount is assessed if your payment is not received within ten (10) days of your due date.  Please note, if you have a commitment funded loan, your monthly interest payment will increase as the principal balance of your loan increases.  Please review the monthly statement for detail regarding your construction draws and billing calculations.</p>
                                <p>We offer multiple payment options, however, we do not accept payment by debit or credit cards. We recommend setting your account up for recurring ACH withdrawal from your designated account (you can access the authorization form here), but you have the ability to make the monthly payment through ACH manually at the site, call in to your customer service analyst to take the payment over the phone, or by physically mailing a check (please include your loan number and property address on the “memo” line) to our office at:</p>
                                <p class="text-center"><strong>
                                  Global Integrity Finance <br> 321 N. Central Expressway, Suite 360, McKinney, TX 75070 <br>+1 (214)-548-5190
                                </strong></p>
                                <p>Please follow the link below to access the payment portal.  If you are unable to log in, please contact your customer service analyst so your credentials can be reset.  You will not be able to view your information in the portal until after month-end.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead2">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2" aria-expanded="true" aria-controls="faq2">Are the real estate taxes and insurance premiums paid by Global Integrity Finance?</a>
                        </div>

                        <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                            <div class="card-body">
                                <p>If you have a loan with an escrow account to manage the payment of your real estate taxes and insurance premiums as they come due, Global Integrity Finance would be responsible for making those payments in a timely manner.  If you have a Fixed Rental 30, Rental 30 Premier, 5/1 ARM Rental, or a 10/1 ARM Rental loan product, your account is escrowed for taxes and insurance.  You are responsible for any supplemental taxes that come due even if you have an escrowed loan. If you have a short-term loan product, including Multi-Family housing loan, you are responsible to ensure the real estate taxes and required insurance premiums are paid in a timely manner as they come due. You are also responsible for tracking and paying for your own Liability policy, as well as ensure that any HOA dues are paid timely as they come due.</p>
                                <p>If you make any changes to your insurance policy (change carrier or coverage), please ensure the mortgagee clause is updated and that Global Integrity Finance is notified so that we can take appropriate action to update our records accordingly.  You may forward any tax or insurance documentation to us at LO@globalintegrityfinance.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead3">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                            aria-expanded="true" aria-controls="faq3">What is cross-collateralization for partial payoffs?</a>
                        </div>

                        <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                            <div class="card-body">
                                <p>Cross-collateralization is an allocated amount of principal, established in your closing documentation, that is added to the payoff letters of individual properties in a portfolio loan. Cross-collateralization is directly applied to your principal balance and is no way a fee or penalty.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead4">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                            aria-expanded="true" aria-controls="faq4">Does Global Integrity Finance offer extensions for FixNFlip loans?</a>
                        </div>

                        <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                            <div class="card-body">
                                <p>Extensions are offered in 3 month increments for qualified loans. Borrowers must be current on their monthly interest payments and have a verified exit strategy. An extension must be requested at least 30 days before the maturity date to allow Global Integrity Finance Capital the ability to approve the extension before the maturity date, all loans that go past maturity will be charged interest at the default rate.</p>
                                <p>We require that you provide proof that your real estate taxes are paid current, and that you have extended your insurance policy through the new expected maturity date.  The application webform will also request information about your expected exit strategy.  It also will offer you the option to pay a discounted fee for the extension up-front (0.5%) or a higher fee (1.0%) if you opt to pay the fee at the time the loan is being paid off.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead5">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                            aria-expanded="true" aria-controls="faq5">How can I change my information in the system?</a>
                        </div>

                        <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                            <div class="card-body">
                                <p>If you need assistance to change any of your information in the system, please reach out directly to your assigned customer service analyst.</p>
                                 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead6">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6"
                            aria-expanded="true" aria-controls="faq6">How do I request a construction draw?</a>
                        </div>

                        <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                            <div class="card-body">
                                <p>If you have a loan with construction funds held in escrow, you will be working directly with our Construction Management team to arrange for the release of those draws.  Your assigned construction analyst can assist you with draw requests and any additional questions you may have regarding your project. For a PDF walkthrough on how to request a draw </p>
                                 
                            </div>
                        </div>
                    </div>
                </div>
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