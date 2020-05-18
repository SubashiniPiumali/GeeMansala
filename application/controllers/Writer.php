<?php

	/**
	 * 
	 */
	class Writer extends CI_Controller{
		
    //-----------------------------------dashboard=============================

        static function index(){
            // check login

			if(!$this->session->userdata('logged_in')){
				redirect('login');
            } //----
            
            $data['title'] = 'Writer-Index';

			$data['posts'] = $this->Post_model->viewuserposts();
			//print_r($data['posts']);

            $this->load->view('includes/header');
            $this->load->view('includes/messages');
			$this->load->view('writer/index', $data);
            $this->load->view('includes/footer');
            
        }

 //======================View one post=========================
 public function view($post_id = NULL){
    $data['post'] = $this->Post_model->viewuserposts($post_id);
    $data['review'] = $this->Review_model->getreview($post_id);


    if(empty($data['post'])) {
        show_404();
    }
    $data['title'] = $data['post']['title'];
        $this->load->view('includes/header');
        $this->load->view('includes/messages');
        $this->load->view('writer/view', $data);
        $this->load->view('includes/footer');
}

//======================edit profile view===================
    public function editprofile(){

        // check login

		if (!$this->session->userdata('logged_in')) {
			redirect('login');
        } //----
        
        $usersdata = $this->User_model->editprofile();
        $data['title'] = 'Writer-Index';
        $data['userdata'] = $usersdata;
        
        $this->load->view('includes/header');
        $this->load->view('includes/messages');
        $this->load->view('writer/editprofile', $data);
        $this->load->view('includes/footer');
    }


    }//end of classs