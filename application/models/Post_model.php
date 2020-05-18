<?php
	class Post_model extends CI_Model
	{
        public function __construct()
		{
			$this->load->database();
        }

        public function create_post($mp3){
			
			$data = array(
                'user_id' => $this->session->userdata('user_id'),
				'title' => $this->input->post('title'),
                'body' => $this->input->post('body'),
                'mp3' => $mp3,
				'category' => $this->input->post('category')
			);

			return $this->db->insert('posts',$data);

        }


        public function viewuserposts($post_id = FALSE){
            $user_id = $this->session->userdata('user_id');
            if($post_id === FALSE){
                $this->db->order_by('posts.post_id', 'DESC');
                //$this->db->join('categories', 'categories.id = posts.category_id');
                //$query = $this->db->get('posts');
                $query = $this->db->get_where('posts',array('user_id' => $user_id));
                return $query->result_array();
            }
            $query = $this->db->get_where('posts',array('post_id' => $post_id));
            
            return $query->row_array();
        }
        

        public function update_post($mp3){
            
            if($mp3==FALSE){
                $data = array(
                    'title' => $this->input->post('title'),
                    'body' => $this->input->post('body'),
                    'category' => $this->input->post('category')
                );
            }

            else{
                $data = array(
                    'title' => $this->input->post('title'),
                    'body' => $this->input->post('body'),
                    'mp3' => $mp3,
                    'category' => $this->input->post('category')
                );
            }

			$this->db->where('post_id', $this->input->post('post_id')); //where query
			return $this->db->update('posts',$data);

        }
        
        public function delete_post($post_id){
			$this->db->where('post_id', $post_id);
			$this->db->delete('posts');
			return true;

        }
        

//===================================suba================================


public function get_posts($post_id = FALSE)
	{

		if ($post_id === FALSE) {

			$this->db->order_by('post_id', 'DESC');
			$query = $this->db->get('posts');
			return $query->result_array();
		}

		$query = $this->db->get_where('posts', array('post_id' => $post_id));
		return $query->row_array();
	}


	


	public function get_latestposts()
	{
		$this->db->order_by('post_id', 'DESC')->limit(1);
		$query = $this->db->get('posts');
		return $query->row_array();
    }

    public function get_latestpost_id(){
        $this->db->order_by('post_id', 'DESC')->limit(1);
		$query = $this->db->get('posts');
		return $query->row(0)->post_id;
    }

    //=================================================end=============================




        
    }