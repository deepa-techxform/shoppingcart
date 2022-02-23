<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class professionals Model
 */
class Cart_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->table_name = "product";
         // $this->table_detail = "professionals_details";
    }

}




?>