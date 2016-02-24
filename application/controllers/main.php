<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->output->enable_profiler();
		$this->load->model('login');
	}

	public function index(){
		if($this->session->userdata('logged_in')){
			$this->load->view('/partials/loggedin_header');
		} else {
			$this->load->view('/partials/default_header');
		}
		$this->load->view('main');
	}

	public function how_does_it_work(){
		if($this->session->userdata('logged_in')){
			$this->load->view('/partials/loggedin_howto_header');
		} else {
			$this->load->view('/partials/default_howto_header');
		}
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
		$this->login->add_facebook_user($user);
	}

}
