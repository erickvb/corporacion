<?php ob_start();	
defined('BASEPATH') OR exit('No direct script access allowed');
class Setting extends CI_Controller {
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		//$this->load->model("usuario_model");
	}
	
	function alterTable(){
	    $this->load->dbforge();
	    $seting = $this->load->model('csetting_model');
	    $this->csetting_model->modificarColumna();
	}
	
}