<?php
class Categoria extends CI_Controller {
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		
	}
	
	public function  index(){
		$m_product_category_id = $this->uri->segment(3, 0);
		
		$this->load->view('producto/productos_filtro');
	}
	
	
	
	public function showCategory(){
            $m_product_category_id = $this->uri->segment(3, 0);
            $m_product_category_parent_id = $this->uri->segment(4, 0);

            $this->load->helper('url');
            $dbconnect = $this->load->database();

            $this->load->model('M_Product_model');
            $this->load->model('Menu_model');
            $this->load->model('M_Product_model');

            $this->load->library('session');
            $facebook = $this->session->userdata('facebook');

            $data['fb_id'] = "";

            if(isset($facebook['id'])){
              $data['fb_id'] = $facebook['id'];
            }

            $data['controller'] = $this;

            $data['header'] = $this->load->view('template/header',null,TRUE);
            $data['footer'] = $this->load->view('template/footer',null,TRUE);

            $data['js'] = $this->load->view('template/javascript_detail',null,TRUE);

            $data['m_product_category_id'] = 999999;

            $data['menu_principal'] = $this->Menu_model->get_Menu_Principal();

            $data['nombreCategoria'] = "";

            if($m_product_category_parent_id>0){
                  
                  $data['nombreCategoria'] = $this->M_Product_model->get_NombreCategoria($m_product_category_id);
                  $data['getCategorias'] = $this->M_Product_model->getProducts($m_product_category_id,"",false);
                  $data['view_getCategorias'][] = $this->load->view('category/list_category',$data,TRUE);
            }else{
                  $data['subcategorias'] = $this->M_Product_model->get_Subcategorias($m_product_category_id);
                  
                  foreach($data['subcategorias'] as $obj){
                        $data['nombreCategoria'] = $this->M_Product_model->get_NombreCategoria($obj->m_product_category_id);
                        $data['getCategorias'] = $this->M_Product_model->getProducts($obj->m_product_category_id,"",false);
                        $data['view_getCategorias'][] = $this->load->view('category/list_category',$data,TRUE);
                  }
            }

            $this->load->view('category/detail_category',$data);

      }
}