<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}

	public function register(){
		if($this->user_model->add($this->input->post())){
			// auto login
			$user = $this->user_model->get_by_email($this->input->post('email'));
			$user_data = array(
				'user_id' => $user['id'],
				'user_email' => $user['email'],
				'is_logged_in' => TRUE
				);
			$this->session->set_userdata($user_data);
		}
		$this->session->set_flashdata("reg_error", TRUE); 	// errors
		redirect("/");
	}

	public function login(){
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		if($email && $password){
			$user = $this->user_model->get_by_email($email);
			if($user && $user['password'] == $password){
				$user_data = array(
					'user_id' => $user['id'],
					'user_email' => $user['email'],
					'is_logged_in' => TRUE
					);
				$this->session->set_userdata($user_data);
			}
		}
		$this->session->set_flashdata("login_error", TRUE);
		redirect("/");
	}

	public function facebook_login(){
		$user_data = array(
				'email' => $this->input->post('email'),
				'clientID' => $this->input->post('clientID'),
				'accessToken' => $this->input->post('accessToken'),
				'logged_in' => TRUE
		);
		$this->login->add_facebook_user($user_data);
		$this->session->set_userdata($user_data);
		redirect("/");
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect("/");
	}

}
