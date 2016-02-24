<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->output->enable_profiler();
		$this->load->model('login');
	}

	public function index(){
		$this->load->view('main');
	}
	
	public function facebook_login(){
		$user = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'clientID' => $this->input->post('clientID'),
				'accessToken' => $this->input->post('accessToken'),
				'email' => $this->input->post('email')
		);
		$add_user = $this->login->add_facebook_user($user);
		$this->session->set_userdata($user);
	}



	public function how_does_it_work(){
		$this->load->view('how-does-it-work');
	}

}
