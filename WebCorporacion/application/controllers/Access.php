<?php ob_start();	
defined('BASEPATH') OR exit('No direct script access allowed');
class Access extends CI_Controller {
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		//$this->load->model("usuario_model");
	}
	
	
	public function index()
	{   $curruser = $this->session->userdata('usuario');
	    echo $curruser;
	    exit();
		if(!empty($curruser)){
		   $this->load->view('home');
		}else{
		    $this->load->view('offline');
		}
	}
	
	
	
	public function login(){
		//echo "cuur user:".isset($this->session->userdata('usuario'));
		//print_r($this->session->has_userdata('usuario'));
		//exit();
		$data = array();
		$this->load->view("usuario/login",$data);
	}
	
	public function logout(){
		$this->session->unset_userdata('usuario');
	   redirect("/","refresh");	
		
	}
	
	
	public function register(){
		$data = array();
		$this->load->view("usuario/registro",$data);
	}
	
	public function doRegister(){
		$this->load->model("usuario_model");
		$email = $this->input->post("email");
		$usuario =  $this->input->post("username");
		$password =  $this->input->post("password");
	    
		$tipo = Tipo_usuario::CLIENTE;

		$objUser = new Usuario();
		$objUser->setUsuario($user);
		$objUser->setEmail($email);
		$objUser->setTipo($tipo);
		
		
		$this->usuario_model->setEmail($email);
		$this->usuario_model->setUsuario($usuario);
		$this->usuario_model->setClave(($password));
		$this->usuario_model->setTipo($tipo);
	   	
		$rs = $this->usuario_model->registrar();
		if($rs){
			$this->setUsuarioSession($objUser);
			redirect('/', 'refresh');
		}else{
			echo "Error al registrar";
		}
	
	}
	
	public function doLogin(){
		$this->load->model("usuario_model");
		$user = $this->input->post("username");
		$pass =  $this->input->post("password");
		//echo "pass:".crypt($pass);
		
		$this->usuario_model->setUsuario($user);
		$this->usuario_model->setClave(($pass));
		
		$rs = $this->usuario_model->doLogin();
		
	
		if($rs->num_rows()>0){
			//existe user
			$data = null;
			//$usuario = new Usuario();
			
			//$usuario = $rs->custom_result_object('Usuario');
			$usuario = $rs->custom_row_object(0, 'Usuario');
			//print_r($usuario);
			
			foreach ($rs->result() as $row){	 
			
				
// 				$data = array("nombre"=>$row->nombre,
// 						"apellidos"=>$row->apellidos,
// 						"nick"=>$row->nick,
// 						"avatar"=>$row->avatar,
// 						"id_usuario"=>$row->id_usuario
// 				);
				
				//$usuario->setEmail($email)
				
				//echo $row->nombre;
				//echo $row->apellidos;
				//echo $row->nick;
				//echo $row->avatar;
			}
				
			//$this->load->view("usuario/home",$data);
			if(empty($usuario->usuario)){
				$usuario->usuario = $usuario->email;
			}
			
			$this->setUsuarioSession($usuario);
			//echo "CURRENT USER:".$usuario->id_usuario;
			redirect('/', 'refresh');
		}else{
			//
			echo "No existe Usuario";
		}
	
	
	
	}
	
	private  function setUsuarioSession($usuario){
		$this->session->set_userdata('usuario',$usuario);
	}
	

}
