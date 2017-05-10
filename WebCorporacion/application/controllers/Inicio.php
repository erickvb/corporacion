<?php ob_start();	
defined('BASEPATH') OR exit('No direct script access allowed');
class Inicio extends CI_Controller {
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		//$this->load->model("usuario_model");
	}
	
	
	public function index()
	{  $this->load->model("menu_model");
	   $this->load->model("producto_model");
		
	    $data_menu =  $this->menu_model->get_categorias_Menu();
	   
	    $data_productos = $this->producto_model->get_ultimas_ofertas();
	    
	    $data_slider = $this->menu_model->get_Slides();
	    
	    $data_view = array("data_menu"=>$data_menu,"data_productos"=>$data_productos,"data_slider"=>$data_slider);
	     
		//$curruser = $this->session->userdata('usuario');
		
		//if(($this->session->has_userdata('usuario'))){
		
			$this->load->view('home',$data_view);
		//}else{
			//$this->load->view('offline');
		//}
		
		//
//		$this->load->view('offline');
		
// 		$this->load->view('home');
	}
	
	
}