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
            'options' => array('money' => $producto->moneda, 'imagen' =>base_url().'public/imagenes/'. $producto->url_image)
            
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
        $id_cliente = $this->cliente_model->add("1000004",$nombres." ".$apellidos,$email,$empresa,$nroTelefono);
        
        $lista_cart = array();
        if($id_cliente > 0){
           $id_pedido =  $this->producto_model->generaPedidoId($id_cliente);
           
           $data_prod = array();
           $lista_items = $this->cart->contents();
           $contador = 0;
           
           foreach ($this->cart->contents() as $items){
               $lista_cart [] = $items;
               $data_prod  = array(
                   'id_orden_pedido'=>$id_pedido,
                   'm_product_id'=>$items['id'],
                   'qty'=>$items['qty'],
                   'pricelimit'=>$items['price'],
                   'pricestd'=>$items['price'],
                   'pro_name'=>$items['name'],
                   'cdt_puntos'=>0,
                   'url_image'=>$items['options']['imagen'],
                   'cursymbol'=>'S/',
                   'c_bpartner_id'=>'1010656',
                   'prov_nombre'=>'',
                   'prov_ruc'=>'',
                   'prov_dire'=>'',
                   'cdt_referidonombre'=>'',
                   'cdt_referidocorreo'=>'',
                   'cdt_referidodni'=>''
                   
               );
               $rs1= $this->producto_model->agregaProducto($data_prod, $id_cliente);
               if($rs1>0){
                   
                   $contador++;
               }else{
                   //no se pudo registrar los pedidos
               }
           }
           
           if($contador>0){
               $this->producto_model->processItemCart($id_pedido);
           }
        }else{
            /*NO SE PUDO REGISTRAR AL USUARIO*/
            echo "no se registro al usuario: ";
        }
        if($contador>0){
            $data_view = array( "lista_cart"=>$lista_cart,'info'=>array(
                'id_pedido'=>$id_pedido,
                'nombres'=> $nombres." ".$apellidos,
                'telefono'=>$nroTelefono,
                'email'=>$email
            )
                
            );
          $html =   $this->load->view('pedido/html_pedido', $data_view,true);
          $this->sendEmail($html,$email);
          redirect('/carrito/exito');
        }else{
            redirect('/carrito/checkout');
        }
        
    }
    public function exito(){
        $this->load->model("menu_model");
        $data_menu =  $this->menu_model->get_categorias_Menu();
        
        $data_view = array("data_menu"=>$data_menu);
        $this->load->view('pedido/exito', $data_view);
        
    } 
    
    private function sendEmail($html,$email){
        $this->load->library('email');
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        
        $this->email->from("info@corporacionderepuestos.com","info");
        //$this->email->to($this->config->item('info_email'));
        
        $this->email->to("ventas@corporacionderepuestos.com");
        /*if(strlen($copiaEmail)> 0){
            $cc = $email.",".str_replace(";",",",$copiaEmail);
            
            $this->email->cc($cc);
            
        }else{
            */
            $this->email->cc($email);
       // }
        
        $this->email->subject("Cotizacion Pedido  web");
        $this->email->message($html);
        
        $this->email->send();
        //echo $this->email->print_debugger();
        //$msg = 'Gracias '.$nombres.'. <br>Se envio correctamente su solicitud de cotizacion,<br> en breves estaremos comunicandonos con Usted';
    }
    
}