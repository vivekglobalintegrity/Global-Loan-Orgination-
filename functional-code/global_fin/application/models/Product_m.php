<?php 
class Product_m extends MY_Model {
	protected $_table_name = 'products';
	protected $_order_by = 'id';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';

	function __construct(){
		parent::__construct();
		$this->load->helper("file");
	}
	public  $rules = array(
			'product_name' => array(
					'field' => 'product_name', 
					'label' => 'product_name', 
					'rules' => 'trim|required'
			), 
			'sku' => array(
				'field' => 'sku', 
				'label' => 'sku', 
				'rules' => 'trim|required'
			), 
			'price' => array(
				'field' => 'price', 
				'label' => 'price', 
				'rules' => 'trim|required'
			)
		);
	public function products($limit ,$offset){
 		$this->db->limit($limit ,$offset);
 		$result = $this->db->get('mng_courses')->result();
		return $result ;
	}
	public function add_product ($img = NULL, $pdf = NULL, $broucher = NULL){	
		 $name = $this->input->post('title');
		 $url = strtolower($name);
         $slug = preg_replace('~[^\pL\d]+~u ', '-', $url);

		if($img != ""){
				 
			$data =  array(
			'title' => $name,
			'image' => $img,
			'preparation_for_exam' => $this->input->post('preparation_for_exam'),
			'about' => $this->input->post('about'),
			'prerequisites' => $this->input->post('prerequisites'), 
			'course_outline' => $this->input->post('course_outline'),
			'description'  => $this->input->post('description'),

			'discount_code' => $this->input->post('discount_code'),
			'discount_description' => $this->input->post('discount_description'), 
			'discount_code_other' => $this->input->post('discount_code_other'),
			'discount_description_other'  => $this->input->post('discount_description_other'),

			'disclaimer' => $this->input->post('disclaimer'),
			'cat_id' => $this->input->post('product_categories'),
			 
			'level' => $this->input->post('level'),
			'language'  => $this->input->post('language'),
			'training_mode' => $this->input->post('training_mode'),
			'job_role' => $this->input->post('job_role'),
			'audience_profile'  => $this->input->post('audience_profile'),
			'weekend_batch_days' => $this->input->post('weekend_batch_days'),
			'weekday_batch_days' => $this->input->post('weekday_batch_days'),
			
			'weekday_start_date' =>  $this->input->post('weekday_start_date'),
			'weekday_end_date'  => $this->input->post('weekday_end_date'),
			
			'weekend_start_date' =>  $this->input->post('weekend_start_date'),
			'weekend_end_date'  => $this->input->post('weekend_end_date'),
			'weekend_dates'  => $this->input->post('weekend_dates'),
			'agenda'  => $pdf,
			
			'regular_price' => $this->input->post('regular_price'),

			'deliverables' => $this->input->post('deliverables'),
			'weekday_batch' => $this->input->post('weekday_b'),
			'weekend_batch' => $this->input->post('weekend_b'),
			'custom_time' => $this->input->post('custom_time'),

			'other_country_regular_price' => $this->input->post('other_country_regular_price'),
			
			'price' => $this->input->post('ind_price'),
			'other_country_price' => $this->input->post('other_country_price'),
			'payments_link' => $this->input->post('payment_link_inr'),
			'payment_link_usd' => $this->input->post('payment_link_other'),
 			'slugs' => $slug,
			'status' => $this->input->post('status'), 
			'broucher' =>$broucher ,
 		);
		}else{
           $data =  array(
			'title' => $name,
			 
			'preparation_for_exam' => $this->input->post('preparation_for_exam'),
			'about' => $this->input->post('about'),
			'prerequisites' => $this->input->post('prerequisites'), 
			'course_outline' => $this->input->post('course_outline'),
			'description'  => $this->input->post('description'),
			'discount_code' => $this->input->post('discount_code'),
			'discount_description' => $this->input->post('discount_description'), 
			'discount_code_other' => $this->input->post('discount_code_other'),
			'discount_description_other'  => $this->input->post('discount_description_other'),
			'disclaimer' => $this->input->post('disclaimer'),
			'cat_id' => $this->input->post('product_categories'),
			 
			'level' => $this->input->post('level'),
			'language'  => $this->input->post('language'),
			'training_mode' => $this->input->post('training_mode'),
			'job_role' => $this->input->post('job_role'),
			'audience_profile'  => $this->input->post('audience_profile'),
			'weekend_batch_days' => $this->input->post('weekend_batch_days'),
			'weekday_batch_days' => $this->input->post('weekday_batch_days'),
			
			'weekday_start_date' =>  $this->input->post('weekday_start_date'),
			'weekday_end_date'  => $this->input->post('weekday_end_date'),
			
			'weekend_start_date' =>  $this->input->post('weekend_start_date'),
			'weekend_end_date'  => $this->input->post('weekend_end_date'),
			'weekend_dates'  => $this->input->post('weekend_dates'),
			'agenda'  => $pdf,
			 'deliverables' => $this->input->post('deliverables'),
			'weekday_batch' => $this->input->post('weekday_b'),
			'weekend_batch' => $this->input->post('weekend_b'),
			'custom_time' => $this->input->post('custom_time'),
			'price' => $this->input->post('ind_price'),
			
			'regular_price' => $this->input->post('regular_price'),
			'other_country_regular_price' => $this->input->post('other_country_regular_price'),
			'payments_link' => $this->input->post('payment_link_inr'),
			'payment_link_usd' => $this->input->post('payment_link_other'),
			'other_country_price' => $this->input->post('other_country_price'),
 			'slugs' => $slug,
			'status' => $this->input->post('status'),
			'broucher' =>$broucher ,
 		);
		}
		
        $result = $this->db->insert('mng_courses',$data);
        if($result){
        	return TRUE;
        }else{
		  return FALSE;
	    }
	}
	public function update_product ($img = NULL, $pdf = NULL, $broucher = NULL){
		 $name = $this->input->post('title');
		 $url = strtolower($name);
         $slug = preg_replace('~[^\pL\d]+~u ', '-', $url);
         $id = $this->uri->segment(4);
 		 
		  if($pdf == ""){
             $this->db->where('id',$id);
             $for_pdf = $this->db->get('mng_courses')->row();
             $pdf1 = $for_pdf->agenda;
		  }else{
		  	$pdf1 = $pdf ;
		  }

		  if($broucher == ""){
             $this->db->where('id',$id);
             $for_pdf = $this->db->get('mng_courses')->row();
             $broucher = $for_pdf->broucher;
		  }else{
		  	$broucher = $broucher ;
		  }

		if($img != ""){
			$data =  array(
			'title' => $name,
			'image' => $img,
			'preparation_for_exam' => $this->input->post('preparation_for_exam'),
			'about' => $this->input->post('about'),
			'prerequisites' => $this->input->post('prerequisites'), 
			'course_outline' => $this->input->post('course_outline'),
			'description'  => $this->input->post('description'),
			'discount_code' => $this->input->post('discount_code'),
			'discount_description' => $this->input->post('discount_description'), 
			'discount_code_other' => $this->input->post('discount_code_other'),
			'discount_description_other'  => $this->input->post('discount_description_other'),
			'disclaimer' => $this->input->post('disclaimer'),
			'cat_id' => $this->input->post('product_categories'),
			 
			'level' => $this->input->post('level'),
			'language'  => $this->input->post('language'),
			'training_mode' => $this->input->post('training_mode'),
			'job_role' => $this->input->post('job_role'),
			'audience_profile'  => $this->input->post('audience_profile'),
			'weekend_batch_days' => $this->input->post('weekend_batch_days'),
			'weekday_batch_days' => $this->input->post('weekday_batch_days'),
			
			'weekday_start_date' =>  $this->input->post('weekday_start_date'),
			'weekday_end_date'  => $this->input->post('weekday_end_date'),
			'deliverables' => $this->input->post('deliverables'),
			'weekday_batch' => $this->input->post('weekday_b'),
			'weekend_batch' => $this->input->post('weekend_b'),
			'custom_time' => $this->input->post('custom_time'),
			'weekend_start_date' =>  $this->input->post('weekend_start_date'),
			'weekend_end_date'  => $this->input->post('weekend_end_date'),
			'weekend_dates'  => $this->input->post('weekend_dates'),
			'agenda'  => $pdf1,
			'price' => $this->input->post('ind_price'),
			
			'regular_price' => $this->input->post('regular_price'),
			'other_country_regular_price' => $this->input->post('other_country_regular_price'),

			'payments_link' => $this->input->post('payment_link_inr'),
			'payment_link_usd' => $this->input->post('payment_link_other'),
			
			'other_country_price' => $this->input->post('other_country_price'),
 			'slugs' => $slug,
			'status' => $this->input->post('status'), 
			'broucher' =>$broucher ,
 		);
		}else{
           $data =  array(
			'title' => $name,
			 
			'preparation_for_exam' => $this->input->post('preparation_for_exam'),
			'about' => $this->input->post('about'),
			'prerequisites' => $this->input->post('prerequisites'), 
			'course_outline' => $this->input->post('course_outline'),
			'description'  => $this->input->post('description'),
			'discount_code' => $this->input->post('discount_code'),
			'discount_description' => $this->input->post('discount_description'), 
			'discount_code_other' => $this->input->post('discount_code_other'),
			'discount_description_other'  => $this->input->post('discount_description_other'),
			'disclaimer' => $this->input->post('disclaimer'),
			'cat_id' => $this->input->post('product_categories'),
			 
			'level' => $this->input->post('level'),
			'language'  => $this->input->post('language'),
			'training_mode' => $this->input->post('training_mode'),
			'job_role' => $this->input->post('job_role'),
			'audience_profile'  => $this->input->post('audience_profile'),
			'weekend_batch_days' => $this->input->post('weekend_batch_days'),
			'weekday_batch_days' => $this->input->post('weekday_batch_days'),
			
			'weekday_start_date' =>  $this->input->post('weekday_start_date'),
			'weekday_end_date'  => $this->input->post('weekday_end_date'),
			'deliverables' => $this->input->post('deliverables'),
			'weekday_batch' => $this->input->post('weekday_b'),
			'weekend_batch' => $this->input->post('weekend_b'),
			'custom_time' => $this->input->post('custom_time'),
			'weekend_start_date' =>  $this->input->post('weekend_start_date'),
			'weekend_end_date'  => $this->input->post('weekend_end_date'),
			'weekend_dates'  => $this->input->post('weekend_dates'),
			'agenda'  => $pdf1,
			 
			'price' => $this->input->post('ind_price'),
			
			'regular_price' => $this->input->post('regular_price'),
			'other_country_regular_price' => $this->input->post('other_country_regular_price'),
			
             'payments_link' => $this->input->post('payment_link_inr'),
			'payment_link_usd' => $this->input->post('payment_link_other'),

			'other_country_price' => $this->input->post('other_country_price'),
 			'slugs' => $slug,
			'status' => $this->input->post('status'),
			'broucher' =>$broucher ,
 		);
		}
		$this->db->where('id',$id);
       $result = $this->db->update('mng_courses',$data);
       if($result){
       	return TRUE;
       }else{
       	return FALSE;
       }
	}
 
 


	public function update_categories($data = NULL ,$id = NULL){
		if($id == NULL){
			$result= $this->db->insert('product_categories',$data);
	    	return $result;
		}else{
			$this->db->set($data);
			$this->db->where('id', $id);
			$result = $this->db->update('product_categories'); 
			return $result ;
		}
	}

	public function get_categories($limit, $start)
	{	$this->db->limit($limit, $start);
		$result = $this->db->get('product_categories')->result();
		return $result ;
	}

	public function categories_view($id){

		$this->db->select('*');
		$this->db->from('product_categories');
		$this->db->where('id', $id);
		$result = $this->db->get()->row();
		return $result ;

	}

	public function delete_cats($id){

		$this->db->limit(1);
		$this->db->where('id', $id);
		$this->db->delete('product_categories');

	}

	public function cats_count(){
		 return $this->db->count_all('product_categories');
	}
	public function product_count(){
		 return $this->db->count_all('mng_courses');
	}
 
 

	public function course_info(){
		$id = $this->uri->segment(4);
		$this->db->where('id', $id);
		$result = $this->db->get('mng_courses')->row();
		return $result;
	}
	public function get_category(){

		//$cats  = array();

		$result = $this->db->get('product_categories')->result();
		// foreach ($result as $data) {
		// 	$cats[$data->categories_name] = $data->categories_name;
		// }
		return $result;
	}
  
	public function product_delete($id = NULL){
		
		$this->db->where('id', $id);
		$this->db->delete('mng_courses');
	}

	public function storeTransaction($data = array()){
        $insert = $this->db->insert('payments',$data);
        return $insert?true:false;
    }

}