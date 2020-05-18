<?php
	class Review_model extends CI_Model
	{
        public function __construct()
		{
			$this->load->database();
        }


        public function getreview($post_id){
            //$query = $this->db->get_where('reviews',array('post_id' => $post_id));

            $this->db->order_by('reviews.user_id', 'DESC');
					$this->db->join('user', 'user.user_id = reviews.user_id');
                    $query = $this->db->get_where('reviews',array('post_id' => $post_id));
                    
            return $query->result_array();
        }

        public function deletereviews($post_id){
            $this->db->where('post_id', $post_id);
			$this->db->delete('reviews');
			return true;
        }

        public function addreview(){
            $data = array(
                'user_id' => $this->session->userdata('user_id'),
				'post_id' => $this->input->post('post_id'),
                'review' => $this->input->post('review')
			);

			return $this->db->insert('reviews',$data);
       
        }

        public function delete($review_id){
            $this->db->where('review_id',$review_id);
            $this->db->delete('reviews');
            //echo $review_id;
        }


        public function edit_review(){
            $data = array(
                'review' => $this->input->post('review')
			);

            //return $this->db->insert('reviews',$data);
            $this->db->where('review_id', $this->input->post('review_id')); //where query
			return $this->db->update('reviews',$data);
       
        }



        public function get_review($post_id){

            
            $query = $this->db->order_by('reviews.review_id' , 'ASC')->join('user', 'user.user_id=reviews.user_id')->get_where('reviews',array('post_id' => $post_id));
            return $query->result_array();
        }

        public function create_review($user_id){

        
            $data = array (
            'review'=>$this->input->post('reviewcontent'),
            
            'post_id' =>$this->input->post('postid'),
            'user_id' =>$user_id
            
            );
            return $this->db->insert('reviews',$data);
            
            }


            public function delete_post($review_id){

                $this->db->where('review_id',$review_id);
                $this->db->delete('reviews');
                return true;
               
               
                
               }


               public function update_post($review_id){
        
            $data = array (
            
           
            'review' =>$this->input->post('reviewupdate')
            
            );
            $this->db->where('review_id',$review_id);
            return $this->db->update('reviews',$data);
            
            
            }



    }