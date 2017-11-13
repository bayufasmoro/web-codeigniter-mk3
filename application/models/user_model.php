<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class user_model extends CI_Model {

		// Global function
        public function __construct() {
            $this->load->database();
        }

        // Insert data to table user
        public function insert_user() {
            $hobbyArr = $this->input->post('hobby');
            
            $hobby = "";
            if (!empty($hobbyArr)) {
            	$hobby = implode(',',$hobbyArr);
        	}

        	$descForm = $this->input->post('description');
        	$desc = "";
        	if (!empty($descForm)) {
        		$desc = $descForm;
        	}
            
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
				'desc' => $desc
			);

			$this->db->insert('user', $data);
			return $data;
		}

		// Read data using username and password
		public function login($data) {

			$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
				return true;
			} else {
				return false;
			}
		}

		// Read data from database to show data in admin page
		public function read_user_information($username) {

			$condition = "username =" . "'" . $username . "'";
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
				return $query->result();
			} else {
				return false;
			}
		}

		public function read_user_data() {

			$this->db->select('*');
			$this->db->from('user');
			$query = $this->db->get();

			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}	
		}
	}
?>