<?php
	
	class Product extends CI_Controller {
	
		public function __construct(){
			parent::__construct();
			$this->load->model('product_model');
	
		}
	
		// List all your items
		public function index(){
			$this->load->view('product_view');
		}

		public function product_data(){
			$data = $this->product_model->product_list();
			echo json_encode($data);
		}

		public function save(){
			$data = $this->product_model->save_product();
			echo json_encode($data);
		}
	
		//Update one item
		public function update( $id = NULL ){
			$data = $this->product_model->update_product();
			echo json_encode($data);
		}
	
		//Delete one item
		public function delete( $id = NULL ){
			$data = $this->product_model->delete_product();
			echo json_encode($data);
		}
	}
	
	/* End of file Product.php */
	/* Location: ./application/controllers/Product.php */
	

?>