<?php ob_start();	
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		$this->load->model("usuario_model");
	}
	
	public function show(){
		$rs = $this->usuario_model->listar();
		$data = array("result"=>$rs);
		//$this->load->view("usuario/listado_user",$data);
		
	}
}
