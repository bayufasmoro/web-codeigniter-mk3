<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class ktp_model extends CI_Model {
    function __construct() {
        $this->load->database();
    }
    
    //Get ktp by nik
    function get_ktp($nik) {
        return $this->db->get_where('ktp',array('nik'=>$nik))->row_array();
    }
        
    //Get all ktp
    function get_all_ktp() {
        $this->db->order_by('nik', 'desc');
        return $this->db->get('ktp')->result_array();
    }
        
    /*
     * function to add new ktp
     */
    function add_ktp($params) {
        $this->db->insert('ktp',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update ktp
     */
    function update_ktp($nik,$params) {
        $this->db->where('nik',$nik);
        return $this->db->update('ktp',$params);
    }
    
    /*
     * function to delete ktp
     */
    function delete_ktp($nik) {
        return $this->db->delete('ktp',array('nik'=>$nik));
    }
}
