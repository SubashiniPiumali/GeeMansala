<?php

	/**
	 * 
	 */
	class Users extends CI_Controller{
		
    //-----------------------------------register=============================
    
        public function register(){
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email','Email','required|callback_check_username_exists');
			$this->form_validation->set_rules('phoneNo','Phone No','required');
			$this->form_validation->set_rules('password','Password','required');
			//$this->form_validation->set_rules('password2','Confirm Password','matches[password]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('includes/header');
				$this->load->view('includes/messages');
				$this->load->view('users/register',$data);
				$this->load->view('includes/footer');
			}
			else{
				//die('Continue');
				//encrypting
				$enc_password = md5($this->input->post('password'));
				$this->User_model->register($enc_password);
				$this->session->set_flashdata('user_registered','You are registered. You can login');
				redirect('login');
			}
		}

//if u name existed
		function check_username_exists($email){
			$this->form_validation->set_message('check_username_exists','This username has taken');
			if($this->User_model->check_username_exists($email)){
				return true;
			}else{
				return false;
			}
		}



//------------------------------------------ login----===================================


		public function login(){
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');
			
			if($this->form_validation->run() === FALSE){
				$this->load->view('includes/header');
				$this->load->view('includes/messages');
				$this->load->view('users/login',$data);
				$this->load->view('includes/footer');
			}
			else{
			
				$email = $this->input->post('email');
				$password = md5($this->input->post('password'));

				$userdata = $this->User_model->login($email, $password);

				$user_id = $userdata['user_id'];
				$user_category = $userdata['category'];

				if($userdata){
					//--create session
					//die('SUCCESS');

					$user_data = array(
						'user_id' => $user_id,
						'category' => $user_category,
						'email' => $email,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					//--set msg
					$this->session->set_flashdata('success','You are now logged in');
					//require('Writer.php');
					//Writer::index();
					if($user_category == 'writer'){
						redirect('writer/index');
					}
					else if($user_category == 'admin'){
						redirect('admin/index');
					}
					

				}
				else{
					// set msg
					$this->session->set_flashdata('warning','Incorrect username or password');
					redirect('login');
				}
				
				
			}
		}

//============================--logout---------------------------
		public function logout(){
			// unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('email');

			$this->session->set_flashdata('success','You are now logged out');
			redirect('login');
		}


//================================edit profile====================
		public function edit(){
					// check login

		if (!$this->session->userdata('logged_in')) {
			redirect('login');
		} //----
		
				$this->User_model->update();
				$this->session->set_flashdata('success', 'Profile Updated');
				redirect($_SERVER['HTTP_REFERER']);
			
		}
//================================edit password====================
		public function changepassword(){

					// check login

		if (!$this->session->userdata('logged_in')) {
			redirect('login');
		} //----

			$newpassword = md5($this->input->post('newpassword'));
			$oldpassword = $this->input->post('oldpassword');
			$currentpassword = md5($this->input->post('currentpassword'));
			
			if($currentpassword == $oldpassword){
				$this->User_model->changepassword($newpassword);
				$this->session->set_flashdata('success', 'Password Changed');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else{
				//echo "Current Password is Incorrect";
				$this->session->set_flashdata('warning', 'Current Password is Incorrect');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}




	}//end of classs