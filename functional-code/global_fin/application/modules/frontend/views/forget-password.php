<?php   $this->load->view('inc/header', $this->data); ?>
 <style type="text/css">
   .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    //margin-top: 3%;
    padding-right: 0px;
     
   
    min-height: 100vh; 
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
    min-height: 100vh;
    padding-right: 58px;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
    padding-top: 0;
    clear: both;
    text-align: left;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #3667b7;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #3667b7;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 4%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
     
    color: #3667b7;
    border: 2px solid #3667b7;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
.register .register-left h3, .register .register-left p, .register .register-left h5, .register .register-left h4 {
color: #fff;
}
.my-login-page {
  
  font-size: 14px;
}
 
.my-login-page .card-wrapper {
  width: 400px;
}

.my-login-page .card {
  border-color: transparent;
  box-shadow: 0 4px 8px rgba(0,0,0,.05);
}

.my-login-page .card.fat {
  padding: 10px;
}

.my-login-page .card .card-title {
  margin-bottom: 30px;
}
 

.my-login-page .form-group label {
  width: 100%;
}

.my-login-page .btn.btn-block {
  padding: 12px 10px;
  background-color: #3667b7;
    border-color: #3667b7;

}
.new-degn-btn{
  background-color: #3667b7;
    border-color: #3667b7;
    color: #fff !important;
}
.my-login-page .footer {
  margin: 40px 0;
  color: #888;
  text-align: center;
}
.new-cl{
      z-index: 9;
  opacity: 1 ;
  left: 0;
    top: 5px;
}
@media screen and (max-width: 425px) {
  .my-login-page .card-wrapper {
    width: 90%;
    margin: 0 auto;
  }
}

@media screen and (max-width: 320px) {
  .my-login-page .card.fat {
    padding: 0;
  }

  .my-login-page .card.fat .card-body {
    padding: 15px;
  }
}
 </style>
 

<!--======================== Login Block =======================-->
<!-- new login section -->
<div class="container-fluid register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="<?php   echo base_url() ; ?>admin-assets/dist/img/deve.png" alt=""/>
                        <div class="text-center">
                               <div class="user-item">
                                   <h4>Or</h4>
                               </div>
                               <h5>Login with your social media account</h5>
                               <ul class="social-link">
                                   <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                   <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                               </ul>

                               
                           </div>
                        <!-- <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/> -->
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active"   href="<?php echo site_url(); ?>"  >Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab"   href="<?php echo site_url("signup"); ?>"  >Register</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active my-login-page" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                                 <section class="h-100">
                                  <div class="container h-100" style="text-align: center;">
                                    <div class="row justify-content-md-center h-100 register-form">
                                      <div class="card-wrapper">
                                         
                                        <div class="card fat">
                                          <div class="card-body">
                                            <h4 class="card-title">Password Assistance</h4>
                                            <form method="POST" class="my-login-validation" novalidate="">
                                                <div class="form-group">
                                                    <label for="email">E-Mail Address</label>
                                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                                    <div class="invalid-feedback">
                                                        Email is invalid
                                                    </div>
                                                    <div class="form-text text-muted">
                                                        By clicking "Reset Password" we will send a password reset link
                                                    </div>
                                                </div>

                                                <div class="form-group m-0">
                                                    <button type="submit" class="btnRegister" style="padding: 2% 4%; width: auto; margin: 0">
                                                        EMAIL RESET PASSWORD LINK
                                                    </button>
                                                </div>
                                            </form>
                                            <p style="clear: both;"><a href="#">Privacy Policy</a></p>
                                        </div>
                                        </div>
                                        
                                      </div>
                                    </div>
                                  </div>
                                 </section>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>                                    
<!-- end new login section -->

<!--======================== //Login Block =======================-->
<?php   $this->load->view('inc/footer-mini', $this->data); ?>