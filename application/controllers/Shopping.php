<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends CI_Controller {

 public function __construct()
 {
  parent::__construct();

  $this->load->library('form_validation');
//   $this->load->library('encryption');

 }
	public function product()
	{
		$this->load->view('product');
	}


	public function create_product()
	{
		$this->form_validation->set_rules('fname', '  Product Name', 'required|trim');
		$this->form_validation->set_rules('fprice', '  Price', 'required|trim');
		$this->form_validation->set_rules('fstock', 'Stock', 'required');

		if($this->form_validation->run())
		{
	  
	
		//  $pwd = $this->input->post('fname');
		 $data = array(
		  'product_name'  => $this->input->post('fname'),
		  'price'  => $this->input->post('fprice'),
		  'stock'  => $this->input->post('fstock'),
		
		  // 'verification_key' => $verification_key
		 );
		$this->load->model('Product_model');
		
		$this->db->insert('product', $data);
		}
		// echo"sucess";
        // exit();
		$this->load->view('product');
	}
}
