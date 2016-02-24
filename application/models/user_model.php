<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class user_model extends CI_model {

    public function __construct(){
      parent::__construct();
      $this->load->library('form-validation');
    }

	public function add_facebook_user($post){
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');

		if($this->form_validation->run()){
			$query = "INSERT INTO users (email, password, created_at, updated_at, clientID, accessToken)
			VALUES (?,?,?,?,?,?)";
			$values = array($post['email'],0,date("Y-m-d, H:i:s"),date("Y-m-d, H:i:s"),$post['clientID'],$post['accessToken']);
			return $this->db->query($query, $values);
		} else {
			$user = $this->users->get_by_email($post['email']);
			$post['id'] = $user['id'];
			$this->users->update($post);
		}
	}

	public function add_user($post){
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|matches[pass_2]|min_length[8]');
		$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|trim');

		if($this->form_validation->run()){
			$query = "INSERT INTO users (email, password, created_at, updated_at, clientID, accessToken)
					VALUES (?,?,?,?,?,?)";
			$values = array($post['email'],md5($post['password']),date("Y-m-d, H:i:s"),date("Y-m-d, H:i:s"),0,0);
			return $this->db->query($query, $values);
		}
		return false;
	}

	public function get_by_email($email){
		$query = "SELECT * FROM users WHERE email = ?";
		return $this->db->query($query, $email)->row_array();
	}

	public function update($post){
		$query = "UPDATE users SET email = ?, password = ?, updated_at = ?, clientID, accessToken = ? WHERE id = ?";
		$values = array($post['email'],$post['password'],date("Y-m-d, H:i:s"),
				$post['accessToken'],$post['clientID'],$post['id']);
		return $this->db->query($query, $values);
	}

	public function delete($user_id){
		$query = "DELETE FROM users WHERE id = ?";
		return $this->db->query($query, $user_id);
	}
}
