<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario_model extends CI_Model {
public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function login($user,$pass)
    {  
            $this->db->select('*')
                     ->from('usuarios')
                     ->where('correo_usuario',$user)
                     ->where('pass_usuario',$pass)
                     ->limit(1);
            $query = $this->db->get();
            $res =$query->row();
            if($query->num_rows()==1){
                return true;
            }
            else {
                return false;
            }
    }
    public function olvido($user)
    {  
            $this->db->select('*')
                     ->from('usuarios')
                     ->where('correo_usuario',$user);
            $query = $this->db->get();
            $res =$query->row();
            var_dump($res);
            if($query->num_rows()==1){
                return true;
            }
            else {
                return false;
            }
    }
}