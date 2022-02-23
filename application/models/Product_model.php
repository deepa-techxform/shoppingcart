<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class professionals Model
 */
class Product_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->table_name = "product";
         // $this->table_detail = "professionals_details";
    }
    public function find_product()
    {
      $this->db->select('product.*');
    
        return $this->db->get('product')->result_array();
    }
}




?>