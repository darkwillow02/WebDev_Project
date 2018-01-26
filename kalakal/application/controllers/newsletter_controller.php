<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter_controller extends CI_Controller {



  public function submitnl()
	{
    $this->load->model("newsletter_model");
    $data = array(
            "name" => $this->input->post("name"),
            "email" => $this->input->post("email"),
    );
    $this->newsletter_model->insert_newsletter($data);
    redirect(base_url()."newsletter_controller/submittednl");
	}

  public function submittednl(){
		 $this->load->view('homepage/homepage_view');
	}

}
?>
