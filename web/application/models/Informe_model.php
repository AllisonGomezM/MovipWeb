<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Informe_model extends CI_Model {

public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

public function get(){
    $query=$this->db->get('th_novedades');
    $resul=$query->result();
    return $resul;
}
}