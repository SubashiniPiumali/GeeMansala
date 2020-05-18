<?php
	class Question_model extends CI_Model
	{
        public function __construct()
		{
			$this->load->database();
        }


        public function getquestion(){
            
            $this->db->order_by('id', 'DESC');
            //$query = $this->db->get('questions');
            $query = $this->db->get_where('questions',array('replied' => 'Yes'));
			return $query->result_array();
        }

        



    }