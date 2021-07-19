<?php 

class User_m extends MY_Model {
	protected $_table_name = 'users';
	protected $_order_by = 'id';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';

	function __construct(){
		parent::__construct();
	}

	/* login form validation rule */
	public  $ruels = array(
				'email' => array(
						'field' => 'email', 
						'label' => 'Email', 
						'rules' => 'trim|required|valid_email'
				), 
				'password' => array(
					'field' => 'password', 
					'label' => 'Password', 
					'rules' => 'trim|required'
				) 
			);

		public  $ruel_s = array(
				'email' => array(
						'field' => 'email', 
						'label' => 'Email', 
						'rules' => 'trim|required|valid_email'
				)
			);


	public $rules1 = array(
				'firstname' => array(
					'field' => 'firstname', 
					'label' => 'First Name', 
					'rules' => 'trim|required'
				), 
				'lastname' => array(
					'field' => 'lastname', 
					'label' => 'Last Name', 
					'rules' => 'trim|required'
				), 
				'phone' => array(
					'field' => 'phone', 
					'label' => 'Phone', 
					'rules' => 'trim|required|callback__unique_mno'
				), 
				'email' => array(
					'field' => 'email', 
					'label' => 'Email', 
					'rules' => 'trim|required|valid_email|callback__unique_email'
				), 
				'password' => array(
					'field' => 'password', 
					'label' => 'Password', 
					'rules' => 'trim|matches[confirmpass]|required'
				),
				'confirmpass' => array(
					'field' => 'confirmpass', 
					'label' => 'Confirm password', 
					'rules' => 'trim|matches[password]'
				),
				'newletter' => array(
					'field' => 'confirmpass', 
					'label' => 'Confirm password', 
					'rules' => 'trim|matches[password]'
				),
			);
	public $ruels2 = array(
				'firstname' => array(
					'field' => 'firstname', 
					'label' => 'First Name', 
					'rules' => 'trim|required'
				), 
				'lastname' => array(
					'field' => 'lastname', 
					'label' => 'Last Name', 
					'rules' => 'trim|required'
				), 
				'phone' => array(
					'field' => 'phone', 
					'label' => 'Phone', 
					'rules' => 'trim|required'
				), 
				'email' => array(
					'field' => 'email', 
					'label' => 'Email', 
					'rules' => 'trim|required'
				), 
			
			);
	public $rules8 = array(
				'email' => array(
							'field' => 'email', 
							'label' => 'Email', 
							'rules' => 'trim|required|valid_email'
				)
			);
	public $rules7 = array(
				'password' => array(
						'field' => 'password', 
						'label' => 'Password', 
						'rules' => 'trim|matches[confirmpass]|required'
				),
				'confirmpass' => array(
					'field' => 'confirmpass', 
					'label' => 'Confirm password', 
					'rules' => 'trim|matches[password]'
				),
				'key' => array(
					'field' => 'key', 
					'label' => 'key', 
					'rules' => 'required'
				)

			);
	public $ruels3 = array(
				'firstname' => array(
					'field' => 'firstname', 
					'label' => 'First Name', 
					'rules' => 'trim|required'
				), 
				'lastname' => array(
					'field' => 'lastname', 
					'label' => 'Last Name', 
					'rules' => 'trim|required'
				), 
				'phone' => array(
					'field' => 'phone', 
					'label' => 'Phone', 
					'rules' => 'trim|required'
				), 
				'email' => array(
					'field' => 'email', 
					'label' => 'Email', 
					'rules' => 'trim|required|valid_email|callback__unique_email'
				), 
				'password' => array(
					'field' => 'password', 
					'label' => 'Password', 
					'rules' => 'trim|required'
				),
			);

	public $profiles  = array(
				'first_name' => array(
						'field' => 'first_name', 
						'label' => 'First Name', 
						'rules' => 'trim|required'
				), 
				'last_name' => array(
						'field' => 'last_name', 
						'label' => 'Last Name', 
						'rules' => 'trim|required'
				), 
				'mobile_no' => array(
							'field' => 'mobile_no', 
							'label' => 'Mobile_no', 
							'rules' => 'trim|required'
				), 
				'gender' => array(
							'field' => 'gender', 
							'label' => 'Gender', 
							'rules' => 'trim|required'
				), 
				'dob' => array(
							'field' => 'dob', 
							'label' => 'Dob', 
							'rules' => 'trim|required'
				), 
				'state' => array(
							'field' => 'state', 
							'label' => 'State', 
							'rules' => 'trim|required'
				), 
				'distric' => array(
							'field' => 'distric', 
							'label' => 'Distric', 
							'rules' => 'trim|required'
				), 
				'village' => array(
							'field' => 'village', 
							'label' => 'Village', 
							'rules' => 'trim|required'
				), 
				'zip' => array(
							'field' => 'zip', 
							'label' => 'zip', 
							'rules' => 'trim|required'
				)

			);



	public function login()
	{

		$user = $this->get_by(array(
					'email' => $this->input->post('email'),
					'password' => $this->hash($this->input->post('password')),
					'status' => 'active'
				
				), TRUE);

		if (!empty($user)) {
			// Log in user
			$data = array(
				'fname' =>$user->first_name,
				'email' => $user->email,
				'id' => $user->id,
				'user_type' => $user->user_type,
				'loggedin' => TRUE,
			);
			$this->session->set_userdata($data);

			return true ;
		}
	}

	/* encrypted passoword generation   function */
	public function hash ($string)
		{
			return hash('sha512', $string . config_item('encryption_key'));
		}

	public function loggedin ()
	{
		if($this->session->userdata('user_type') === 'admin' && $this->session->userdata('loggedin')) {
			return TRUE ;
		}
		else
		{
			return FALSE ; 
		}
	}

	public function cust_loggedin ()
	{
		if($this->session->userdata('user_type') === 'customer' && $this->session->userdata('loggedin')) {
			return TRUE ;
		}
		else
		{
			return FALSE ; 
		}
	}

	
	public function register ($id = NULL)
	{	
		$user = $this->save(array(
			'id' => '',
			'first_name' => $this->input->post('firstname'),
			'last_name' => $this->input->post('lastname'),
			'user_phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'password' => $this->hash($this->input->post('password')),
			'user_type'=>$this->input->post('user_type'),
			'status' => 'inactive',
			'createdAt' => '' ,
			'updatedAt' => '' ,
		));
	}
	public function customer_count(){
		$this->db->where('user_type', 'customer');
		 return $this->db->count_all('users');
	}
	public function admin_count(){
		$this->db->where('user_type', 'admin');
		 return $this->db->count_all('users');
	}
	public function shop_manager_count(){
		$this->db->where('user_type', 'shop-manager');
		 return $this->db->count_all('users');
	}
	public function customer($limit = NULL, $start = NULL)
	{   
		$data = array('user_type' => 'customer');
		$user = $this->get_by($data);
		return $user ;
 	}

	public function admin_list($limit, $start)
	{

		$this->db->limit($limit, $start);
		$this->db->where('user_type', 'admin');
		$result = $this->db->get('users')->result();
		return $result ;
	}



	public function shop_manager($limit, $start)
	{
		$data = array('user_type' => 'shop-manager');
		$this->db->limit($limit, $start);
		$user = $this->get_by($data);
		return $user ;

	}


	public function user($id = NULL)	
	{	
		if($id == NULL){
			$id = $this->uri->segment(4);
		}		
		$user = $this->get($id);
		return $user;
	}
	public function delete_user()
	{
		$id = $this->uri->segment(4);
		if($_SESSION['id'] == $id )
		{
		return FALSE ;
		}
		$this->delete($id) ;
	}
	public function new_users_list()
	{
		$this->db->where('user_stat', 'pending');
		$user = $this->get() ;
		return $user ;
	}
	public function update_user ($id= NULL)
	{
		
		$data = array(
			'first_name' => $this->input->post('firstname'),
			'last_name' => $this->input->post('lastname'),
			'user_type' => $this->input->post('user_type'),
			'user_phone' => $this->input->post('phone'),
			'status' => $this->input->post('user_status')
		);
		if ($this->save($data, $id)) {
			return TRUE ;
		}
		else{
			return FALSE ;
		}
	}

	public function update_profile($id)
	{
		$user_type = $this->session->userdata('user_type');

		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'user_type' =>$user_type,
			'mobile_no' => $this->input->post('mobile_no'),
			'gender' => $this->input->post('gender'),
			'dob' => $this->input->post('dob'),
			'state' => $this->input->post('state'),
			'distric' => $this->input->post('distric'),
			'village' =>$this->input->post('village'),
			'zip'	=> $this->input->post('zip')
		);
		if ($this->save($data, $id)) {
			# code...
			return TRUE ;
		}
		else{
			

			return FALSE ;
		}

	}


	public function logout ()
	{

	$this->session->sess_destroy();
	
	}


	public function user_details($id)
	{

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_id', $id);
		$user = $this->db->get();
		return $user->row() ;
	}

	public function update_email($user_id , $email)
	{
		$id = $user_id;

		$data = array(
			'email' => $email
		);
		if ($this->save($data, $id)) {
					return TRUE ;
				}
				else{
					return FALSE ;
				}

	}

	public function update_register_otp($otp , $email)
	{

		$data = array(
			'otp' => $otp 
		);
		$this->db->where('email',$email);
		$query =  $this->db->update('users',$data);
		$user_id = $this->db->insert_id();
		if($query)
		{
		  return $user_id ;
		}
		else
		{
			return FALSE ;

		}

	}


	public function update_register_otp_mobile($otp , $mobile)
	{

		$data = array(
			'otp' => $otp 
		);
		$this->db->where('mobile_no',$mobile);
		$query =  $this->db->update('users',$data);
		$user_id = $this->db->insert_id();


		if($user_id)
		{
		  return $user_id ;
		}
		else
		{
			if($this->reg_mobile($otp ,$mobile))
			{

				return TRUE;
			}
			else
			{
				return FALSE ;
			}
		}

	}
	public function reg_mobile($otp ,$mobile_no)
	{
		$user = $this->save(array(
		      'user_id' => '',
		      'first_name' => '',
		      'last_name' => '',
		      'mobile_no' => $mobile_no,
		      'email' => '',
		      'password' => '',
		      'user_type'=>'patient',
		      'status' => 'active',
		      'otp'=> $otp,
		      'created' => '' ,
		      'modified' => '' ,
		  ));
	}
	public function email_match()

	{
		$user = $this->get_by(array(
					'email' => $this->input->post('email'),
				), TRUE);
		if ($user) {

			return TRUE ;
		}
		else{

			return FALSE ;
		}
	}


	public function get_user_id($email = NULL)
	{

		$user = $this->get_by(array(
					'email' => $email,
					'user_type' => 'doctor'
				), TRUE);
		if (count($user)) {

			return $user;
		}
		else{

			return FALSE ;
		}

	}

	public function reset_pass_key($key , $email)
	{

		$data=array('reset_pass_key'=>$key);
		$this->db->where('email',$email);
		$this->db->update('users',$data);
		return true ;

	}
    public function change_pass($email , $pass)
	{
        $pass1 = $this->hash($pass);
	    $data=array('password'=>$pass1);
		$this->db->where('email',$email);
		$this->db->update('users',$data);
		return true ;

	}
	public function key_match($key)
	{
		if($key != ''){
			$user = $this->get_by(array(
						'reset_pass_key' => $key,
				), TRUE);
			if ($user) {

				return TRUE ;

			}
			else{

				return FALSE ;
			}
		}
		else
		{
			return FALSE ;
		}
	}

	public function reg_otp_match($key)
	{
		if($key != ''){
			$user = $this->get_by(array(
						'otp' => $key,
					), TRUE);
			if (count($user)) {

				return TRUE ;

			}
			else{

				return FALSE ;
			}
		}

		else
		{
			return FALSE ;
		}

	}

	public function  get_email($key)
	{

		$this->db->select('email');
		$this->db->where('reset_pass_key', $key);
		$query = $this->db->get('users');
		return $query->row();

	}

	public function update_pass($email)
	{
		$data=array('reset_pass_key'=>NULL,
			'password' => $this->hash($this->input->post('password'))
		);
		$this->db->where('email',$email);
		$this->db->update('users',$data);
		return true ;

	}

	public function update_otp($key)
	{

		$data=array('status'=>'active'
		);
		$this->db->where('otp',$key);
		$this->db->update('users',$data);
		return true ;

	}
	
	public function get_user_name($id){
		$this->db->select('first_name,last_name');
		$this->db->from('users');
		$this->db->where('user_id', $id);
		$result = $this->db->get()->row();
		return $result ;
		}

} 

/* admin login function */


 ?>