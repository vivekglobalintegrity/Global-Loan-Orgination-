<?php $this->load->view('inc/header', $this->data); ?>
 

    <!--======================== Login Block =======================-->
    <section class="login-block" style="min-height: 100vh;">
        <div class="container">
            <div class="mid-wrap">

                <div class="row">
                    <div class="col-md-6 mx-auto">


                        <div class="form-area">
                            <h1 class="login-headings">Create Your Portal Account</h1>
                            <p>Enter your email below to get started!</p>
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                                <button class="custom-btn blue-btn" type="submit">CREATE ACCOUNT</button>
                                <!-- <a class="custom-btn blue-btn">CREATE ACCOUNT</a>  -->

                            </form>
                        </div>
                    </div>
                     
                </div>
            </div>

        </div>
    </section>
    <!--======================== //Login Block =======================-->
<?php $this->load->view('inc/footer-mini', $this->data); ?>