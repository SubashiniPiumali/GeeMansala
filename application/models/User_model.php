<?php

	/**
	 * 
	 */
	class User_model extends CI_Model{

		
	public function __construct()
	{
		$this->load->database();
	}


		public function register($enc_password){
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phoneNo'),
				'password' => $enc_password
					
			);

			return $this->db->insert('user',$data);
		}

		// log user in

		public function login($email,$password){
			//validate
			$this->db->where('email',$email);
			$this->db->where('password',$password);
			$result = $this->db->get('user');
			
			if($result->num_rows() == 1){
				return $result->row_array();
			}
			else{
				return false;
			}

		}

		// chck email exist

		public function check_username_exists($email){
			$query = $this->db->get_where('user',array('email' => $email));
			if(empty($query->row_array())){
				return true;
			}
			else{
				return false;
			}
		}


		public function editprofile(){
			$user_id = $this->session->userdata('user_id');
			$query = $this->db->get_where('user',array('user_id' => $user_id));
            
            return $query->row_array();
		}

		public function update(){
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone')			
			);
			$this->db->where('user_id', $this->input->post('user_id')); //where query
			return $this->db->update('user',$data);

		}

		public function changepassword($password){
			$data = array(
				'password' => $password					
			);
			$this->db->where('user_id', $this->input->post('user_id')); //where query
			return $this->db->update('user',$data);
		}



//=====================================udara=================//

public function getusers($user_id=null){
	if($user_id==null){
		//$query = $this->db->get('user');
		$query = $this->db->get_where('user',array('category' => 'writer'));
		return $query->result_array();
	}
	else{
		$query = $this->db->get_where('user',array('user_id' => $user_id));
	
		return $query->row_array();
	}
}

public function removeuser($user_id){
	$this->db->where('user_id', $user_id);
	$this->db->delete('user');
	return true;

}




public function viewposts($user_id){
	$query = $this->db->get_where('posts',array('user_id' => $user_id));
	return $query->result_array();
	
}

public function removepost($post_id){
	$this->db->where('post_id', $post_id);
	$this->db->delete('posts');
	return true;

}



public function create_user(){
	
	$data = array(
	
		'name' => $this->input->post('name'),
		'email' => $this->input->post('email'),
		'phone' => $this->input->post('phone'),
		'password' => $this->input->post('password'),
	);

	return $this->db->insert('user',$data);

}





		
	}