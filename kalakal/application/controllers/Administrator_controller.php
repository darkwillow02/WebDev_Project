<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator_controller extends CI_Controller {

	public function index(){
		$this->load->view('administrator/adminLogin_view.php');
	}

}
?>
