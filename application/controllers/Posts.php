<?php
    class Posts extends CI_Controller{
        public function __construct(){   
            parent::__construct();
            $this->load->model('Post_model', 'post_model');
        }

        public function index(){
            $data['title'] = ucfirst('Latest Posts');
            $data['posts'] = $this->post_model->get_posts();

            $this->load->view('templates/header');
            $this->load->view('posts/index',$data);
            $this->load->view('templates/footer');
        }

        public function view($slug = NULL){
            $data['post'] = $this->post_model->get_posts($slug);

            if(empty($data['post'])){
                show_404();
            }

            $data['title'] = $data['post']['title'];
            
            $this->load->view('templates/header');
            $this->load->view('posts/view',$data);
            $this->load->view('templates/footer');
        }

        public function create(){
            $data['title'] = 'Create Post';

            $data['categories'] = $this->post_model->get_categories();

            $this->form_validation->set_rules('title','Title','required');
            $this->form_validation->set_rules('body','Body','required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('posts/create',$data);
                $this->load->view('templates/footer');
            }else{
                //Upload Image
                $config['upload_path'] = './assets/images/posts/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                // $config['max_size'] = '2048';
                // $config['max_width'] = '1200';
                // $config['max_height'] = '1200';

                $this->load->library('upload',$config);

                if(!$this->upload->do_upload('post_image')){ //If image not uploaded
                    $errors = array('error' => $this->upload->display_errors());
                    foreach($errors as $error){
                        echo $errors;
                    }
                    $post_image = 'noimage.png';
                }else{ //Image uploaded successfully
                    $data = array('upload_data' => $this->upload->data());
					$post_image = $_FILES['post_image']['name'];
                }
                
                $this->post_model->create_post($post_image);
                redirect('posts');
            }
        }

        public function delete($id){
            $this->post_model->delete_post($id);
            redirect('posts');
        }

        public function edit($slug){
            $data['post'] = $this->post_model->get_posts($slug);
            $data['categories'] = $this->post_model->get_categories();

            if(empty($data['post'])){
                show_404();
            }

            $data['title'] = 'Edit Post';
            
            $this->load->view('templates/header');
            $this->load->view('posts/edit',$data);
            $this->load->view('templates/footer');

            /* $this->form_validation->set_rules('title','Title','required');
            $this->form_validation->set_rules('body','Body','required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('posts/create',$data);
                $this->load->view('templates/footer');
            }else{
                $this->post_model->create_post();
                redirect('posts');
                $this->load->view('posts/success');
            } */
        }

        public function update(){
            $this->post_model->update_post();
            redirect('posts');
        }
    }