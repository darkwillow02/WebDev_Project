<?php

class Register_model extends CI_Model
{
    function registercustomer($data){
      $this->db->insert("customer_tbl", $data);
    }
}
?>
