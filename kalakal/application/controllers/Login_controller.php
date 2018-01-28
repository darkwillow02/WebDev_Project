<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {
    public function index(){
        $this->load->view('user_account/login_view');
    }
    public function loginvalidation(){
      print_r($_POST);
      if($this->input->post('login_status')=="Login as Customer"){
        $this->load->model('login_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if($this->login_model->customerlogin($username,$password)){
          echo "customer";
        }
      }
      else if($this->input->post('login_status')=="Login as Vendor"){
        $this->load->model('login_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if($this->login_model->vendorlogin($username,$password)){
          echo "vendor";
        }
      else if($this->input->post('login_status')=="Login as Manufacturer"){
          $this->load->model('login_model');
          $username = $this->input->post('username');
          $password = $this->input->post('password');
          if($this->login_model->manufacturerlogin($username,$password)){
            echo "manufacturer";
          }
        }
      }
    }
  }
?>
