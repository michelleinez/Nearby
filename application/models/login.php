<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class login extends CI_model {

    // public function __construct(){
    //   parent::__construct();
    //   $this->load->library('form-validation');
    //
    // }
    public function add_facebook_user($user)
    {
        // return FALSE
        // else
        $query = "INSERT INTO users (first_name, last_name, email, created_at, updated_at, clientID, accessToken) VALUES (?, ?, ?, NOW(), NOW(), ?, ?)";
        $values = array($user['first_name'], $user['last_name'], $user['email'], $user['accessToken'], $user['clientID']);
        return $this->db->query($query, $values);
    }

}
