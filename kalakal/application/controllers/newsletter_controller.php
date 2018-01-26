<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter_controller extends CI_Controller {

	public function index(){
		$this->load->view('homepage/homepage_view',$data);
	}

  public function submitnl()
	{
    $this->load->model("newsletter_model");
    $data = array(
            "name" => $this->input->post("name"),
            "email" => $this->input->post("email"),
    );
    $this->newsletter_model->insert_data("$data");
    redirect(base_url()."index.php/newsletter_controller/submittednl");
	}

  public function submittednl()
	{
    $this->load->index()
  }

}
?>
