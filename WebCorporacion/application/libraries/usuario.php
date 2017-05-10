<?php
class Usuario{
	public $usuario;
	public $clave;
	public $email;
	public $tipo;
	public $nombre;
	public $apellidos;
	public $nick;
	public $avatar;
	public $id_usuario;
	public $id_nacionalidad;
	public $id_pais;
	public $id_ciudad;
	public $id_provincia;
	public $id_distrito;
	public $sexo;
	public $telefono;

// 	public function setUsuario($user){
// 		$this->usuario = $user;
// 	}
// 	public function setClave($pass){
// 		$this->clave = $pass;
// 	}
// 	public function setEmail($email){
// 		$this->email = $email;
// 	}
// 	public function setTipo($tipo){
// 		$this->tipo = $tipo;
// 	}
	

	public function __set($name, $value)
	{
// 		if ($name === 'last_login')
// 		{
// 			$this->last_login = DateTime::createFromFormat('U', $value);
// 		}
	}
	
	public function __get($name)
	{
		if (isset($this->$name))
		{
			return $this->$name;
		}
	}
	
	

}