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
        $lista = $this->cart->contents();
        
        $this->load->view('producto/productos_filtro',$data_view);
        
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
            'money'         => $producto->moneda
            
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
}