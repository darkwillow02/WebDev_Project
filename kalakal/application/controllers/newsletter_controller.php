<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter_controller extends CI_Controller {

<<<<<<< HEAD

=======
	public function index(){
		$this->load->view('homepage/homepage_view',$data);
	}
>>>>>>> f8ded5f4dbeac787ebb94de1529c13bcd38a2aee

  public function submitnl()
	{
    $this->load->model("newsletter_model");
    $data = array(
            "name" => $this->input->post("name"),
            "email" => $this->input->post("email"),
    );
<<<<<<< HEAD
    $this->newsletter_model->insert_newsletter($data);
    redirect(base_url()."newsletter_controller/submittednl");
	}

  public function submittednl(){
		 $this->load->view('homepage/homepage_view');
	}
=======
    $this->newsletter_model->insert_data("$data");
    redirect(base_url()."newsletter_controller/submittednl");
	}

  public function submittednl()
	{
    $this->load->index()
  }
>>>>>>> f8ded5f4dbeac787ebb94de1529c13bcd38a2aee

}
?>
