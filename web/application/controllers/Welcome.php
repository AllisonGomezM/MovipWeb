<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('paginaprincipal/head.php');
		$this->load->view('paginaprincipal/index.php');
		$this->load->view('paginaprincipal/footer.php');
	}
	public function login()
	{
		$this->load->view('paginaprincipal/head.php');
		$this->load->view('paginalogin/index.php');
		$this->load->view('paginaprincipal/footer.php');
	}	
	public function informe()
	{
		$this->load->view('paginaprincipal/head.php');
		$this->load->view('paginainforme/informe.php');
		$this->load->view('paginaprincipal/footer.php');
    }	
}
