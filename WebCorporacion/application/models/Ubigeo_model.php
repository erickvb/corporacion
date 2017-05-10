<?php
class Ubigeo_model extends CI_Model {
	
	private $id;
	private $nombre;
	private $abreviatura;
	private $estado;
	private $idPais;
	private $idRegion;
	private $idCiudad;
	private $idDistrito;
	
	
	public function listarPaises(){
		$this->db->where('estado >', 0);
		$query = $this->db->get('pais');
		return  $query;
	}
	public function listarRegiones($idPais){
		//
		$this->db->where('estado >', 0);
		$this->db->where('id_pais', $this->db->escape_str($idPais));
		$query = $this->db->get('region');
		$str = $this->db->last_query();
		 
		log_message('info', $str);
		return  $query;
		
	}
	
	public function listarCiudades($idRegion){
		$this->db->where('estado >', 0);
		$this->db->where('id_region', $this->db->escape_str($idRegion));
		$query = $this->db->get('ciudad');
		return  $query;
	}
	public function listarDistritos($idCiudad){
		$this->db->where('estado >', 0);
		$this->db->where('id_ciudad', $this->db->escape_str($idCiudad));
		$query = $this->db->get('distrito');
		return  $query;
	}

}