<?php defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }
	
	public function index() {
		$this->load->view('register_view');
	}

	public function create() {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('repassword', 'Retype Password', 'matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
                'error_message' => 'Kesalahan! Data yang masukkan tidak benar'
            );
            $this->load->view('register_view', $data);
		} else {
			$result = $this->user_model->insert_user();
            // Read data user in table
			if (isset($result)) {
				$session_data = array(
					'username' => $result['username'],
					'email' => $result['email'],
					'name' => $result['name']
				);

                // Add user data in session
				$this->session->set_userdata('logged_in', $session_data);
				redirect(site_url("home"));
			} else {
				$data = array(
					'error_message' => 'Kesalahan! Data tidak berhasil dimasukkan ke dalam database.'
				);

				$this->load->view('register_view', $data);
			}
		}
	}

}
?>