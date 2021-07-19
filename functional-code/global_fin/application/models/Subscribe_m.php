<?php
class Subscribe_m extends MY_Model {
	protected $_table_name = 'subscription';
	protected $_order_by = 'id';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';

	function __construct(){
		parent::__construct();
	}
	public  $ruels = array(
				'pname' => array(
						'field' => 'pname', 
						'label' => 'pname', 
						'rules' => 'trim|required'
				), 
				'price' => array(
					'field' => 'price', 
					'label' => 'Price', 
					'rules' => 'trim|required'
				),
				'Validity' => array(
					'field' => 'Validity', 
					'label' => 'Validity', 
					'rules' => 'trim|required'
				),
				'status' => array(
					'field' => 'status', 
					'label' => 'Status', 
					'rules' => 'trim|required'
				), 
				's_type' => array(
					'field' => 's_type', 
					'label' => 'Status', 
					'rules' => 'trim|required'
				) 
			);
public function add_packag ($id = NULL)
	{	
		$data = $this->save(array(
			'id' => '',
			'name' => $this->input->post('pname'),
			'price' => $this->input->post('price'),
			'validate' => $this->input->post('Validity'),
			'status' => $this->input->post('status'),
			'subs_type' => $this->input->post('s_type'),
 			'updatedAt' => '' ,
		));
	}
public function get_package($limit, $start)
	{
		$this->db->limit($limit, $start);
		$result = $this->get();
		return $result ;
	}
public function view_pack($id = NULL)
	{
		$result = $this->get_by(array(
					'id' => $id,
				), TRUE);
		return $result;
	}
public function shop_manager_count(){
		 return $this->db->count_all('subscription');
	}
public function update_packages($id= NULL)
	{
 		$data = array(
			'name' => $this->input->post('pname'),
			'price' => $this->input->post('price'),
			'validate' => $this->input->post('Validity'),
			'status' => $this->input->post('status'),
			'subs_type' => $this->input->post('s_type'),
		);
		if ($this->save($data, $id)) {
			return TRUE ;
		}
		else{
			return FALSE ;
		}
	}
public function delete_package()
	{
		$id = $this->uri->segment(4);		 
		$this->delete($id) ;
	}
}