<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_controller extends CI_Controller {

	public function index(){
		$this->load->view('homepage/homepage1');
	}

  public function register(){
    $this->load->view('welcome_message');
  }

}
?>
