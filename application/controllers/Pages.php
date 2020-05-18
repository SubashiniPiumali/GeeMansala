

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Pages extends CI_Controller{
		public function view($page = 'home'){


			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$data['title'] = ucfirst($page);
			
			
			$data['posts']= $this->Post_model->get_posts();
			$data['latestposts']= $this->Post_model->get_latestposts();
			$post_id = $this->Post_model->get_latestpost_id();
			$data['reviews'] = $this->Review_model->getreview($post_id);

//----------------------new added
			$data['questions'] = $this->Question_model->getquestion();

			$this->load->view('includes/header');
			$this->load->view('includes/messages');
			$this->load->view('pages/'.$page,$data);
			
			$this->load->view('includes/footer');
		}



		public function viewonepost($post_id = NULL){
	

			$data['post']= $this->Post_model->get_posts($post_id);
			$data['review'] = $this->Review_model->get_review($post_id);
	
			
	
			$this->load->view('includes/header');
			$this->load->view('includes/messages');
			$this->load->view('pages/view',$data);
			
			$this->load->view('includes/footer');
	
	
	
		} 

		public function gethelp(){
			$data['questions'] = $this->Question_model->getquestion();
	
			
	
			$this->load->view('includes/header');
			$this->load->view('includes/messages');
			$this->load->view('pages/help',$data);
			
			$this->load->view('includes/footer');
		}

		
	}