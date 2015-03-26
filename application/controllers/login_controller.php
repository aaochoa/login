<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller
{

  public function index()
	{
		redirect('login_controller/login_view','refresh');
	}

  public function login_view()
  {
    $this->load->view('login_view');
  }

  public function logged_in()
  {
    if ($this->session->userdata('is_logged_in'))
    {
      $this->load->view('logged_in');
    } else
    {
      $this->load->view('login_view');
    }

  }

  public function login_validation ()
	{
		$this->load->library('form_validation');
		$this->load->model('model_login');

		$this->form_validation->set_rules('Code','Code','required|trim|xss_clean|callback_validate_credentials');
		$this->form_validation->set_rules('Password','Password','required|trim|md5|xss_clean');

		if ($this->form_validation->run())
		{

			$data = array(

				'Code' => $this->input->post('Code'),
				'is_logged_in'=>1,
				);

			$this->session->set_userdata($data);

			redirect('login_controller/logged_in');
		} else
		{
			$this->load->view('login_view');

		}

	}

  public function validate_credentials ()
	{
		$this->load->model('model_login');
    $this->load->library('form_validation');

		if ($this->model_login->can_log_in())
		{
			return true;
		} else
		{
			$this->form_validation->set_message('validate_credentials','Wrong data entered in {field} field');
			return false;
		}
	}

  public function logout ()
	{
		if ($this->session->userdata('is_logged_in'))
		{
			$this->session->sess_destroy();
			redirect('login_controller/login_view','refresh');
		}
	}

}
