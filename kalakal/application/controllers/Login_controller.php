<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {
    public function index(){
        $this->load->view('user/login_view');
    }
    public function loginvalidation(){
      $this->load->model('login_model');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      if($this->login_model->checklogin($username,$password)){
        echo "login succesfully";
      }
    }
}
?>
