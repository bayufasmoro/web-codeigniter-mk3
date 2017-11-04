<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class user_model extends CI_Model {

		// Global function
        public function __construct() {
            $this->load->database();
        }

        // Insert data to table user
        public function insert_user() {
            $hobbyArr = $this->input->post('hobby');
            $hobby = implode(',',$hobbyArr);
            
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'email' => $this->input->post('email'),
				'name' => $this->input->post('name'),
				'nim' => $this->input->post('nim'),
				'address' => $this->input->post('address'),
				'city' => $this->input->post('city'),
				'gender' => $this->input->post('gender'),
				'hobby' => $hobby,
				'desc' => $this->input->post('description')
			);

			$this->db->insert('user', $data);
			return $data;
		}
	}
?>