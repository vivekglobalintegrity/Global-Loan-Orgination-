<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*  Emailer library  */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Customer extends Customer_Controller {

	function __construct ()
	{
		parent::__construct();
		/* Loading   Emailer Library */
		require_once(APPPATH.'libraries/Exception.php');
		require_once(APPPATH.'libraries/PHPMailer.php');
		require_once(APPPATH.'libraries/SMTP.php');
		/* Loading string helper */
		$this->load->helper('string');
		/* Including & registering request library */
		include ''.APPPATH.'libraries/Requests.php';
		Requests::register_autoloader();	
		$this->data['title'] = "Global Integrity Finance";
	}

	public function index()
	{	
		
		$this->load->view('full_app', $this->data);
	}

	public function calculator(){

		$this->load->view('calculator', $this->data);
	}

	public function faq(){

		$this->load->view('faq', $this->data);
	}

	public function fixinflip_app(){

		$this->load->view('fixinflip_app', $this->data);
	}

	public function line_of_credit_approval(){

		$this->load->view('line-of-credit-approval', $this->data);
	}

	public function new_application_new_construction(){

		$this->load->view('new-application-newconstruction', $this->data);
	}

	public function profile(){

		$this->load->view('profile', $this->data);
	}

	public function rental_app(){

		$this->load->view('rental-app', $this->data);
	}

	public function resources(){

		$this->load->view('resources', $this->data);
	}

	public function select_application(){

		$this->load->view('select-application', $this->data);
	}


	public function login()
	{
		redirect('','refresh');
                
	
	}

	public function get_cal_data(){

		//$token ="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NjYsImlhdCI6MTYyNjM0NjI1NSwiZXhwIjoxNjI4OTM4MjU1fQ.EwLnPTIGqZ1SYcfD5x4E8t7It_uwjJl63wHKkzHfM8w";
// $headers = array('Accept' => 'application/json');
		  //$headers = array('Authorization' => 'Bearer '.$token.'','Accept' => 'application/json', 'Access-Control-Allow-Origin' => '*');

	$data = array('LoanPurpose' => $this->input->post('LoanPurpose'),
	'LoanAmount' => $this->input->post('LoanAmount'),
	'EstimatedValue' => $this->input->post('EstimatedValue'),
	'FICO' => $this->input->post('FICO') ,
	'ZipCode' =>  $this->input->post('ZipCode') ,
	'PropertyType' => $this->input->post('PropertyType') ,
	'RentalIncome' => $this->input->post('RentalIncome') ,
	'CurrentBalance' =>  0,
	'PurchasePrice' => $this->input->post('PurchasePrice'),
	'Doors' =>$this->input->post('Doors'),
	'ShowIOARM' => 'N',
	'StateName' => 'CA',
	'ForeignNational' => $this->input->post('ForeignNational') ,
	'PropertyTaxesYearly' => $this->input->post('PropertyTaxesYearly') ,
	'HomeownersInsYearly' => $this->input->post('HomeownersInsYearly'),
	'PrePayTerm' => $this->input->post('PrePayTerm'),
	'SecondLienAmt' => 0,
	'BrokerChargedPoints' => $this->input->post('BrokerChargedPoints'),
	'submitted' =>false ,
	'GlobalPoints' => $this->input->post('GlobalPoints'),
	'EstClosingCost' => $this->input->post('EstClosingCost'),
	'totalClosingCost' => $this->input->post('EstClosingCost'),
	'BrEstClosingCost' => $this->input->post('EstClosingCost') ,
	'CVMaxLoanAmount' => $this->input->post('EstimatedValue')*0.8 ,
	'CVMaxLTV' => 80 ,
	'CVPropertyValue' => $this->input->post('EstClosingCost'),
	'CalcLTV' => round(($this->input->post('LoanAmount')/$this->input->post('EstClosingCost'))) ,
	'CalcCLTV' => round(($this->input->post('LoanAmount')/$this->input->post('EstClosingCost')) ) ,
	'EscrowOther' => $this->input->post('EscrowOther')); 

	$data = json_encode($data);
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
	  CURLOPT_POSTFIELDS => $data,
	  CURLOPT_HTTPHEADER => array(
	    'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NjYsImlhdCI6MTYyNjM0NjI1NSwiZXhwIjoxNjI4OTM4MjU1fQ.EwLnPTIGqZ1SYcfD5x4E8t7It_uwjJl63wHKkzHfM8w',
	    'Content-Type: application/json'
	  ),
	));
	$response = curl_exec($curl);
	curl_close($curl);
	$response = json_decode($response);

if(isset($response->result)){
	  foreach ($response->result as $datas) {

	  	?>

		<tr class="add" data-rate="<?php echo $datas->Rate  ; ?>" data-dscr="<?php echo $datas->DSCR  ; ?>" data-pi="<?php echo $datas->PI  ; ?>" data-price="<?php echo $datas->Price  ; ?>" data-disc="<?php echo $datas->Disc ; ?>">
          <td><?php echo $datas->Rate  ; ?></td>
          <td><?php echo $datas->DSCR  ; ?></td>
          <td><?php echo $datas->PI  ; ?></td>
          <td><?php echo $datas->Price  ; ?></td>
          <td><?php echo $datas->Disc ; ?></td>
        </tr>
        
	  	<?php

	  }
	}else{

		?>
<tr> <td colspan="5" style="color: red">Not found any data  </td></tr>
		<?php
	}

	}

	public function hash ($string)
		{
			return hash('sha512', $string . config_item('encryption_key'));
		}


	public function forget_password()
 	{

 		$this->data['title'] = "Global Integrity Finance";
	    $ruels = $this->user_m->ruel_s;
	    $this->form_validation->set_rules($ruels);
	    if ($this->form_validation->run() == TRUE) {
	
	    		if($this->user_m->email_match() == TRUE)
	    	{	
	    			$id = $this->hash(random_string('alnum', 16)) ;

	    			$url = site_url('admin/reset_password?key='.$id.'');
	    			  $email = $this->input->post('email') ;
	    			if($this->user_m->reset_pass_key($id , $email)){

				// $this->email->from('info@eyvirtualacademy.in', 'eyvirtualacademy');
				// 	$this->email->to($email);
				// 	$this->email->subject('Reset Password');
				// 	$this->email->message('Your Password reset url: '.$url.'');
				// 	$this->email->send();

	    			

	    	 $this->send_email($email,'Your Password reset url: '.$url.'','Your Password reset url: '.$url.'','Forget Password');
}
					
	    		$this->session->set_flashdata('success', 'Your password reset link send to  your email address');
	    		redirect('admin/forget_password','refresh');
	    	}
	
	    	else{
	    		$this->session->set_flashdata('error', 'No any account associated with this email');
	    	redirect('admin/forget_password','refresh');
	    	}
	    } 
		$this->load->view('forget-password', $this->data);

 	}


 	public function send_email($to , $message ,$plain_message, $subject){

	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
	    $mail->isSMTP();                                            // Send using SMTP
	    $mail->Host       = 'smtpout.secureserver.net';                    // Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'admin@eyvirtualacademy.in';                     // SMTP username
	    $mail->Password   = '@#123';                               // SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	    //Recipients
	    $mail->setFrom('admin@eyvirtualacademy.in', 'Global Integrity Finance');
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
	    // echo 'Message has been sent';
		} catch (Exception $e) {
		    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}

	}
 	public function logout()
	{
		$this->load->user_m->logout();
		redirect('','refresh');
	}


}

/* End of file admin.php */
/* Location: ./application/modules/Admin/controllers/admin.php */