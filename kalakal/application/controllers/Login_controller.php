<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {
    public function index(){
        $this->load->view('user_account/login_view');
    }
    public function logincustomer(){
      $this->load->model('login_model');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      if($this->login_model->customerlogin($username,$password)){
        echo "login succesfully";
      }
    }
    public function loginvendor(){
      $this->load->model('login_model');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      if($this->login_model->vendorlogin($username,$password)){
        $this->load->view('user_account/vendor/vdashboard_view.php');
      }
    }
    public function loginmanufacturer(){
      $this->load->model('login_model');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      if($this->login_model->manufacturerlogin($username,$password)){
        echo "login succesfully";
      }
    }
}
?>
