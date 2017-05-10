<?php
class Producto extends CI_Controller{
	public $config_paginate;
	private $limite_paginacion;
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		//$this->load->model("usuario_model");
		
		$this->load->model("menu_model");
		$this->load->model("producto_model");
		$this->config_paginate['base_url'] = site_url('/producto/listado');
		$this->config_paginate['first_url'] =  site_url('/producto');
	}
	
	public function  index(){
		$offset = 0;
		$data_view = $this->lista_producto("","",$offset);
		$this->load->view('producto/productos_filtro',$data_view);
	}
	
	public function listado(){
		$offset = $this->uri->segment(3);
		$data_view = $this->lista_producto("","",$offset);
		$this->load->view('producto/productos_filtro',$data_view);
	}
	
	public function categoria(){
		$offset =  $this->uri->segment(4, 0);
		$m_product_category_id = $this->uri->segment(3, 0);
		
		$this->config_paginate['uri_segment'] = 4;
		$this->config_paginate['base_url'] = site_url('/producto/categoria/'.$m_product_category_id);
		$this->config_paginate['first_url'] =  site_url('/producto/categoria/'.$m_product_category_id);
		
		$data_menu =  $this->menu_model->get_categorias_Menu();
		$data_categoria = $this->producto_model->get_categoria_by_id($m_product_category_id);
		
		$data_view = $this->lista_producto($m_product_category_id,"",$offset);
		
		$data_view['data_categoria'] = $data_categoria;
		$this->load->view('producto/productos_filtro',$data_view);
	}
	
	private function lista_producto($idcategoria,$key_busqueda, $offset){
	
		$data_menu =  $this->menu_model->get_categorias_Menu();
		
		$limit = 24;
		
		$total_rows = $this->producto_model->get_all_productos_cuenta_total($idcategoria,$key_busqueda)->total_rows;
		
		
		$data_productos = $this->producto_model->get_all_productos_filtro($idcategoria,$key_busqueda, $limit, $offset);
		$data_categoria = array();
			
		$data_view = array("data_menu"=>$data_menu,"data_productos"=>$data_productos,"data_categoria"=>$data_categoria,
				"paginate_link"=>$this->set_paginacion($limit,$total_rows)
		);
		
		return $data_view;
		
	}
	
	
	
	private function set_paginacion($limit, $total_rows){
		$this->config_paginate['total_rows'] =$total_rows;
		$this->config_paginate['per_page'] = $limit;
		
		
		$this->config_paginate['first_tag_open'] = '<div>';
		$this->config_paginate['first_tag_close'] = '</div>';
		
		$this->config_paginate['cur_tag_open'] = '<li class="active"><a href="javascript:;">';
		$this->config_paginate['cur_tag_close'] = '</a></li>';
		$this->config_paginate['num_tag_open'] = '<li>';
		$this->config_paginate['num_tag_close'] = '</li>';
		
		$this->config_paginate['next_tag_open'] = '<li>';
		$this->config_paginate['next_tag_close'] = '</li>';
		$this->config_paginate['next_link'] = '<span aria-hidden="true"><span class="sr-only">Next</span></span>';
		
		$this->config_paginate['prev_tag_open'] = '<li>';
		$this->config_paginate['prev_tag_close'] = '</li>';
		$this->config_paginate['prev_link'] = '&lt;';
		
		
		$this->config_paginate['first_tag_open'] = '<li>';
		$this->config_paginate['first_tag_close'] = '</li>';
		$this->config_paginate['last_tag_open'] = '<li>';
		$this->config_paginate['last_tag_close'] = '</li>';
		
		$this->pagination->initialize($this->config_paginate);
		return $this->pagination->create_links();
		
	}
	public function detalle2(){
		
		$this->load->view('producto/detalle_item');
	}
	
	public function buscar(){
		$offset =  $this->uri->segment(5, 0);;
		$id_categoria =  $this->uri->segment(3,"");
		$text_busqueda =  $this->uri->segment(4, "");
		$text_decode = str_replace("-", " ", $text_busqueda);
		$key_busqueda = "%".str_replace("-", "%,%", $text_busqueda)."%";
		
		$this->config_paginate['base_url'] = site_url('/producto/buscar/'.$id_categoria.'/'.$text_busqueda);
		$this->config_paginate['uri_segment'] = 5;
		$this->config_paginate['first_url'] =  site_url('/producto/buscar/'.$id_categoria.'/'.$text_busqueda);
		
		$data_menu =  $this->menu_model->get_categorias_Menu();
		$data_categoria = $this->producto_model->get_categoria_by_id($id_categoria);
		
		$data_view = $this->lista_producto($id_categoria, $key_busqueda, $offset);
		$data_view['data_categoria'] = $data_categoria;
		$data_view['key_busqueda'] = $text_decode;
		
		$this->load->view('producto/productos_filtro',$data_view);
	}
	
	public function detalle(){
		
		
		$product_id = $this->uri->segment(3, 0);
		
		/**
		TODO : Recuperando categorias
		*/
		
		$category_id = $this->producto_model->get_CategoriaProducto($product_id)->m_product_category_id;
		
		
		
		/*$categoria = $this->producto_model->get_CategoriaHijo($category_id);
		
		
		
		$contador = 0;
		
		$myArray[$contador] = "<a href='".site_url('Category/showCategory')."/$categoria->m_product_category_id/$categoria->m_product_category_parent_id' title='Return to Home'>".$categoria->name."</a>";
		
		$contador++;
		
		$m_product_category_parent_id = $categoria->m_product_category_parent_id;
		$m_product_category_id = $categoria->m_product_category_id;
		
		
		while(true){
		
			if(isset($m_product_category_parent_id)){
		
				$cat_padre = $this->producto_model->get_CategoriaPadre($categoria->m_product_category_parent_id);
		
				$m_product_category_parent_id = $cat_padre->m_product_category_parent_id;
				$m_product_category_id = $cat_padre->m_product_category_id;
					
				$myArray[$contador] = "<a href='".site_url('Category/showCategory')."/$cat_padre->m_product_category_id/$m_product_category_parent_id' title='Return to Home'>".$cat_padre->name."</a>";
				//$myArray[$contador] = "<a href='".site_url('Category/showCategory')."/$cat_padre->m_product_category_id/".$cat_padre->m_product_category_parent_id."' title='Ir'>".$cat_padre->name."</a>";
		
				$contador++;
		
			}else{
				break;
			}
		
		}
		KRSORT($myArray);
		*/
		
		//obtiene categoria
		
		//$data['data_categoria'] = $this->producto_model->get_categoria_by_id($category_id);
		
		/**
		TODO : FIN
		*/
		
		/**
		 PRODUCTOS DE LA MISMA CATEGORIA
		 */
		//$category_id = $this->producto_model->get_CategoriaProducto($product_id)->m_product_category_id;
		
		//$data['productosXCategoria'] = $this->producto_model->getProducts($category_id,"",true);
		/**
		 FIN
		 */
		
		
	
		
	//	$data['producto'] = $this->producto_model->getProduct($product_id);
		
		
		//$data['categoria_ref'] = $myArray;
		//$data['m_product_category_id'] = $m_product_category_id;
		//$data['m_product_category_id'] = 999999;
		
		//$data['menu_principal'] = $this->menu_model->get_Menu_Principal();
		
		// print_r($data['categoria_ref']);
		
		$categoria_hijo = $this->producto_model->get_CategoriaHijo($category_id);
		$data_menu =  $this->menu_model->get_categorias_Menu();
		//$this->producto_model->get_categoria_by_id($category_id);
		
		if(empty($categoria_hijo->m_product_category_parent_id)){
			$data_categoria = $categoria_hijo; 
		}else{
			
			$data_categoria = $this->producto_model->get_categoria_by_id($categoria_hijo->m_product_category_parent_id);
		}
		
		$data_view = array('producto'=>$this->producto_model->getProduct($product_id),
				'productosXCategoria'=>$this->producto_model->getProducts($category_id,"",true),
				'data_categoria'=> $data_categoria,
				'data_menu'=>$data_menu
		);
		
		$this->load->view('producto/detalle_item',$data_view);
	}
}