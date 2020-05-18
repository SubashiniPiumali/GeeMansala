<?php

/**
 * 
 */
class Review extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url', 'file'));
	}

	//=============================remove review================

	public function remove_review($review_id)
	{


		// check login

		if (!$this->session->userdata('logged_in')) {
			redirect('login');
		} //----

		$this->Review_model->delete($review_id);
		//redirect(base_url() . 'writer/index/' . $this->input->post('post_id'));
		$this->session->set_flashdata('success', 'Review deleted');
		redirect($_SERVER['HTTP_REFERER']);
	}
	//=============================edit review================
	public function edit_review()
	{

		// check login

		if (!$this->session->userdata('logged_in')) {
			redirect('login');
		} //----

		if ($this->input->post('user_id') != $this->session->userdata('user_id')) {
			$this->session->set_flashdata('danger', 'You are not allowed to change others reviews');
			redirect($_SERVER['HTTP_REFERER']);
		} //----
		else {
			$this->Review_model->edit_review();

			$this->session->set_flashdata('success', 'Review Edited');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}



	//*******************************subashini******************************** */

	public function create()
	{
		// check login

		if (!$this->session->userdata('logged_in')) {
			redirect('login');
		} //----

		$this->form_validation->set_rules('reviewcontent', 'Review Body', 'required');
		if ($this->form_validation->run() === FALSE) {

			$postid = $this->input->post('postid');
			//$this->load->view('includes/header');
			//$this->load->view('includes/messages');
			redirect(base_url() . 'pages/' . $postid);
			//$this->load->view('includes/footer');
		} else {

			$user_id = $this->session->userdata('user_id');
			$this->Review_model->create_review($user_id);
			$postid = $this->input->post('postid');

			redirect(base_url() . 'pages/' . $postid);

			//$this->load->view('posts/success');
		}
	}

	public function deletereview($review_id, $postid)
	{
		// check login

		if (!$this->session->userdata('logged_in')) {
			redirect('login');
		} //----

		$this->Review_model->delete_post($review_id);
		redirect(base_url() . 'pages/' . $postid);
	}

	public function updatereview($post_id, $review_id)
	{
		// check login

		if (!$this->session->userdata('logged_in')) {
			redirect('login');
		} //----

		$this->form_validation->set_rules('reviewupdate', 'Review Body', 'required');
		$this->Review_model->update_post($review_id);
		redirect(base_url() . 'pages/' . $post_id);
	
	}
}
