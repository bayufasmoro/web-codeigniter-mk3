<?php defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
		$this->load->library('form_validation');
    }
	
	public function index() {
		$this->load->view('register_view');
	}

	public function create() {
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('repassword', 'Retype Password', 'matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
                'error_message' => 'Kesalahan! Data yang masukkan tidak benar'
            );
            $this->load->view('register_view', $data);
		} else {
			$result = $this->user_model->insert_user();
            $data = array(
				'success_message' => 'Sukses! Data telah berhasil ditambahkan.'
			);

			$this->load->view('register_view', $data);
		}
	}

}
?>