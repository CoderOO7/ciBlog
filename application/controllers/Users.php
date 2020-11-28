<?php 
 class Users extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model','user_model');
    }

    public function register(){
        $data['title'] = 'Sign Up';
        
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('username','Username','required|is_unique[users.username]',
            array('is_unique' => '%s already taken. Try different username')
        );
        $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]',
            array('is_unique'=> '%s already registered')
        );
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('password2','Confirm Password','matches[password]|required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('users/register',$data);
            $this->load->view('templates/footer');

        }else{
            //Encrypt Password
            $enc_password = $this->_hash_password($this->input->post('password'));

            $this->user_model->register($enc_password);

            //Set message
            $this->session->set_flashdata('user_registered','You are now registered and can log in');

            redirect('posts');
        }
    
    }

    private function _hash_password($password){
        return password_hash($password, PASSWORD_BCRYPT);
    }

    private function verify_password_hash($password, $hash) {
        return password_verify($password, $hash);
    }

}