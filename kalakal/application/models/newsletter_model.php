<?php

class Newsletter_model extends CI_Model
{
	function insert_data($data){
		$this->db->insert("newsletter_tbl", $data);
	}
}

 ?>
