<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_potensi extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function store($data) {
		unset($data['image']);
		$this->db->insert('potensi', $data);
	}

	function get() {
		return $this->db->get('potensi')->result_array();
	}

	function find($id) {
		$this->db->where('id', $id);
		return $this->db->get('potensi')->row_array();
	}


}
