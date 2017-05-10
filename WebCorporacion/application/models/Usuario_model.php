<?php
class Usuario_model extends CI_Model {

	public $title;
	public $content;
	public $date;
	private $usuario;
	private $clave;
	private $email;
	private $tipo;
	
	public function setUsuario($user){
		$this->usuario = $user;
	}
	public function setClave($pass){
		$this->clave = $pass;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}

	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
	}

	public function get_last_ten_entries()
	{
		$query = $this->db->get('entries', 10);
		return $query->result();
	}

	public function insert_entry()
	{
		$this->title    = $_POST['title']; // please read the below note
		$this->content  = $_POST['content'];
		$this->date     = time();

		$this->db->insert('entries', $this);
	}

	public function update_entry()
	{
		$this->title    = $_POST['title'];
		$this->content  = $_POST['content'];
		$this->date     = time();

		$this->db->update('entries', $this, array('id' => $_POST['id']));
	}
	
	public function doLogin(){
		
		$this->db->where('cuenta', $this->usuario);
		$this->db->where('clave', $this->clave);
		$query = $this->db->get('usuario');
		return $query;
	}
	
	
	public function listar(){
	
		//$this->db->where('cuenta', $this->usuario);
		//$this->db->where('clave', $this->clave);
		$query = $this->db->get('usuario',100);
		return $query;
	}
	
	public function obtenerById($id){
		$this->db->where('id_usuario',$id);
		$query = $this->db->get('usuario',1);
		return $query;
	}
	
	
	public function registrar(){
		
		$data = array(
		   'email' => $this->db->escape_str($this->email) ,
		   'cuenta' => $this->db->escape_str($this->usuario) ,
		   'clave' => $this->db->escape_str($this->clave),
		   'tipo_usuario' =>$this->tipo
		);
		
		$rs = $this->db->insert('usuario', $data);
// 		echo "return:".$rs;
		return $rs;
		
	}
	
	public function actualizarInformacion($usuario){
	
		$data = array(
				'email' => $this->db->escape_str($this->email) ,
				'cuenta' => $this->db->escape_str($this->usuario) ,
				'clave' => $this->db->escape_str($this->clave),
				'tipo_usuario' =>$this->tipo
		);
		$this->db->where('id_usuario', $usuario->id_usuario);
		$rs =  $this->db->update('usuario', $usuario);
		
		//$rs = $this->db->insert('usuario', $data);
		// 		echo "return:".$rs;
		return $rs;
	
	}
	
}