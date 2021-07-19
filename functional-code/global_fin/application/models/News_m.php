<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_m extends MY_Model {

	protected $_table_name = 'blogs';
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
	public function blog_list($limit, $start)
	{   
		 
		$this->db->limit($limit, $start);
		$data = $this->db->get('blogs')->result();
		return $data ;
	}
	public function blog_count(){
		 
		 return $this->db->count_all('blogs');
	}
	public function add_Blog($img)
	{	
		//echo $img; exit();
		    $name = $this->input->post('title');
			$url = strtolower($name);
            $slug = preg_replace('~[^\pL\d]+~u ', '-', $url);
		$data = $this->save(array(
			'id' => '',
			'title' => $this->input->post('title'),
			'content' => $this->input->post('description'),
 			'images' => $img,
			'status' => $this->input->post('status'),
 			'createdAt' => '' ,
 			'updatedAt' => '' ,
 			'slugs' => $slug,
		));
	}
	public function view_blog($id)
	{
		$result = $this->get_by(array( 'id' => $id), TRUE);
		return $result;
	}
	public function delete_blog()
	{
		$id = $this->uri->segment(4);
		$this->db->where('id', $id);
		$this->db->delete('query_form');
	}
	public function update_blog($id = NULL,$imgs = NULL)
	{       $name = $this->input->post('title');
			$url = strtolower($name);
            $slug = preg_replace('~[^\pL\d]+~u ', '-', $url);
		if($imgs != ""){
 		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('description'),
			'images' => $imgs,
			'status' => $this->input->post('status'),
  			'updatedAt' => '' ,
  			'slugs' => $slug,
		);
		if ($this->save($data, $id)) {
			return TRUE ;
		}
		else{
			return FALSE ;
		}
	}else{
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('description'),
			//'images' => $img,
			'status' => $this->input->post('status'),
  			'updatedAt' => '' ,
  			'slugs' => $slug,
		);
		if ($this->save($data, $id)) {
			return TRUE ;
		}
		else{
			return FALSE ;
		}
	}
	}
public function query_list($pg_type=NULL){
	
 	    $data = $this->db->get('query_form')->result();
 
    return $data ;
}

}