<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getCoordinatesMasyarakatRentan() {
        $rules = [
          'lk_0_6_bln',
          'pr_0_6_bln',
          'lk_6_9_bln',
          'pr_6_9_bln',
          'lk_9_12_bln',
          'pr_9_12_bln',
          'lk_12_24_bln',
          'pr_12_24_bln',
          'lk_2_5_thn',
          'pr_2_5_thn',
          'lk_lansia',
          'pr_lansia',
          'dis_fisik',
          'dis_intelektual',
          'dis_mental',
          'dis_sensor'
        ];
        $this->db->select('gps, nama_kk');
        $i = 0;
        foreach ($rules as $rule) {
          if ($i > 0) {
            $this->db->or_where("$rule !=", 0);
          } else {
            $this->db->where("$rule !=", 0);
          }
          $i++;
        }
        // $this->db->limit(10); // for testing
        return $this->db->get('profil_keluarga')->result_array();
    }

}
