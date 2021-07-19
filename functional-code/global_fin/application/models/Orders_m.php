<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders_m extends MY_Model {

	protected $_table_name = 'orders';
	protected $_order_by = 'id';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';

	function __construct(){
		parent::__construct();
	}

	public function orders($limit, $start){

		$this->db->limit($limit, $start);
		$result = $this->db->get('orders')->result();
		return $result;
	}
	public function orders_new($limit, $start){

		$this->db->limit($limit, $start);
		//$data = array('order_status !='  => 'completed');
		$this->db->where('order_status !=', 'completed');
		$result = $this->db->get('orders')->result();
		return $result;
	}
	public function orders_count(){
		 return $this->db->count_all('orders');
	}
	public function orders_new_count(){
		$this->db->where('order_status !=' ,'completed');
		 return $this->db->count_all('orders');
	}

	public function order_status_view($id){
		$result = $this->get($id);
		return $result ;
	}
	public function update_orders(){
		$id = $this->input->post('id');
		$data = array('order_status' => $this->input->post('order_status'),
			'payment_status' => $this->input->post('payment_status'),
			'shipping_status' => $this->input->post('shipping_status') );
		$result = $this->save($data,$id);
		return $result ;
	}
	public function order_product_information($id){

		$result = $this->get($id);
		$products = $result->product_orderd ;
		$products = explode(",",$products);
		$variation = json_decode($result->orders_variation ,true);
		$this->db->select('products.* ,products.id as ids,product_images.*');
		$this->db->from('products');
		$this->db->join('product_images', 'products.id = product_images.product_id', 'left');
		$this->db->where('product_images.is_it_cover', 'yes');
		$this->db->where_in('products.id', $products);
		$results = $this->db->get()->result();
		$html = '<div class="row"> 
                     <div class="col-md-12"> 
                        
                     <div class="table-responsive">
                       <table class="table table-striped table-bordered">
                     <tbody>
                     <tr>
                     <th width="102">Product Image</th>
                     <th width="230">Product Details</th>
                     <th width="100">Size</th>
                     </tr>';
                     
		foreach ($results as $data) {
			$size = '';
			$product_variation = $variation[$data->ids];
			$product_size = $product_variation['size'];
				foreach ($product_size as $key => $value) {
					$size .= 'Size : '.$key.' : '.$value.'|';
				}
			$html.='<tr>
                     <td><img src="'.base_url().'/admin-assets/images/'.$data->image_name.'" width="100"></td>
                     <td id="txt_lname" >
                       <table class="table table-striped table-bordered">
                         <tr>
                           <td>Product Name ('.$data->product_name. '#'.$data->id.')</td>
                         </tr>
                         <tr>
                           <td>Color :<span style="background-color: '.$product_variation['color'].'" class="color_attrib"></span></td>
                         </tr>
                         <tr>
                           <td>
                             Style: '.$product_variation['style'].'
                           </td>
                         </tr>
                         <tr>
                           <td>
                             Fabric: '.$product_variation['fabric'].'
                           </td>
                         </tr>
                          
                       </table>
                     </td>
                     <td>
                      '.$size.'
                     </td>
                     </tr>';
		}

		$html .='</tbody>
                   </table>
                     </div>                                       
                   </div> 
              </div>';

      return $html ;


	}
	

}

/* End of file Orders_m.php */
/* Location: ./application/models/Orders_m.php */