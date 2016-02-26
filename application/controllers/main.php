<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->output->enable_profiler();
		// $this->load->model('login');
		$this->load->model('user_model');
	}

	public function index(){
		$this->load->view('main');
	}

	public function how_does_it_work(){
		$this->load->view('how-does-it-work');
	}

	public function facebook_login(){
		$user = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'clientID' => $this->input->post('clientID'),
				'accessToken' => $this->input->post('accessToken'),
				'email' => $this->input->post('email'),
				'logged_in' => TRUE
		);
		$this->session->set_userdata($user);
		//redefine $user to what we want in our DB
		$this->user_model->add_facebook_user($user);
	}

	public function g_user_login(){
		$user = array(
			'email' => $this->input->post('email'),
			'token' => $this->input->post('token'),
			'logged_in' => TRUE
		);
		$this->session->set_userdata($user);
		$this->user_model->add_g_user($user);
	}

}
