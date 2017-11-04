<?php defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');

        $this->load->library('session');
    }
	
	public function index() {
        if($this->session->userdata("logged_in") == "") {
            $this->load->view('login_view');
        } else {
            redirect(site_url("home"));            
        }
	}

	public function login() {

        $this->load->helper('form');
        $this->load->library('form_validation');

        if($this->session->userdata("logged_in") == "") {
			
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            // Check form validation
            if($this->form_validation->run() == FALSE) {
                if(isset($this->session->userdata['logged_in'])){
                    redirect(site_url("home"));
                } else {
                    $this->load->view('login_view');
                }
            } else {
                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password')
                );
                $result = $this->user_model->login($data);
                // Check username and password in table
                if ($result == TRUE) {

                    $username = $this->input->post('username');
                    $result = $this->user_model->read_user_information($username);
                    // Read data user in table
                    if ($result != false) {
                        $session_data = array(
                            'username' => $result[0]->username,
                            'email' => $result[0]->email,
                            'name' => $result[0]->name
                        );

                        // Add user data in session
                        $this->session->set_userdata('logged_in', $session_data);
                        redirect(site_url("home"));
                    } else {
                        $data = array(
                        'error_message' => 'Something went wrong.'
                    );
                    $this->load->view('login_view', $data);    
                    }
                } else {
                    $data = array(
                        'error_message' => 'Invalid Username or Password'
                    );
                    $this->load->view('login_view', $data);
                }
            }
        } else {
            redirect(site_url("home"));
        }
    }
}
?>