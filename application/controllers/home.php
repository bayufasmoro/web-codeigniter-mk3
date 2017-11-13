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

            $queryResult = $this->user_model->read_user_data();
            if ($queryResult == false) {
                $this->load->view('home_view', array('session' => $data));
            } else {
                $this->load->view('home_view', array('session' => $data, 'query' => $queryResult));
            }
        } else {
        	redirect(site_url("login"));
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

    public function mypdf(){
        
        $session = array(
            'username' => $this->session->userdata['logged_in']['username'],
            'name' => $this->session->userdata['logged_in']['name']
        );

        $queryResult = $this->user_model->read_user_data();
        $data = array(
            'session' => $session, 
            'query' => $queryResult
        );

        $this->load->library('pdf');
        $this->pdf->load_view('member_list', $data);
        
        $this->pdf->render();
        $this->pdf->stream("DaftarAnggota.pdf");

    }
}
?>