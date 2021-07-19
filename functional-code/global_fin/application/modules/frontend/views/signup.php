<?php $this->load->view('inc/header', $this->data); ?> 
    <!-- new register section -->
 
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
    margin-top: 0%;
    padding-top: 2%;
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
.desc_paragraph{
  clear: both;
    padding-top: 59px;
    display: block;
    width: 90%;
    margin: auto;
}
.register-form2334 label {
    font-size: 11px;
}
.register-form2334 .form-control {
    height: 30px;
}
.register-form2334 select.form-control{
     height: 30px !important;
     padding: 5px;
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
                                <a class="nav-link " id="home-tab" href="<?php echo base_url(); ?>"  >Login</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" id="profile-tab" >Register</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                             
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <form method="post" class="my-login-validation register-form2334" novalidate="">
                                <h3  class="register-heading">Let’s Get Started</h3>
                                <p class="desc_paragraph">Tell us a little about yourself by completing the form below. We will then pair you with a dedicated sales consultant. Your sales consultant will be your primary point of contact and help you to accomplish your real estate investment goals.</p>
                                <div class="register-form">
                                   <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name *</label>
                                            <input type="text" class="form-control" placeholder="First Name *" name="fname" required autofocus/>
                                            <div class="invalid-feedback">
                                                  First Name is  required
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name *</label>
                                            <input type="text" class="form-control" placeholder="Last Name" name="lname" required/>
                                            <div class="invalid-feedback">
                                                  Last Name is  required
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                   <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Address *</label>
                                            <input type="email" class="form-control" placeholder="Email*" name="email" required/>
                                            <div class="invalid-feedback">
                                                  Email is invalid
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number *</label>
                                            <input type="text" class="form-control" placeholder="Phone Number " name="phone" required/>
                                            <div class="invalid-feedback">
                                                  Phone Number is  required
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                   <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State *</label>
                                            <select class="form-control" placeholder="State*" name="state" required="">
                                                <option value="">--Select--</option>
                                                <option name="state">Alabama</option>
                                                <option name="state">Alaska</option>
                                                <option name="state">Arizona</option>
                                                <option name="state">Arkansas</option>
                                                <option name="state">California</option>
                                                <option name="state">Colorado</option>
                                                <option name="state">Connecticut</option>
                                                <option name="state">Delaware</option>
                                                <option name="state">District of Columbia</option>
                                                <option name="state">Florida</option>
                                                <option name="state">Georgia</option>
                                                <option name="state">Hawaii</option>
                                                <option name="state">Idaho</option>
                                                <option name="state">Illinois</option>
                                                <option name="state">Indiana</option>
                                                <option name="state">Iowa</option>
                                                <option name="state">Kansas</option>
                                                <option name="state">Kentucky</option>
                                                <option name="state">Louisiana</option>
                                                <option name="state">Maine</option>
                                                <option name="state">Maryland</option>
                                                <option name="state">Massachusetts</option>
                                                <option name="state">Michigan</option>
                                                <option name="state">Minnesota</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                  State is invalid
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Which Areas of Real Estate Do You Primarily Operate In? *</label>
                                            <select class="form-control"  name="real_estate" required="">
                                                <option value="">--Select--</option>
                                                <option name="state">FixNFlip</option>
                                                <option name="state">Construction</option>
                                                <option name="state">Rental</option>
                                                <option name="state">Multifamily</option> 
                                            </select>
                                            <div class="invalid-feedback">
                                                  This field is invalid
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                   <div class="row">
                                    <div class="col-md-12">
                                      <p><strong>Click your selection. To select more than one area, hold CTRL as you click.</strong></p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Value of Existing REO Portfolio *</label>
                                            <input type="text" class="form-control" placeholder="Value of Existing REO Portfolio *" name="portfolio" required/>
                                            <div class="invalid-feedback">
                                                  This field is required
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Number of Flips Completed in the Last 3 Years *</label>
                                            <input type="text" class="form-control" placeholder="Text here..." name="flips" required/>
                                            <div class="invalid-feedback">
                                                  This field is  required
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                   <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Number of Rental Units Owned *</label>
                                            <input type="text" class="form-control" placeholder="Number of Rental Units Owned *" name="rental" required/>
                                            <div class="invalid-feedback">
                                                  This field is invalid
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Number of New Construction Builds in the Last 3 Years *</label>
                                            <input type="text" class="form-control" placeholder="Number of New Construction Builds in the Last 3 Years" name="construction" required/>
                                            <div class="invalid-feedback">
                                                  This field is  required
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                   <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Do You Currently Have a Property That Needs Financing? *</label>
                                            <label style="margin-top: 10px;"><input type="radio" name="radio1"  checked=""> Yes  &nbsp; &nbsp; &nbsp;
                                            <input type="radio" name="radio1"  > No </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Notes (optional)</label>
                                            <input type="text" class="form-control" placeholder="Notes (optional)" name="notes"  />
                                             
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                       <label>In addition, you consent to the terms and conditions outlined <a href="#!">Privacy Policy*. </a></label>


                                          <label style="margin-top: 10px;"><input type="radio" name="radio2" checked=""> By submitting this form I understand my data will be used by Lima One Capital to contact me about my request.
                                           </label>
                                           <button type="submit" class="btnRegister"  >
                                                  Register
                                                </button>
                                   </div>
                                   </div> 
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>                                    
<!-- end new login section -->

<?php $this->load->view('inc/footer-mini', $this->data); ?>