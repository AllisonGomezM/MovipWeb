<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
public function __construct(){
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('usuario_model');
        $this->load->model('informe_model');

    }
	public function index()
	{
        $this->load->view('paginaprincipal/head.php');
        $this->load->view('paginaprincipal/index.php');
        $this->load->view('paginaprincipal/footer.php'); 
    }
    public function in(){
        $user=$this->input->post("correo");
		$pass=$this->input->post("password");
        $login=$this->usuario_model->login($user,$pass);
        var_dump($user,$pass);
		if($login){
			redirect(site_url('login/informe'));
		}else{
			
			redirect(site_url('login'));
		}
    }
    public function olvido()
	{
        $this->load->view('paginaprincipal/head.php');
        $this->load->view('paginalogin/olvido.php');
        $this->load->view('paginaprincipal/footer.php'); 
    }
    public function token(){
        $correo = $this->input->post("correo");
        $olvido=$this->usuario_model->olvido($correo);
        var_dump($olvido);
		
    }
    
    public function informe()
	{
        $this->load->view('paginaprincipal/head.php');
        $this->load->view('paginainforme/index.php');
        $this->load->view('paginaprincipal/footer.php'); 
    }

    // traer datos
    public function dataNovedades(){
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
        $this->db->select("th_novedades.id_novedad,
        th_novedades.id_contrato,
        CONCAT (empleado.nombre_empleado,' ',empleado.apellido_empleado) AS nombre,
        th_novedades.descripcion,th_novedades.fecha_reporte, 
        th_tiponovedad.nombre_novedad as tipo_novedad   
        ")              ->from("th_novedades")
                        ->join("empleado","empleado.id_empleado=th_novedades.id_empleado_reporta")
                        ->join("th_tiponovedad", "th_tiponovedad.id_tipoNovedad=th_novedades.tipo_novedad")
                        ;
    $query=$this->db->get();
  
        $data = [];
  
        foreach($query->result() as $r) {
             $data[] = array(
				$r->id_novedad,
                $r->id_contrato,
                $r->tipo_novedad,
                $r->nombre,
                $r->descripcion,
                $r->fecha_reporte,
               
             );
        }
  
  
        $result = array(
                 "draw" => $draw,
                   "recordsTotal" => $query->num_rows(),
                   "recordsFiltered" => $query->num_rows(),
                   "data" => $data
              );
  
  
        echo json_encode($result);
    }


 // traer datos
 public function dataPersonal(){
    $draw = intval($this->input->get("draw"));
    $start = intval($this->input->get("start"));
    $length = intval($this->input->get("length"));
    $this->db->select("empleado.id_empleado,
    CONCAT (empleado.nombre_empleado,' ',empleado.apellido_empleado) AS nombre,
    estados.nombre_estado as nombre_estado
    ")              ->from("empleado")
                    ->join("estados", "estados.id_estados=empleado.id_estado")
                    ;
$query=$this->db->get();

    $data = [];

    foreach($query->result() as $r) {
         $data[] = array(
            $r->id_empleado,
            $r->nombre,
            $r->nombre_estado,
          
         );
    }


    $result = array(
             "draw" => $draw,
               "recordsTotal" => $query->num_rows(),
               "recordsFiltered" => $query->num_rows(),
               "data" => $data
          );


    echo json_encode($result);
}

    // traer datos
    public function dataConvocatoria(){
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
        $this->db->select("aspirante.id_aspirante,
        aspirante.cc_aspirante,
        CONCAT (aspirante.nombre_aspirante,' ',aspirante.apellido_aspirante) AS nombre,
        aspirante.direccion_aspirante,
        aspirante.telefono_aspirante 
        ")              ->from("aspirante")
                        ;
    $query=$this->db->get();
  
        $data = [];
  
        foreach($query->result() as $r) {
             $data[] = array(
				$r->id_aspirante,
                $r->cc_aspirante,
                $r->nombre,
                $r->direccion_aspirante,
                $r->telefono_aspirante,
               
             );
        }
  
  
        $result = array(
                 "draw" => $draw,
                   "recordsTotal" => $query->num_rows(),
                   "recordsFiltered" => $query->num_rows(),
                   "data" => $data
              );
  
  
        echo json_encode($result);
    }

}