<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Paginas extends CI_Controller {
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
	
	}
	
	public function  nosotros(){
		$this->load->model("menu_model");
		$data_menu =  $this->menu_model->get_categorias_Menu();
		$data_view = array("data_menu"=>$data_menu);
		$this->load->view("nosotros",$data_view);
	}
	
	public function contactenos(){
		$this->load->view("contactenos");
	}
}