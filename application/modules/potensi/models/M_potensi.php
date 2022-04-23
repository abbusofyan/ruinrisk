<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_potensi extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function add($data) {
		unset($data['image']);
		$this->db->insert('potensi', $data);
	}


}
