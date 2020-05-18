<?php

/**
 * 
 */
class Posts extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url', 'file'));
	}
	//======================Create post=========================
	public function create()
	{

		// check login

		if (!$this->session->userdata('logged_in')) {
			redirect('login');
		} //----


		$data['title'] = 'Create Post';

		//$data['categories'] = $this->Post_model->get_categories();


		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'Body', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('includes/header');
			$this->load->view('includes/messages');
			$this->load->view('writer/create_post', $data);
			$this->load->view('includes/footer');
		} else {
			$config['upload_path'] = './assets/files/audio';
			$config['allowed_types']        = 'mp3|wmv|mp4|jpg|txt';
			$config['max_size']             = 100000000000000000;
			//$config['max_width']            = 10000;
			//$config['max_height']           = 10000;

			$this->load->library('upload', $config);
			//$this->upload->do_upload($config);

			if (!$this->upload->do_upload('userfile')) {
				$errors = array('error' => $this->upload->display_errors());
				$mp3 = 'no mp3';
				$this->session->set_flashdata('warning', 'Your post has been published. !Audio file uploading failed');
			} else {
				$data = array('upload_data' => $this->upload->data());
				//$mp3 = $_FILES['userfile']['name'];
				$path_parts = pathinfo($_FILES['userfile']['name']);
				$mp3 = $path_parts['filename'];
				$this->session->set_flashdata('success', 'Your post has been published');
			}

			$this->Post_model->create_post($mp3);
			redirect(base_url() . 'writer/index');
		}
	}


	//========================View Edit post=============================

	public function edit($post_id)
	{

		// check login

		if (!$this->session->userdata('logged_in')) {
			redirect('login');
		} //----


		$data['post'] = $this->Post_model->viewuserposts($post_id);

		//$data['categories'] = $this->Post_model->get_categories();

		if (empty($data['post'])) {
			show_404();
		}
		$data['title'] = 'Edit Post';
		$this->load->view('includes/header');
		$this->load->view('includes/messages');
		$this->load->view('writer/edit', $data);
		$this->load->view('includes/footer');
	}

	//===========================Update=============================

	public function update()
	{

		// check login

		if (!$this->session->userdata('logged_in')) {
			redirect('login');
		} //----


		$config['upload_path'] = './assets/files/audio';
		$config['allowed_types']        = 'mp3|wmv|mp4|jpg|txt';
		$config['max_size']             = 100000000000000000;
		//$config['max_width']            = 10000;
		//$config['max_height']           = 10000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')) {
			$errors = array('error' => $this->upload->display_errors());
			$mp3 = FALSE;
			$this->session->set_flashdata('warning', 'Your post has been updated. !Audio file not uploaded');
		} else {
			$data = array('upload_data' => $this->upload->data());
			$path_parts = pathinfo($_FILES['userfile']['name']);
			$mp3 = $path_parts['filename'];
			$this->session->set_flashdata('success', 'Your post has been updated');
		}


		$this->Post_model->update_post($mp3);


		redirect(base_url() . "writer/index/" . $this->input->post('post_id'));
	}

	//======================delete post=============================

	public function delete($post_id)
	{

		// check login

		if (!$this->session->userdata('logged_in')) {
			redirect('login');
		} //----

		$this->Post_model->delete_post($post_id); // delete post function
		$this->Review_model->deletereviews($post_id); // delete reviws related to above post
		//unlink($file);
		$url = base_url() . 'assets/files/audio/a.jpg';
		unlink($url);
		$this->session->set_flashdata('success', 'Your post has been removed');
		redirect(base_url() . 'writer/index');
	}


	//=============================add review================

	public function addreview()
	{
			// check login

			if (!$this->session->userdata('logged_in')) {
				redirect('login');
			} //----

		$this->Review_model->addreview();
		redirect(base_url() . 'writer/index/' . $this->input->post('post_id'));
	}



} //--- end of class
