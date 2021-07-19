<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_m extends MY_Model {
	protected $_table_name = 'users';
	protected $_order_by = 'id';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';

	function __construct(){
		parent::__construct();


	}
    public function get_courses($slug = NULL, $type = NULL, $segment = NULL){
    	if($type == "Top Courses"){
            $this->db->where('weekday_batch', $type);
    	}elseif ($type == "Trending Courses") {
    		$this->db->where('weekend_batch', $type);
    	}elseif ($type == "Featured Courses") {
            $this->db->where('custom_time', $type);
    	}else{

    	}
    	if($slug != ""){
    		$this->db->where('cat_id', $slug);
    	}
		
		$this->db->where('status', 1);
		//$this->db->where('batch_type', 'weekday');
		if($segment == "newest"){
			$this->db->order_by('id','DESC');
		}elseif ($segment == "lowest") {
			$this->db->order_by('price','ASC');
		} elseif($segment == "highest") {
			$this->db->order_by('price','DESC');
		}else {
			$this->db->order_by('id','DESC');
		}
 		 
		$result = $this->db->get('mng_courses')->result();
 		return $result ;
		  
	}
    public function get_courses_not_condi(){
		$this->db->where('status', 1);
		$this->db->order_by('weekday_start_date','ASC');
		$result = $this->db->get('mng_courses')->result();
 		return $result ;
	}

	public function get_courses_weekend($slug = NULL){
		$this->db->where('status', 1);
			$this->db->where('cat_id', $slug);
		//$this->db->where('batch_type', 'weekday');
		$this->db->order_by('weekend_start_date','ASC');
		$result = $this->db->get('mng_courses')->result();
 		return $result ;
	}
	public function get_courses_weekend_not_condi(){
			$this->db->where('status', 1); 
		$this->db->order_by('weekend_start_date','ASC');
		$result = $this->db->get('mng_courses')->result();
 		return $result ;
	}

	public function get_recent_courses(){
		$this->db->where('status', 1);
		$this->db->select('*');
		$this->db->from('mng_courses');
		$this->db->limit(5);
		$this->db->order_by('weekend_start_date','ASC');
		$result = $this->db->get()->result();


 		return $result ;
	}

	public function get_saved_course($wishlist){

if(!empty($wishlist)){
		$this->db->where('status', 1);
		$this->db->select('*');
		$this->db->from('mng_courses');
		$this->db->order_by('weekend_start_date','ASC');
		return $result = $this->db->get()->result();
	}else{


		return array();
	}

	}
	// public function weekend($slug = NULL){
	// 	$this->db->where('cat_id', $slug);
	// 	$this->db->where('batch_type', 'weekend');
	// 	$result = $this->db->get('mng_courses')->result();
 // 		return $result ;
	// }
	public function course_details($slug = NULL){

		$this->db->where('slugs', $slug);		 
		$result = $this->db->get('mng_courses')->row();
 		return $result ;

	}
	public function blogs(){
		$this->db->where('status', 'active');
		$result = $this->db->get('blogs')->result();

		return $result ;
	}
	public function categories(){
 		$result = $this->db->get('product_categories')->result();
 		return $result ;
	}
	
	public function services(){
		$this->db->where('status', 'active');
		$result = $this->db->get('services')->result();
		
		return $result ;
	}
	public function blog_details($slug){
		$this->db->where('slugs',$slug);
		$result = $this->db->get('blogs')->row();
		return $result ;
	}
	public function service_details($slug){
		$this->db->where('slugs',$slug);
		$result = $this->db->get('services')->row();
		return $result ;
	}
	public function product($num = NULL , $cats = NULL){
		$this->db->select('products.*,products.id as pids, products.createdAt as created,products.updatedAt as updated,product_images.*');
		$this->db->from('products');
		if($num != NULL){
			$this->db->limit($num);
		}
		
		if($cats != NULL){
			$this->db->like('products.product_categories', $cats);
		}
		$this->db->join('product_images', 'products.id = product_images.product_id', 'left');
		$this->db->where('product_images.is_it_cover', 'yes');
 		$result = $this->db->get()->result();
		return $result ;
	}
	public function product_cate($slug){
		$this->db->select('products.*,products.id as pids, products.createdAt as created,products.updatedAt as updated,product_images.*');
		$this->db->from('products');
		 
		$this->db->join('product_images', 'products.id = product_images.product_id', 'left');
		$this->db->where('product_images.is_it_cover', 'yes');
		$this->db->where('slugs', in_array($slug));
 		$result = $this->db->get()->result();
		return $result ;
	}
	public function product_details($slug){

		$this->db->select('products.*,products.id as pids, products.createdAt as created,products.updatedAt as updated,product_images.*');
		$this->db->from('products');
		 
		$this->db->join('product_images', 'products.id = product_images.product_id', 'left');
		$array = array('product_images.is_it_cover' => 'yes', 'slugs' => $slug);
        $this->db->where($array);  

 		$result = $this->db->get()->row();
		return $result ;
	}

	public function get_category($slug=NULL){
		$this->db->where('slugs', $slug);
		$result = $this->db->get('product_categories')->row();
		return $result ;
	}
	public function get_single_category($slug=NULL){
		$this->db->where('slugs', $slug);		 
		$result = $this->db->get('mng_courses')->row();
 		$cate_slug = $result->cat_id;  
		$this->db->where('slugs', $cate_slug);		 
		$result1 = $this->db->get('product_categories')->row();
 		return $result1 ;

	}
	public function related_courses($slug=NULL){
		$this->db->where('slugs', $slug);		 
		$result = $this->db->get('mng_courses')->row();
 		$cate_slug = $result->cat_id; 
 		$c_id =  $result->id ; 
		$this->db->where('cat_id', $cate_slug);	
		$this->db->where('id !=', $c_id);	 
		$result1 = $this->db->get('mng_courses')->result();
 		return $result1 ;
	}


	public function get_c_details($id){

		$this->db->where('id', $id);
		$result = $this->db->get('mng_courses')->row();

		return $result ;
	}
	 
	public function about(){
		 
		$result = $this->db->get('about')->row();
		
		return $result ;
	}
	public function loggedin ()
	{
		if($this->session->userdata('user_type') === 'customer' && $this->session->userdata('loggedin')) {
			return TRUE ;
		}
		else
		{
			return FALSE ; 
		}
	}
	public function login()
	{

		$user = $this->get_by(array(
					'email' => $this->input->post('email'),
					'password' => $this->hash($this->input->post('password')),
					'user_type' => 'customer',
					'status' => 'active'
				
				), TRUE);

		if (!empty($user)) {
			// Log in user
			$data = array(
				'fname' =>$user->first_name,
				'email' => $user->email,
				'id' => $user->id,
				'user_type' => 'customer',
				'loggedin' => TRUE,
			);
			$this->session->set_userdata($data);
			return TRUE ;
		}


	}

	public function verify_pass(){

		$user = $this->get_by(array(
			'id' => $this->session->userdata('id'),
			'password' => $this->hash($this->input->post('password'))),TRUE);
		if(!empty($user)){

			return TRUE;
		}else{
			return FALSE;
		}

	}
	
	public function logout ()
	{
  	  $this->session->sess_destroy();
 	}
 	public function  user_register($id = NULL){

 		if($this->input->post('password') == $this->input->post('cnf_password')){

		$user = $this->save(array(
			'id' => '',
			'first_name' => $this->input->post('full_name'),
			'user_phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'password' => $this->hash($this->input->post('password')),
			'user_type'=>'customer',
			'status' => 'inactive',
			'email_verify_hash' => $this->hash(random_string('alnum', 5)),
			'createdAt' => '' ,
			'updatedAt' => '' 
		));
		return TRUE ;
	}
	 
 	}
  public function hash ($string)
		{
			return hash('sha512', $string . config_item('encryption_key'));
		}
public function profile_dtls($id = NULL){

	  $this->db->where('id',$id);
	  $result = $this->db->get('users')->row();
	  return $result ;
	}
public function order_dtls($id = NULL){

	    $this->db->where('order_by',$id);
	    $result = $this->db->get('orders')->result();
		 return $result ;
	}

public function order_product_details($id = NULL){
	$this->db->where('order_by', $id);
	$result =$this->db->get('orders')->result();
	$product  = array();
     if($result != NULL){
	
	foreach ($result as $key => $value) {
		
		$products = json_decode($value->product_orderd) ;

		foreach ($products as $key => $value) {
			array_push($product ,$key);
		}
		}
		
	}
	if($product){
	$product = array_unique($product);
	$this->db->select('products.id as pid ,products.product_name,products.product_price,product_images.image_name');
	$this->db->from('products');
	$this->db->join('product_images', 'products.id = product_images.product_id', 'left');
	$this->db->where_in('products.id', $product);
	$this->db->or_where('product_images.is_it_cover', 'yes');
	$result = $this->db->get()->result();
	}else{
        $product = array();
	}
	//var_dump($result);
	$product_info = array();
	foreach ($result as  $data) {
		$product_info[$data->pid] = $data ;
	}
	return $product_info ;

	
}
public function profile_update($id = NULL)
	{
		       $data = array(
			
			'first_name' => $this->input->post('firstname'),
 			'last_name' => $this->input->post('lastname'),
			'email' => $this->input->post('emailid'),
			'user_city' => $this->input->post('city'),
 			'user_state' => $this->input->post('state'),
			'user_zip' => $this->input->post('zip'),
			 
 			'user_phone' => $this->input->post('phone'),
			'user_country' => $this->input->post('country'),
			'user_type' => 'customer',
 			'status' => 'active',
			'address' => $this->input->post('address'),
			'address2' => $this->input->post('address2'),
  			'updatedAt' => '',
  				
		);
		if ($this->save($data, $id)) {
			return TRUE ;
		}
		else{
			return FALSE ;
		}
	 
	}
public function change_passwn($id = NULL,$oldpass=NULL,$newpass=NULL)
	{
		  
     if($this->get_by(array( 'password' => $this->hash($oldpass), 'id' => $id), TRUE)){
             $data = array(
 			  'password' => $this->hash($newpass),
 		     );
			if ($this->save($data, $id)) {
				return "<span style='color:green;'>Password has been Changed</span>";
			}
			else{
				return "<span style='color:red;'>Password not change Something Going wrong</span>" ;
			    }
               }
          else{
                return "<span style='color:red;'>Old Password Not exist</span>";
              }

		 
		 
		//return $result;
	}

	public function change_passw($id = NULL,$oldpass=NULL,$newpass=NULL)
	{
		  
     if($this->get_by(array( 'password' => $this->hash($oldpass), 'id' => $id), TRUE)){
             $data = array(
 			  'password' => $this->hash($newpass),
 		     );
			if ($this->save($data, $id)) {
				return "Password has been Changed";
			}
			else{
				return "Password not changed , Something went wrong" ;
			    }
               }
          else{
                return "Wrong password";
              }

		 
		 
		//return $result;
	}
public function place_order(){
$cart_items = array();
foreach($this->cart->contents() as $items):  

 $cart_items[$items['id']]= $items['qty'] ;
 endforeach;  
 $cart_items = json_encode($cart_items);
 
                                 

	$data = array(
			
			'order_place' => '<p>First Name : '.$this->input->post('fname').'</p><p>Last Name : '.$this->input->post('lname').'</p><p>Email : '. $this->input->post('email').'</p><p>Phone : '.$this->input->post('phone').'</p><p>Country : '.$this->input->post('country').'</p><p>Address : '.$this->input->post('address').'</p><p>Address2 : '. $this->input->post('address2').'</p><p>City : '.$this->input->post('town').'</p><p>Order Note : '.$this->input->post('ordernote').'</p><p>',
  			'product_orderd' => $cart_items,
			'order_amount' => $this->input->post('total_price'),
			'payment_method' => $this->input->post('radio1'),
			'order_by' => $this->session->userdata('id'),
			'updatedAt' => date("Y/m/d")." ".date("h:i:sa")
 		);

		if ($this->db->insert('orders', $data)) {
			return "";
		}
		else{
			return FALSE ;
		}

}
public function search($keyword = NULL){
 		$this->db->like('title', $keyword);
        $this->db->or_like('description', $keyword);
        $this->db->or_like('price', $keyword);
  		$result = $this->db->get('mng_courses')->result();
		return $result ;
 }
  public function header_content(){
    $this->db->where('content_type', 'Header');
 	$result = $this->db->get('services')->row();
 	return $result;
  } 
  public function know_more(){
    $this->db->where('content_type', 'know_more');
 	$result = $this->db->get('services')->row();
 	return $result;
  }
  public function make_payment(){
    $this->db->where('content_type', 'make_payment');
 	$result = $this->db->get('services')->row();
 	return $result;
  }
  public function contact_us(){
    $this->db->where('content_type', 'contact_us');
 	$result = $this->db->get('services')->row();
 	return $result;
  }
  public function elearning(){
    $this->db->where('content_type', 'elearning_certificate_courses');
 	$result = $this->db->get('services')->result();
 	return $result;
  }   
  	public function get_all_courses(){
 		$result = $this->db->get('mng_courses')->result();
 		return $result ;
	}
  public function update_pre_courses(){
  	$m= date("m");
    $de= date("d");
    $y= date("Y");
    $pre_date =  date('Y-m-d',mktime(0,0,0,$m,($de-1),$y));
    $pre_date1 =  date('Y-m-d',mktime(0,0,0,$m,($de-2),$y));
    $pre_date2 =  date('Y-m-d',mktime(0,0,0,$m,($de-3),$y));
    $pre_date3 =  date('Y-m-d',mktime(0,0,0,$m,($de-4),$y));
    $pre_date4 =  date('Y-m-d',mktime(0,0,0,$m,($de-5),$y));
    $pre_date5 =  date('Y-m-d',mktime(0,0,0,$m,($de-6),$y));
    $pre_date6 =  date('Y-m-d',mktime(0,0,0,$m,($de-7),$y));
    $pre_date7 =  date('Y-m-d',mktime(0,0,0,$m,($de-8),$y));
    $pre_date8 =  date('Y-m-d',mktime(0,0,0,$m,($de-9),$y));
    $pre_date9 =  date('Y-m-d',mktime(0,0,0,$m,($de-10),$y));
    $pre_date10 =  date('Y-m-d',mktime(0,0,0,$m,($de-11),$y));
    $pre_date11 =  date('Y-m-d',mktime(0,0,0,$m,($de-12),$y));
    
    $result = $this->db->get('mng_courses')->result();
 	 foreach ($result as  $value) {
      
 	 	$weekday = $value->weekday_start_date;
 	 	$weekend = $value->weekend_start_date;
 	 	$data =  array( 'status' => "" );
          if($weekday == $pre_date || $weekend == $pre_date )
             {
     	 	 	$this->db->where('weekday_start_date', $pre_date);
    		    $this->db->or_where('weekend_start_date', $pre_date);
    		    $data = $this->db->update('mng_courses',$data);
  	         }
 	      if($weekday == $pre_date1 || $weekend == $pre_date1 )
             {
     	 	 	$this->db->where('weekday_start_date', $pre_date1);
    		    $this->db->or_where('weekend_start_date', $pre_date1);
    		    $data = $this->db->update('mng_courses',$data);
  	         }
  	      if($weekday == $pre_date2 || $weekend == $pre_date2 )
             {
     	 	 	$this->db->where('weekday_start_date', $pre_date2);
    		    $this->db->or_where('weekend_start_date', $pre_date2);
    		    $data = $this->db->update('mng_courses',$data);
  	         }
  	      if($weekday == $pre_date3 || $weekend == $pre_date3 )
             {
     	 	 	$this->db->where('weekday_start_date', $pre_date3);
    		    $this->db->or_where('weekend_start_date', $pre_date3);
    		    $data = $this->db->update('mng_courses',$data);
  	         }
  	      if($weekday == $pre_date4 || $weekend == $pre_date4 )
             {
     	 	 	$this->db->where('weekday_start_date', $pre_date4);
    		    $this->db->or_where('weekend_start_date', $pre_date4);
    		    $data = $this->db->update('mng_courses',$data);
  	         }
  	      if($weekday == $pre_date5 || $weekend == $pre_date5 )
             {
     	 	 	$this->db->where('weekday_start_date', $pre_date5);
    		    $this->db->or_where('weekend_start_date', $pre_date5);
    		    $data = $this->db->update('mng_courses',$data);
  	         }
  	      if($weekday == $pre_date6 || $weekend == $pre_date6 )
             {
     	 	 	$this->db->where('weekday_start_date', $pre_date6);
    		    $this->db->or_where('weekend_start_date', $pre_date6);
    		    $data = $this->db->update('mng_courses',$data);
  	         }
  	      if($weekday == $pre_date7 || $weekend == $pre_date7 )
             {
     	 	 	$this->db->where('weekday_start_date', $pre_date7);
    		    $this->db->or_where('weekend_start_date', $pre_date7);
    		    $data = $this->db->update('mng_courses',$data);
  	         }
  	      if($weekday == $pre_date8 || $weekend == $pre_date8 )
             {
     	 	 	$this->db->where('weekday_start_date', $pre_date8);
    		    $this->db->or_where('weekend_start_date', $pre_date8);
    		    $data = $this->db->update('mng_courses',$data);
  	         }
  	      if($weekday == $pre_date9 || $weekend == $pre_date9 )
             {
     	 	 	$this->db->where('weekday_start_date', $pre_date9);
    		    $this->db->or_where('weekend_start_date', $pre_date9);
    		    $data = $this->db->update('mng_courses',$data);
  	         }
  	      if($weekday == $pre_date10 || $weekend == $pre_date10 )
             {
     	 	 	$this->db->where('weekday_start_date', $pre_date10);
    		    $this->db->or_where('weekend_start_date', $pre_date10);
    		    $data = $this->db->update('mng_courses',$data);
  	         }
  	      if($weekday == $pre_date11 || $weekend == $pre_date11 )
             {
     	 	 	$this->db->where('weekday_start_date', $pre_date11);
    		    $this->db->or_where('weekend_start_date', $pre_date11);
    		    $data = $this->db->update('mng_courses',$data);
  	         }
 	        
 	        
  	 }
  }
}

/* End of file Frontend_m.php */
/* Location: ./application/models/Frontend_m.php */