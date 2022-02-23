<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usercart extends CI_Controller {

 public function __construct()
 {
  parent::__construct();

  $this->load->library('form_validation');
//   $this->load->library('encryption');

 }
	public function cart()
	{


		$this->load->model('Product_model');
		$this->data['product']= $this->Product_model->find_product();
	
		// print_r($product);
		// exit();
		$this->load->view('user',$this->data );
	}


	
}
