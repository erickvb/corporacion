<?php
class Carrito extends CI_Controller{
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        
        $this->load->library('cart');
        $this->load->model("producto_model");
    }   
    public function lista(){
        $this->load->model("menu_model");
        $data_menu =  $this->menu_model->get_categorias_Menu();
        
        $lista = $this->cart->contents();
        $lista_cart = array();
        foreach ($this->cart->contents() as $items){
            $lista_cart [] = $items;
        }
        
        $data_view = array("data_menu"=>$data_menu, "lista_cart"=>$lista_cart);
        $this->load->view('carrito/lista_carrito', $data_view);
        
    }
    public function  addItem(){
        $product_id = $this->uri->segment(3, 0);
        $cantidad = $this->uri->segment(4, 1);
        $producto = $this->producto_model->getProduct($product_id);
    
       
        $data = array(
            'id'      =>  $producto->m_product_id,
            'qty'     => $cantidad,
            'price'   =>  $producto->menor,
            'name'    =>  $producto->name,
            'options' => array('money' => $producto->moneda, 'imagen' => $producto->url_image)
            
        );
        $this->cart->insert($data);
        echo json_encode($data);
    }
    
    public  function  listarItems(){
      //  $lista = $this->cart->contents();
        $lista =  array();
        foreach ($this->cart->contents() as $items){
            $lista [] = $items;
        }
            
        echo json_encode($lista);
    }
    public function updateItem(){
        $data = array(
            'rowid' => 'b99ccdf16028f015540f341130b6d8ec',
            'qty'   => 3
        );
        
        $this->cart->update($data);
    }
    
    public function vaciar(){
        
        $this->cart->destroy();
    }
    
    public function eliminar(){
        $rowid = $this->uri->segment(3, 0);
        $page = $this->uri->segment(4, 0);
        
        $this->cart->remove($rowid);
        if($page==2){
            redirect('/carrito/checkout');
            
        }else{
            redirect('/carrito/lista');
        }
        
        
    }
    
    public function checkout(){
        $this->load->model("menu_model");
        $data_menu =  $this->menu_model->get_categorias_Menu();
        
        $lista = $this->cart->contents();
        $lista_cart = array();
        foreach ($this->cart->contents() as $items){
            $lista_cart [] = $items;
        }
        $data_view = array("data_menu"=>$data_menu, "lista_cart"=>$lista_cart);
        $this->load->view('carrito/checkout', $data_view);
        
    }
    
    public function registrarPedido(){
        $nombres = $this->input->post('nombres');
        $apellidos = $this->input->post('apellidos');
        $email = $this->input->post('email');
        $nroTelefono= $this->input->post('nroTelefono');
        $empresa= $this->input->post('empresa');
        $direccion1= $this->input->post('direccion1');
        $direccion2= $this->input->post('direccion2');
        $ciudad= $this->input->post('ciudad');
        $distrito= $this->input->post('distrito');
        
        $this->load->model("cliente_model");
        $rs = $this->cliente_model->add("1000004",$nombres." ".$apellidos,$email,$empresa,$nroTelefono);
        if($rs){
            
        }else{
            
        }
        
    }
}