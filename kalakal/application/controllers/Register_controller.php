<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_controller extends CI_Controller {
  public function index(){
    $this->load->view('user_account/register_view');
  }
  public function registervalidation(){
    $password1 = $this->input->post("password_1");
    $password2 = $this->input->post("password_2");
		if($password1 == $password2){
      $data = array(
          "custEmail" => $this->input->post("email"),
          "custUsername" => $this->input->post("username"),
          "custPassword" => $this->input->post("password_1"),

      );
      $this->load->model('register_model');
      $this->register_model->registercustomer($data);
      echo "Fuck ya!";
    }
    else{
      $this->session->set_flashdata('error','Passwords does not match');
      $this->index();
    }
  }

}
?>
