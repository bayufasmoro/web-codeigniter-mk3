<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ktp extends CI_Controller {
 
 	public function __construct() {
        parent::__construct();
        $this->load->model('ktp_model');
        $this->load->helper('url_helper');

        $this->load->library('session');

        $this->load->helper('form');
    }

   	public function index() {
   		// Load session data
        if($this->session->userdata("logged_in") != null) {
        	$data = array(
				'username' => $this->session->userdata['logged_in']['username'],
				'name' => $this->session->userdata['logged_in']['name']
			);

            $queryResult = $this->ktp_model->get_all_ktp();
            $this->load->view('list_ktp_view', array('session' => $data, 'ktp' => $queryResult));
        } else {
        	redirect(site_url("login"));
        }
    }

    //Deleting ktp
    function remove($nik) {
        $ktp = $this->ktp_model->get_ktp($nik);

        if(isset($ktp['nik'])) {
            $this->ktp_model->delete_ktp($nik);
            redirect('ktp/index');
        } else {
            show_error('Ktp yang dihapus tidak ada.');
        }
    }

    //Adding a new ktp
    function add() {   

        if(isset($_POST) && count($_POST) > 0)      {   

            $new_image_name = time().str_replace(str_split(' ()\\/,:*?"<>|'), '', $_FILES['image_file']['name']);
            $config['upload_path']      = './uploads/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['file_name']        = $new_image_name;
            $config['max_size']         = 100;
            $config['max_width']        = 1024;
            $config['max_height']       = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userPhoto')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());
            }

            $params = array(
                'nik' => $this->input->post('nik'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'golongan_darah' => $this->input->post('golongan_darah'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'rt' => $this->input->post('rt'),
                'rw' => $this->input->post('rw'),
                'kelurahan' => $this->input->post('kelurahan'),
                'kecamatan' => $this->input->post('kecamatan'),
                'agama' => $this->input->post('agama'),
                'status_perkawinan' => $this->input->post('status_perkawinan'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                'berlaku_hingga' => $this->input->post('berlaku_hingga'),
                'alamat' => $this->input->post('alamat'),
                'photo' => $new_image_name,
            );
            
            $ktp_id = $this->ktp_model->add_ktp($params);
            redirect('ktp/index');
        } else {            

            if($this->session->userdata("logged_in") != null) {
                $session = array(
                    'username' => $this->session->userdata['logged_in']['username'],
                    'name' => $this->session->userdata['logged_in']['name']
                );

                $data['_view'] = 'ktp/add';
                $this->load->view('add_ktp_view', array('session' => $session, 'ktp' => $data));
            } else {
                redirect(site_url("login"));
            }
        }
    }

    //Editing a ktp
    function edit($nik) {   
        
        $data['ktp'] = $this->ktp_model->get_ktp($nik);
        
        if(isset($data['ktp']['nik'])) {
            if(isset($_POST) && count($_POST) > 0) {   
                $params = array(
                    'nik' => $this->input->post('nik'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'golongan_darah' => $this->input->post('golongan_darah'),
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'rt' => $this->input->post('rt'),
                    'rw' => $this->input->post('rw'),
                    'kelurahan' => $this->input->post('kelurahan'),
                    'kecamatan' => $this->input->post('kecamatan'),
                    'agama' => $this->input->post('agama'),
                    'status_perkawinan' => $this->input->post('status_perkawinan'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                    'berlaku_hingga' => $this->input->post('berlaku_hingga'),
                    'alamat' => $this->input->post('alamat'),
                );

                $this->ktp_model->update_ktp($nik,$params);            
                redirect('ktp/index');
            } else {
                
                if($this->session->userdata("logged_in") != null) {
                    $session = array(
                        'username' => $this->session->userdata['logged_in']['username'],
                        'name' => $this->session->userdata['logged_in']['name']
                    );

                    $data['_view'] = 'ktp/edit';
                    $this->load->view('edit_ktp_view', array('session' => $session, 'ktp' => $data['ktp']));
                } else {
                    redirect(site_url("login"));
                }
            }
        } else {
            show_error('Ktp yang Anda edit tidak ada.');
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