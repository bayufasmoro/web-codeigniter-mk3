<?php defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
 
 	public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');

        $this->load->library('session');
    }

   	public function index() {
   		// load session data
        if($this->session->userdata("logged_in") != null) {
        	$data = array(
				'username' => $this->session->userdata['logged_in']['username'],
				'name' => $this->session->userdata['logged_in']['name']
			);
        } else {
        	redirect(site_url("login"));
        }

        $queryResult = $this->user_model->read_user_data();
        if ($queryResult == false) {
            $this->load->view('home_view', array('session' => $data));
        } else {
            $this->load->view('home_view', array('session' => $data, 'query' => $queryResult));
        }
    }

    public function logout() {
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        redirect(base_url());
    }
}
?>