<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms_m extends MY_Model {

	protected $_table_name = 'about';
	protected $_order_by = 'id';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	function __construct(){
		parent::__construct();
	}
	public function about()
	{    

		$data = $this->db->get('about')->result();
		return $data ;
	}
	public function comman_content($type = NULL){
		 $this->db->where('mission', $type);
		$data = $this->db->get('about')->row();
		return $data;
	}

	public function get_courses(){

		return $this->db->get('mng_courses')->result();
	}

	public function get_country(){

		return $this->db->get('countries')->result();
	}
	public function home_slider(){
		 $this->db->where('mission', 'slider');
		$data = $this->db->get('about')->result();
		return $data;
	}
	public function view_about($id)
	{
		$result = $this->get_by(array(
					'id' => $id,
				), TRUE);
		return $result;
	}
	public function view_testimonials($id)
	{

		$this->db->where('id', $id);
		$result = $this->db->get('testimonials')->row();
		return $result;
	}

	public function coupon_view($id){
		$this->db->where('id', $id);
		$result = $this->db->get('coupon')->row();
		return $result;
	}

	public function update_testimonials($id){


		$data = array(	
			'testimonials' => $this->input->post('testimonials'),
			'name' => $this->input->post('name'),
			'positions' => $this->input->post('positions')
		);
if($id == ""){
$this->db->insert('testimonials', $data);
}else{
	$this->db->where('id', $id);
	$this->db->update('testimonials', $data);
}
		

	}

	public function update_coupon($id){

		$data = array(	
			'couponcode' => $this->input->post('couponcode'),
			'coupon_discount' => $this->input->post('coupon_discount'),
			'coupon_type' => $this->input->post('coupon_type'),
			'coupon_status' => $this->input->post('coupon_status'),
			'coupon_expire_on' => $this->input->post('coupon_expire_on')
		);
if($id == ""){
$this->db->insert('coupon', $data);
}else{
	$this->db->where('id', $id);
	$this->db->update('coupon', $data);
}
	}
	public function update_about($id = NULL,$imgs = NULL)
	{
		    
		if($imgs != ""){
			
 		    $data = array(
			
			'Title' => $this->input->post('title'),
			'subtitle' => $this->input->post('subtitle'),
			'content' => $this->input->post('content'),
			'mission' => $this->input->post('mission'),
			'vission' => $this->input->post('vission'),
			'what_we_do' => $this->input->post('what'),
			'image' => $imgs,
			 
  			'updatedAt' => '' ,
  				
		);
		if ($this->save($data, $id)) {
			return TRUE ;
		}
		else{
			return FALSE ;
		}
	}else{
		$data = array(
			'Title' => $this->input->post('title'),
			'subtitle' => $this->input->post('subtitle'),
			'content' => $this->input->post('content'),
			'mission' => $this->input->post('mission'),
			'vission' => $this->input->post('vission'),
			'what_we_do' => $this->input->post('what'),
  			'updatedAt' => '' ,
		);
		if ($this->save($data, $id)) {
			return TRUE ;
		}
		else{
			return FALSE ;
		}
	}
	}

	public function get_testmonials(){

		return $this->db->get('testimonials')->result();
	}

	public function get_coupons(){

		return $this->db->get('coupon')->result();
	}


}

/* End of file Cms_m.php */
/* Location: ./application/models/Cms_m.php */