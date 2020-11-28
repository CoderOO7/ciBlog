<?php
class User_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function register($enc_password){
        $data = array(
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $enc_password,
        );

        return $this->db->insert('users',$data);
    }
}