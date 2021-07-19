<?php
class Customer_Controller extends MY_Controller
{

	function __construct ()
	{
		parent::__construct();
		$this->data['meta_title'] = 'Global Integrity Finance';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_m');
		//$this->load->model('page_m');
		
		// Login check
		$exception_uris = array(
			'customer/login', 
			'customer/logout',
			'customer/register',
			'customer/forget_password',
			'customer/reset_password'
		);
		if (in_array(uri_string(), $exception_uris) == FALSE) {
			if ($this->user_m->cust_loggedin() == FALSE ) {
	
				redirect('login');
				
			}
		}
	
	}
}