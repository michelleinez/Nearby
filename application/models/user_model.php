<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class user_model extends CI_model {

    public function __construct(){
      parent::__construct();
    }

	public function add_facebook_user($post){
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[fb_users.email]');

		if($this->form_validation->run()){
			$query = "INSERT INTO fb_users (email, created_at, updated_at, clientID, accessToken)
			VALUES (?,?,?,?,?)";
			$values = array($post['email'],date("Y-m-d, H:i:s"),date("Y-m-d, H:i:s"),$post['clientID'],$post['accessToken']);
			$this->db->query($query, $values);
		} else {
			$user = $this->users->get_by_email($post['email']);
			$query = "UPDATE users SET updated_at = ?, clientID = ?, accessToken = ? WHERE id = ?";
			$values = array(date("Y-m-d, H:i:s"),$post['clientID'],$post['accessToken'],$user['id']);
			return $this->db->query($query, $values);
		}
		redirect('/');
	}

    public function add_g_user($user){
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[g_users.email]');

        if($this->form_validation->run()){
            $query = "INSERT INTO g_users (email, token) VALUES (?,?)";
            $values = array($user['email'], $user['token']);
            return $this->db->query($query, $values);
        }
        $this->session->userdata('g_errors', TRUE);
        return false;
    }

	public function add_user($post){
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password_confirm]|min_length[8]');
		$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|trim');

		if($this->form_validation->run()){
			// $query = "INSERT INTO users (email, password, created_at, updated_at, clientID, accessToken) VALUES (?,?,?,?,?,?)";
			// $values = array($post['email'],md5($post['password']),date("Y-m-d, H:i:s"),date("Y-m-d, H:i:s"),0,0);
			$query = "INSERT INTO users (email, password, created_at, updated_at) VALUES (?,?,?,?)";
			$values = array($post['email'],md5($post['password']),date("Y-m-d, H:i:s"),date("Y-m-d, H:i:s"));
			return $this->db->query($query, $values);
		}
		return false;
	}

	public function get_by_email($email){
		$query = "SELECT * FROM users WHERE email = ?";
		return $this->db->query($query, $email)->row_array();
	}


	public function delete($user_id){
		$query = "DELETE FROM users WHERE id = ?";
		return $this->db->query($query, $user_id);
	}
}
