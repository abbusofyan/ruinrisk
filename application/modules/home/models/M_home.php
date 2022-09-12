<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function getLatestPotensiBencana($limit) {
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit);
        return $this->db->get('potensi')->result_array();
    }

    function getJmlPotensi() {
        return $this->db->get('potensi')->num_rows();
    }

}
