<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services_m extends MY_Model {

	protected $_table_name = 'services';
	protected $_order_by = 'id';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	function __construct(){
		parent::__construct();
	}
	public  $ruels = array(
				'title' => array(
						'field' => 'title', 
						'label' => 'Title', 
						'rules' => 'trim|required'
				),
				'status' => array(
						'field' => 'status', 
						'label' => 'Status', 
						'rules' => 'trim|required'
				),
				'description' => array(
						'field' => 'description', 
						'label' => 'Description', 
						'rules' => 'trim|required'
				),
				 
			);
	public function service_list($limit, $start)
	{   
		 
		$this->db->limit($limit, $start);
		$data = $this->db->get('services')->result();
		return $data ;
	}
	public function services_count(){
		 
		 return $this->db->count_all('services');
	}
	public function add_service($image_name1=NULL,$image_name2=NULL,$image_name3=NULL)
	{	
            $data = $this->save(array(
            'content_type' => $this->input->post('content_type'),
            'title' => $this->input->post('title'),
            
            'image_title1' => $this->input->post('banner_title1'),
            'link1' => $this->input->post('banner_link1'),
 			'image1' => $image_name1,
 			'image_title2' => $this->input->post('banner_title2'),
 			'link2' => $this->input->post('banner_link2'),
			'image2' => $image_name2,
			'image_title3' => $this->input->post('banner_title3'),
			'link3' => $this->input->post('banner_link3'),
			'image3' => $image_name3,
			'content' => $this->input->post('description'),
		));
	}
	public function view_srvs($id = NULL)
	{
		$result = $this->get_by(array(
					'id' => $id,
				), TRUE);
		return $result;
	}
	public function delete_service()
	{
		$id = $this->uri->segment(4);		 
		$this->delete($id) ;
	}
	public function update_services($id = NULL,$image_name1=NULL,$image_name2=NULL,$image_name3=NULL)
	{
		$this->db->where('id', $id);
	 	$result = $this->db->get('services')->row();
	 	 if($image_name1 != ""){
            $image_name1 = $image_name1;
	 	 }else{
	 	 	$image_name1 = $result->image1;
	 	 }
	 	 if($image_name2 != ""){
            $image_name2 = $image_name2;
	 	 }else{
	 	 	$image_name2 = $result->image2;
	 	 }
	 	 if($image_name3 != ""){
            $image_name3 = $image_name3;
	 	 }else{
	 	 	$image_name3 = $result->image3;
	 	 }
		 $data =  array(
            'content_type' => $this->input->post('content_type'),
            'title' => $this->input->post('title'),
            'image_title1' => $this->input->post('banner_title1'),
            'link1' => $this->input->post('banner_link1'),
 		 	'image1' => $image_name1,
   			'image_title2' => $this->input->post('banner_title2'),
   			'link2' => $this->input->post('banner_link2'),
 			'image2' => $image_name2,
 			'image_title3' => $this->input->post('banner_title3'),
 			'link3' => $this->input->post('banner_link3'),
 			'image3' => $image_name3,
 			'content' => $this->input->post('description'),
 			 
			
		);
		$this->db->where('id', $id); 
		$data = $this->db->update('services',$data);
		return $data ;
	}
}
