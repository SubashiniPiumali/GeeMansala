<?php

class Admin extends CI_Controller{

	public function index(){

        if (!$this->session->userdata('logged_in')) {
			redirect('login');
		} 


		$data['title'] = 'Admin';

		$data['users'] = $this->User_model->getusers();

		$this->load->view('includes/header');
		$this->load->view('includes/messages');
		$this->load->view('admin/index', $data);
		$this->load->view('includes/footer');
	}


	public function removeuser($user_id){

		
        if (!$this->session->userdata('logged_in')) {
			redirect('login');
		} 


		$this->User_model->removeuser($user_id);
		$post_id = 
		$this->Post_model->delete_post($user_id);
		redirect(base_url().'admin/index');

	}

	


	public function viewpost($user_id){

		
		if (!$this->session->userdata('logged_in')) {
			redirect('login');
		} 

		
		$data['posts'] = $this->User_model->viewposts($user_id);
		$data['userdata'] = $this->User_model->getusers($user_id);

		$this->load->view('includes/header');
		$this->load->view('includes/messages');
		$this->load->view('admin/view_users', $data);
		$this->load->view('includes/footer');
	}

	public function removepost($post_id){

        if (!$this->session->userdata('logged_in')) {
			redirect('login');
		} 


		$this->User_model->removepost($post_id);
		//redirect(base_url().'admin/view_users');
		redirect($_SERVER['HTTP_REFERER']);

	}

	
	public function create()
	{

        if (!$this->session->userdata('logged_in')) {
                redirect('login');
            } 

		$data['name'] = 'Create User';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['title'] = 'Admin';

			$data['users'] = $this->User_model->getusers();
			$this->load->view('includes/header');
			$this->load->view('includes/messages');

			$this->load->view('admin/index', $data);
			$this->load->view('includes/footer');
		} else {


            $this->User_model->create_user();
            $this->session->set_flashdata('success', 'User Added');
			redirect(base_url() . 'admin/index');
		}
	
		}
	}





