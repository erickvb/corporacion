<?php

class Menu_model extends CI_Model {
  
  
  function __construct() 
  {
    /* Call the Model constructor */
    parent::__construct();
  }

  function get_categorias_menu(){

  /*  $this->db->select('*');
    $this->db->from('m_product_category');
    //$this->db->where('is_menu_horizontal', 'Y' );
    $this->db->where('isactive', 'Y' );
    $this->db->where('m_product_category_parent_id', null );
    $this->db->where('ad_client_id', '1000004' );
    $this->db->order_by('name asc');
    $this->db->limit(10);
*/
    $this->db->select('*');
    $this->db->from('m_product_category');
    $this->db->where('is_menu_horizontal', 'Y' );
    $this->db->where('m_product_category_parent_id', null );
    $this->db->order_by('name asc');
    $this->db->where('ad_client_id', '1000004' );
    $query = $this->db->get();
    
    return $query->result();

  }


  function get_Menu_Principal(){

    $this->db->select('*');
    $this->db->from('m_product_category');
    $this->db->where('is_menu_horizontal', 'Y' );
    $this->db->where('m_product_category_parent_id', null );
    $this->db->order_by('name asc');
    $this->db->where('ad_client_id', '1000004' );


    $query = $this->db->get();
    
    return $query->result();

  }

  function get_SubMenu_Principal($id){

    $this->db->select('*');
    $this->db->from('m_product_category');
    $this->db->where('is_menu_horizontal', 'Y' );
    //$this->db->where('m_product_category_id', null );
    $this->db->where('m_product_category_parent_id', $id );
    $this->db->where('ad_client_id', '1000004' );

    $query = $this->db->get();
    
    return $query->result();

  }
  
  function get_Slides(){

    $this->db->select('*');
    $this->db->from('m_product_category');
    
    $this->db->where('is_mostrarbannerh', 'Y' );
    
    
    $this->db->where('m_product_category_parent_id', null );
    $this->db->where('ad_client_id', '1000004' );
    $this->db->order_by('m_product_category_id asc');
   

    $query = $this->db->get();
    
    //echo $this->db->last_query();
    
    return $query->result();

  }


  



}
