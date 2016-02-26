<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class login extends CI_model {

	// public function __construct(){
    //   parent::__construct();
    //   $this->load->library('form-validation');
    //
    // }
    public function add_facebook_user($user)
    {
		//if email exists,
        // return FALSE
        // else
        $query = "INSERT INTO fb_users (first_name, last_name, email, created_at, updated_at, clientID, accessToken) VALUES (?, ?, ?, NOW(), NOW(), ?, ?)";
        $values = array($user['first_name'], $user['last_name'], $user['email'], $user['clientID'], $user['accessToken']);
        return $this->db->query($query, $values);
    }

    public function add_g_user($user)
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[g_users.email]');

        if($this->form_validation->run()){
            $query = "INSERT INTO g_users (email, token) VALUES (?,?)";
            $values = array($user['email'], $user['token']);
            return $this->db->query($query, $values);
        }
        $this->session->userdata('g_errors', TRUE);
        return false;
    }

}
