<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*  Emailer library  */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Frontend extends MY_Controller {

	function __construct ()
	{
		parent::__construct();

		/* Loading   Emailer Library */

		require_once(APPPATH.'libraries/Exception.php');
		require_once(APPPATH.'libraries/PHPMailer.php');
		require_once(APPPATH.'libraries/SMTP.php');

		/* Loading model */

		$this->load->model('frontend_m');
		$this->load->model('user_m');


		/* Loading from helper */

		$this->load->helper('form');

		/* Web application title */

		$this->data['title'] ='Global Integrity Finance';

		/* Including & registering request library */
		include ''.APPPATH.'libraries/Requests.php';
		Requests::register_autoloader();	
	}

	public function testing(){

		
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://gifatlas.azurewebsites.net/api/ltr/calculate',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"Channel":"Branch","LoanPurpose":"Purchase","LoanAmount":"50000","EstimatedValue":"75000","FICO":"700","ZipCode":"93657","PropertyType":"SFR","RentalIncome":"10000","CurrentBalance":0,"PurchasePrice":"75000","Doors":1,"ShowIOARM":"N","StateName":"CA","ForeignNational":"N","PropertyTaxesYearly":"0","HomeownersInsYearly":"0","PrePayTerm":"60 Mos.","SecondLienAmt":0,"BrokerChargedPoints":"0","submitted":true,"GlobalPoints":"0","EstClosingCost":"0","totalClosingCost":"0","BrEstClosingCost":3750,"CVMaxLoanAmount":60000,"CVMaxLTV":80,"CVPropertyValue":75000,"CalcLTV":67,"CalcCLTV":67,"LBSelectedRate":"6.375%","LBSelectedRateIndex":17,"PointsFees":-1187.5,"CashToFrom":-23812.5,"PITI":0,"Unit1Rent":0,"Unit2Rent":0,"Unit3Rent":0,"Unit4Rent":0,"EscrowOther":"0","FicoBucket":"700-719","BrLoanPurpose":"Purchase","BrPropertyType":"SFR","BrAsIsValue":0,"BrARV":0,"BrRehabAmount":0,"BrPurchasePrice":0,"BrCurrentBalance":0,"BrNumberOfProjects":0,"BrState":"","BrZip":"","BrFICO":700,"BrLoanAmount":0,"BrNumberOfUnits":0,"BrAnnualTaxes":0,"BrAnnualHOI":0,"BrForeignNational":0,"BrOriginationPoints":1,"BrBrokerPoints":0,"BrClosingCosts":0,"submittedBr":false,"calcBrExperienceLevel":"Limited","calcBrRehabLevel":"Light","calcBrPropertyValue":0,"calcBrMaxLTV":0,"calcBrMaxLTC":0,"calcBrMaxLTARV":0,"calcBrLTC":0,"calcBrLTARV":0,"calcBrLTV":0,"calcBrMonTaxes":0,"calcBrMonHOI":0,"calcBrClosingCosts":0,"calcBrPointsFees":0,"calcBrCashFrom":0,"calcInitLoanAmt":0,"calcMaxLoanAmt":0,"username":"sukumar","Address":"testing","submittedLock":true,"ApprovalCode":"1TXX638-0000-2500","errors":[],"warnings":[{"Field":"HomeownersInsYearly","Message":"DSCR not accurate without correct HOI"},{"Field":"PropertyTaxesYearly","Message":"DSCR not accurate without correct taxes"}],"UserId":66}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NjYsImlhdCI6MTYyNjM0NjI1NSwiZXhwIjoxNjI4OTM4MjU1fQ.EwLnPTIGqZ1SYcfD5x4E8t7It_uwjJl63wHKkzHfM8w',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

	}



	public function index(){

		$this->load->view('index', $this->data);
	}

	public function home(){

		$this->load->view('home', $this->data);
	}

	public function videos(){

		$this->load->view('videos', $this->data);
	}

	public function signup(){

		$this->load->view('signup', $this->data);
	}

	public function  product(){

		$this->load->view('product', $this->data);
	}

	public function create_account(){

	$this->load->view('create_account', $this->data);

	}

	public function forget_password(){

		$this->load->view('forget-password', $this->data);
	}



	// User login function

	public function user_login(){

		$this->data['title'] =  "Login";

		if( $this->frontend_m->loggedin() == FALSE || redirect('#loginModal'));
		 
      	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

       $refer =  $this->input->post('redirect');

        if ($this->form_validation->run() == TRUE) {
        	  
        	if($this->frontend_m->login() == TRUE)
        	{	
        		$this->session->set_flashdata('success', 'please enter correct credential');
        		redirect(''.$refer.'','refresh');
        	}
        	else{

        		$email_check_docebo = $this->find_user_api($this->input->post('email'));
        		if($email_check_docebo == "found"){

        			$this->session->set_flashdata('error', 'please reset your password');
        		}else{
        			$this->session->set_flashdata('error', 'please enter correct credential');
        		}
        		$this->session->set_flashdata('error', 'please enter correct credential');
        	    redirect('?redirect='.$refer.'#loginModal','refresh');
          	}

        }

        
		redirect('?redirect='.$refer.'#loginModal','refresh');
	}


		public function login()
	{
		$this->data['title'] =  "Global Integrity Finance";
		if( $this->user_m->loggedin() == FALSE || redirect('admin'));
		$ruels = $this->user_m->ruels;
      	$this->form_validation->set_rules($ruels);
        if ($this->form_validation->run() == TRUE) {


        	if($this->user_m->login() == TRUE)
        	{	

        		$user_type = $this->session->userdata('user_type');

        		redirect($user_type,'refresh');
        	}
        	else{
        		$this->session->set_flashdata('error', 'Please enter correct credential');
        	redirect('','refresh');
        	}
        }
        
		$this->load->view('index', $this->data);
	}

	//user Logout  Function

	public function logout()
	{
		$this->load->frontend_m->logout();
		redirect('','refresh');
	}

	public function user_registration()
	{   
		 $this->data['title'] = "Register";
         $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback__unique_email');
        if ($this->form_validation->run() == TRUE) {


		 if($this->user_register() == TRUE){

		 	   $this->session->set_flashdata('success', 'Registration has been successfull');
                // redirect('#registerModal','refresh');
		 }else{

            $this->session->set_flashdata('error', 'Password missmatch');
		 	// redirect('#registerModal','refresh');
		 }
		}else{
			$this->session->set_flashdata('error', 'An email address already exist');
		 	// redirect('#registerModal','refresh');
		} 
 		 
 	}

 	//registring user 

 	public function  user_register($id = NULL){

 		if($this->input->post('password') == $this->input->post('cnf_password')){
 		$email_key = $this->hash(random_string('alnum', 5));
 		$url = site_url('activation_link/?key='.$email_key.'');
 		$message = '<h4>Thank you for registration</h4><p>Please activate your account by clicking on link '.$url.'</p>';
 		$this->send_email($this->input->post('email'),$message,'Please activate your account by clicking on  link '.$url.'','Registraion conformation');
		$user = $this->save(array(
			'id' => '',
			'first_name' => $this->input->post('full_name'),
			'user_phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'password' => $this->hash($this->input->post('password')),
			'user_type'=>'customer',
			'status' => 'inactive',
			'email_verify_hash' => $email_key,
			'createdAt' => '' ,
			'updatedAt' => '' 
		));
		return TRUE ;
	}
	 
 	}

 	/* user  activation link over email */

 	public function activation_link(){

 		$key  = $this->input->get('key');
 		$this->db->where('email_verify_hash', $key);
 		$rs = $this->db->get('users')->result();

 		if(count($rs) == 1 && $key !=""){

 			$object	 = 	array('email_verify_hash' => '','status' =>'active');
 			$this->db->where('email_verify_hash', $key);
 			$this->db->update('users', $object);

 			$this->load->view('admin/user-activation', $this->data);
 		}else{

 			$this->load->view('admin/link-expired', $this->data);
 		}
 	}

 	// Check Unique email

 	public function _unique_email ($str)
	{

		$this->load->model('user_m');	
		$email_check_docebo = $this->find_user_api($this->input->post('email')); 
		//retreving user email information from the User Table
		$this->db->where('email', $this->input->post('email'));
		$user = $this->user_m->get();
	    //checking wether  eamil addresss existing or not and return the value true or false 
		if (count($user)>=1 || $email_check_docebo == "found") {
			$this->form_validation->set_message('_unique_email', '%s should be unique');
			return FALSE;
		}

		return TRUE;
	}

	public function my_profile()
	{
		$this->data['title'] = "My Profile";
		$id = $this->session->userdata('id');
		$this->data['p_course'] = $this->get_orderd_course();
		$this->data['courses'] = $this->frontend_m->get_recent_courses();
		if($this->session->userdata('id')){
			$this->data['userdata1'] = $this->frontend_m->profile_dtls($id);
			$this->load->view('myprofile', $this->data);

		}else{

			redirect('?redirect=my_profile#loginModal','refresh');
		}
		 
		 // $this->data['oreder'] = $this->frontend_m->order_dtls($id);
		 // $this->data['order_products'] = $this->frontend_m->order_product_details($id);
 		

	}

	public function change_password(){
		$id = $this->session->userdata('id');;
		$oldpass = $this->input->post('old_password');
		$newpass = $this->input->post('new_password');
	    $message = $this->frontend_m->change_passw($id,$oldpass,$newpass);
	    redirect('my_profile','refresh');
	}


	// Email send function 

    public function send_email($to , $message ,$plain_message, $subject){

	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
	    $mail->isSMTP();                                            // Send using SMTP
	    $mail->Host       = 'smtpout.secureserver.net';                    // Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'test@gmail.com';                     // SMTP username
	    $mail->Password   = '####';                               // SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	    //Recipients
	    $mail->setFrom('test@gmail.com', 'Global Integrity Finance');
	    $mail->addAddress($to);     // Add a recipient

	    // Attachments
	    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = $subject;
	    $mail->Body    = $message;
	    $mail->AltBody = $plain_message;

	    $mail->send();
	    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}

	}


  }

?>