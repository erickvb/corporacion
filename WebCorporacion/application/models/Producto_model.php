<?php
class Producto_model extends CI_Model {
	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();
		//test down
	}
	
	function get_ultimas_ofertas(){
	
		//$this->db->select('*');
		//$this->db->from('m_product');
		//$this->db->where('is_ultimas_ofertas', 'Y' );
	
	
		//$query = $this->db->get();
	
		$sql = "
		select
		pprice.cdt_puntos,
			
		pro.m_product_id,
			
		to_char(pprice.cdt_fecha, 'YYYY') yy,
		to_char(pprice.cdt_fecha, 'DD') dd,
		to_char(pprice.cdt_fecha, 'MM') mm,
		to_char(pprice.cdt_fecha, 'HH24') hh,
			
		mone.cursymbol moneda,
 concat('https://www.corporacionderepuestos.com/public/imagenes/thumb2/',pro.sku,'.jpg')  as url_image,
pro.name,
			
		to_char(pprice.pricelist, '9999.99') mayor,
		to_char(pprice.pricestd, '9999.99') menor,
			
		pprice.pricestd as descuento,
         mp.name as marca_producto,
		pro.sku	,
        pro.value
			
		from
		adempiere.M_Product pro
		 left join  adempiere.M_ProductPrice pprice
		 on (pro.M_Product_ID=pprice.M_Product_ID)
		left join adempiere.M_PriceList_Version pricev
		on (pprice.M_PriceList_Version_ID=pricev.M_PriceList_Version_ID)
		left join adempiere.M_PriceList_Version lversion
		on (pricev.M_PriceList_Version_ID=1000000)
		left join adempiere.M_PriceList lista
		on (lversion.M_PriceList_ID=lista.M_PriceList_ID)
		left join adempiere.C_Currency mone
		on (lista.C_Currency_ID=mone.C_Currency_ID)

        inner join adempiere.mas_marca  mp on mp.mas_marca_id=pro.mas_marca_id	
		where
		pro.isactive='Y' and
		pro.is_ultimas_ofertas='Y'
		and
		pricev.M_PriceList_Version_ID=1000000
		and
		lista.M_PriceList_ID=1000026
        and
        length(pro.url_image) > 0  ";
	
		$query = $this->db->query($sql);
	
		return $query->result();
	
	}
	
	/**
	 Retorna los productos de una categoria
	 */
	function getProducts($m_product_category_id,$estado,$is_filtro){
	
	
		$condicion = "";
		if($is_filtro){
	
			switch($estado) {
				case 0:
					$condicion = "and is_masvendidos='Y'";
					break;
				case 1:
					$condicion = "and is_especial='Y'";
					break;
				case 2:
					$condicion = "and is_tendencia='Y'";
					break;
				case 3:
					$condicion = "and is_masvistos='Y'";
					break;
				case 4:
					$condicion = "and is_masvistos='Y'";
					break;
				case 5:
					$condicion = "and is_recienllegados='Y'";
					break;
				default:
					$condicion = "and is_masvendidos='Y'";
			}
	
		}
	
	
	
		$sql = "
				SELECT
				pprice.cdt_puntos,
				pro.m_product_id,
				to_char(pprice.cdt_fecha, 'YYYY') yy,
				to_char(pprice.cdt_fecha, 'DD') dd,
				to_char(pprice.cdt_fecha, 'MM') mm,
				to_char(pprice.cdt_fecha, 'HH24') hh,
					
					
				mone.cursymbol moneda,
 concat('https://www.corporacionderepuestos.com/public/imagenes/thumb2/',pro.sku,'.jpg')  as url_image,
pro.name,
					
				to_char(pprice.pricelist, '9999.99') mayor,
				to_char(pprice.pricestd, '9999.99') menor,
					
				pprice.pricestd as descuento ,
					
				pro.description
				FROM
				adempiere.M_Product pro
				 left join  adempiere.M_ProductPrice pprice
				 on (pro.M_Product_ID=pprice.M_Product_ID)
				left join adempiere.M_PriceList_Version pricev
				on (pprice.M_PriceList_Version_ID=pricev.M_PriceList_Version_ID)
				left join adempiere.M_PriceList_Version lversion
				on (pricev.M_PriceList_Version_ID=1000000)
				left join adempiere.M_PriceList lista
				on (lversion.M_PriceList_ID=lista.M_PriceList_ID)
				left join adempiere.C_Currency mone
				on (lista.C_Currency_ID=mone.C_Currency_ID)
				where
				pro.isactive='Y' and
				pro.m_product_category_id=".$m_product_category_id."
				and
				pricev.M_PriceList_Version_ID=1000000
				and
				lista.M_PriceList_ID=1000026 ".$condicion;
	
		$query = $this->db->query($sql);
		
		//echo $this->db->last_query();
	
		return $query->result();
	
	}
	
	public function get_all_productos($limit , $offset){
		$sql = "
				SELECT
				pprice.cdt_puntos,
				pro.m_product_id,
				to_char(pprice.cdt_fecha, 'YYYY') yy,
				to_char(pprice.cdt_fecha, 'DD') dd,
				to_char(pprice.cdt_fecha, 'MM') mm,
				to_char(pprice.cdt_fecha, 'HH24') hh,
			
			
				mone.cursymbol moneda,
 concat('https://www.corporacionderepuestos.com/public/imagenes/thumb2/',pro.sku,'.jpg')  as url_image,
pro.name,
			
				to_char(pprice.pricelist, '9999.99') mayor,
				to_char(pprice.pricestd, '9999.99') menor,
			
				pprice.pricestd as descuento ,
			
				pro.description,
				
				 mp.name as marca_producto,
				mp.mas_marca_id
				FROM
				adempiere.M_Product pro
				 left join  adempiere.M_ProductPrice pprice
				 on (pro.M_Product_ID=pprice.M_Product_ID)
				left join adempiere.M_PriceList_Version pricev
				on (pprice.M_PriceList_Version_ID=pricev.M_PriceList_Version_ID)
				left join adempiere.M_PriceList_Version lversion
				on (pricev.M_PriceList_Version_ID=1000000)
				left join adempiere.M_PriceList lista
				on (lversion.M_PriceList_ID=lista.M_PriceList_ID)
				left join adempiere.C_Currency mone
				on (lista.C_Currency_ID=mone.C_Currency_ID)
				
			     inner join adempiere.mas_marca  mp on mp.mas_marca_id=pro.mas_marca_id	
				where
				pro.isactive='Y'
				and
				pricev.M_PriceList_Version_ID=1000000
				and
				lista.M_PriceList_ID=1000026 
				limit ".$limit." offset ".$offset;
		
		$query = $this->db->query($sql);
		
		//echo $this->db->last_query();
		
		return $query->result();
	}
	
	
	public function get_all_productos_cuenta_total($idcategoria, $key_busqueda){
		$where ="";
		if(!empty($key_busqueda)){
			$where = 	" AND concat(pro.name,' ',pro.description,' ',pro.mas_desripcionweb,' ',mp.name) ILIKE ANY(regexp_split_to_array('".$this->db->escape_str($key_busqueda)."','[,]')::text[])	 ";
		
		}
		if(!empty($idcategoria)){
			$where.= " AND cp.m_product_category_id = ".$this->db->escape($idcategoria) ;
		}
		
		$sql = "
				SELECT
				  COUNT(pro.m_product_id) AS total_rows
				FROM
				adempiere.M_Product pro
				 left join  adempiere.M_ProductPrice pprice
				 on (pro.M_Product_ID=pprice.M_Product_ID)
				left join adempiere.M_PriceList_Version pricev
				on (pprice.M_PriceList_Version_ID=pricev.M_PriceList_Version_ID)
				left join adempiere.M_PriceList_Version lversion
				on (pricev.M_PriceList_Version_ID=1000000)
				left join adempiere.M_PriceList lista
				on (lversion.M_PriceList_ID=lista.M_PriceList_ID)
				left join adempiere.C_Currency mone
				on (lista.C_Currency_ID=mone.C_Currency_ID)
				inner join adempiere.m_product_category  cp on cp.m_product_category_id=pro.m_product_category_id
			    inner join adempiere.mas_marca  mp on mp.mas_marca_id=pro.mas_marca_id
					WHERE
				pro.isactive='Y'
				and
				pricev.M_PriceList_Version_ID=1000000
				and
				lista.M_PriceList_ID=1000026
                
                and length(pro.url_image) > 0 "
				.$where;
				
				/*--and
				--pricev.M_PriceList_Version_ID=1000000
				--and
				--lista.M_PriceList_ID=1000026 */
		//echo $sql;
		$query = $this->db->query($sql);
	  //echo $sql;
		
		return $query->row();
	}
	
	
	public function get_all_productos_filtro($idcategoria, $key_busqueda,$limit , $offset){
		$where ="";
		if(!empty($key_busqueda)){
		  $where = 	" AND concat(pro.name,' ',pro.description,' ',pro.mas_desripcionweb,' ',mp.name) ILIKE ANY(regexp_split_to_array('".$this->db->escape_str($key_busqueda)."','[,]')::text[])	 ";
		  		
		}
		if(!empty($idcategoria)){
			$where.= " AND cp.m_product_category_id = ".$this->db->escape($idcategoria) ; 
		}
		
		$sql = "
				SELECT
				pprice.cdt_puntos,
				pro.m_product_id,
				to_char(pprice.cdt_fecha, 'YYYY') yy,
				to_char(pprice.cdt_fecha, 'DD') dd,
				to_char(pprice.cdt_fecha, 'MM') mm,
				to_char(pprice.cdt_fecha, 'HH24') hh,
		
		
				mone.cursymbol moneda,
                 concat('https://www.corporacionderepuestos.com/public/imagenes/thumb2/',pro.sku,'.jpg')  as url_image,
                pro.name,
		
				to_char(pprice.pricelist, '9999.99') mayor,
				to_char(pprice.pricestd, '9999.99') menor,
		
				pprice.pricestd as descuento ,
		
				pro.description,
	
				 mp.name as marca_producto,
				mp.mas_marca_id,
				cp.name as categoria_producto,
				cp.m_product_category_id as id_categoria,
                pro.sku, 
                pro.value
				
				FROM
				adempiere.M_Product pro
				 left join  adempiere.M_ProductPrice pprice
				 on (pro.M_Product_ID=pprice.M_Product_ID)
				left join adempiere.M_PriceList_Version pricev
				on (pprice.M_PriceList_Version_ID=pricev.M_PriceList_Version_ID)
				left join adempiere.M_PriceList_Version lversion
				on (pricev.M_PriceList_Version_ID=1000000)
				left join adempiere.M_PriceList lista
				on (lversion.M_PriceList_ID=lista.M_PriceList_ID)
				left join adempiere.C_Currency mone
				on (lista.C_Currency_ID=mone.C_Currency_ID)
	
			     inner join adempiere.mas_marca  mp on mp.mas_marca_id=pro.mas_marca_id
				inner join adempiere.m_product_category  cp on cp.m_product_category_id=pro.m_product_category_id
				
				WHERE
				pro.isactive='Y' and
				pro.ad_org_id=0
				and
				pricev.M_PriceList_Version_ID=1000000
				and
				lista.M_PriceList_ID=1000026
                and length(pro.url_image) > 0    
				".$where." 
				limit ".$limit." offset ".$offset;
	
		$query = $this->db->query($sql);
	/* id_categoria
	 *           --and
				--pricev.M_PriceList_Version_ID=1000000
				--and
				--lista.M_PriceList_ID=1000026
	 * */
		//echo $this->db->last_query();
	
		return $query->result();
	}
	
	function getProduct($m_product_id){
	
	
	
	
		$sql = "select
              pprice.cdt_puntos,
              pro.m_product_id,
              pro.biz_formularioname bizform,
              to_char(pprice.cdt_fecha, 'YYYY') yy,
              to_char(pprice.cdt_fecha, 'DD') dd,
              to_char(pprice.cdt_fecha, 'MM') mm,
              to_char(pprice.cdt_fecha, 'HH24') hh,
	
              mone.cursymbol moneda,
 concat('https://www.corporacionderepuestos.com/public/imagenes/thumb2/',pro.sku,'.jpg')  as url_image,
pro.name,
	
              to_char(pprice.pricelist, '9999.99') mayor,
              to_char(pprice.pricestd, '9999.99') menor,
	
              pprice.pricestd as descuento ,
	
              pro.description,
	
              pro.m_product_category_id,
				 mp.name as marca_producto,
				mp.mas_marca_id,
             pro.sku,
 pro.value,
pro.mas_desripcionweb
            from
              adempiere.M_Product pro
              left join  adempiere.M_ProductPrice pprice
              on (pro.M_Product_ID=pprice.M_Product_ID)
              left join adempiere.M_PriceList_Version pricev
              on (pprice.M_PriceList_Version_ID=pricev.M_PriceList_Version_ID)
              left join adempiere.M_PriceList_Version lversion
              on (pricev.M_PriceList_Version_ID=1000000)
              left join adempiere.M_PriceList lista
              on (lversion.M_PriceList_ID=lista.M_PriceList_ID)
              left join adempiere.C_Currency mone
              on (lista.C_Currency_ID=mone.C_Currency_ID)
				
			  inner join adempiere.mas_marca  mp on mp.mas_marca_id=pro.mas_marca_id	
            where
              pro.isactive='Y' and
              pro.m_product_id=".$m_product_id."
              and
              pricev.M_PriceList_Version_ID=1000000
              and
              lista.M_PriceList_ID=1000026
             ";
	/*
	  		 and
              pricev.M_PriceList_Version_ID=1000000
              and
              lista.M_PriceList_ID=1000026
	 */
		$query = $this->db->query($sql);
		//echo $this->db->last_query();
		return $query->row();
	
	}
	
	function get_mas_vendidos(){
	    
	    $sql = "
		select
		pprice.cdt_puntos,
	        
		pro.m_product_id,
	        
		mone.cursymbol moneda,
 concat('https://www.corporacionderepuestos.com/public/imagenes/thumb2/',pro.sku,'.jpg')  as url_image,
pro.name,
	        
		to_char(pprice.pricelist, '9999.99') mayor,
		to_char(pprice.pricestd, '9999.99') menor,
	        
		pprice.pricestd as descuento,
         mp.name as marca_producto,
		pro.sku	,
        pro.value
	        
		from
		adempiere.M_Product pro
		 left join  adempiere.M_ProductPrice pprice
		 on (pro.M_Product_ID=pprice.M_Product_ID)
		left join adempiere.M_PriceList_Version pricev
		on (pprice.M_PriceList_Version_ID=pricev.M_PriceList_Version_ID)
		left join adempiere.M_PriceList_Version lversion
		on (pricev.M_PriceList_Version_ID=1000000)
		left join adempiere.M_PriceList lista
		on (lversion.M_PriceList_ID=lista.M_PriceList_ID)
		left join adempiere.C_Currency mone
		on (lista.C_Currency_ID=mone.C_Currency_ID)
	        
        inner join adempiere.mas_marca  mp on mp.mas_marca_id=pro.mas_marca_id
		where
		pro.isactive='Y'
        and pro.is_masvendidos='Y'
		and
		pricev.M_PriceList_Version_ID=1000000
		and
		lista.M_PriceList_ID=1000026
        and
        length(pro.url_image) > 0  
         LIMIT 8   
        ";
	    
	    $query = $this->db->query($sql);
	    
	    return $query->result();
	    
	}
	
	
	function getShipping(){
		return $this->getProduct(1000024);
	}
	
	function get_Categorias(){
	
		$this->db->select('*');
		$this->db->from('m_product_category');
		$this->db->where('is_menu_vertical', 'Y' );
		//$this->db->where('is_mostrarbannerv', 'Y' );
	
		$this->db->where('isactive', 'Y' );
		$this->db->where('m_product_category_parent_id', null );
		$this->db->where('ad_client_id', '1000004' );
		$this->db->order_by('name asc');
	
		$query = $this->db->get();
	
		return $query->result();
	
	}
	
	function get_CategoriaProducto($id_product){
	
		$this->db->select('m_product_category_id');
		$this->db->from('m_product');
		$this->db->where('ad_client_id', '1000004' );
		$this->db->where('m_product_id', $id_product );
	
		$query = $this->db->get();
	
		return $query->row();
	
	}
	
	/**
	 DUPLICADO CON get_CategoriaPadre
	 */
	function get_CategoriaHijo($id_category){
	
		$this->db->select('name,m_product_category_id,m_product_category_parent_id');
		$this->db->from('m_product_category');
		$this->db->where('ad_client_id', '1000004' );
		$this->db->where('m_product_category_id', $id_category );
	
	
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->row();
	
	}
	
	/**
	 DUPLICADO CON get_CategoriaHijo
	 */
	function get_CategoriaPadre($id_category){
	
		$this->db->select('name,m_product_category_id,m_product_category_parent_id');
		$this->db->from('m_product_category');
		$this->db->where('ad_client_id', '1000004' );
		$this->db->where('m_product_category_id', $id_category );
	
	
		$query = $this->db->get();
	
		return $query->row();
	
	}
	
	function get_Subcategorias($m_product_category_parent_id){
	
		$this->db->select('name,m_product_category_id,m_product_category_parent_id');
		$this->db->from('m_product_category');
		$this->db->where('ad_client_id', '1000004' );
		$this->db->where('m_product_category_parent_id', $m_product_category_parent_id );
	
	
		$query = $this->db->get();
	
		return $query->result();
	
	}
	
	function get_NombreCategoria($id_category){
	
		$this->db->select('name');
		$this->db->from('m_product_category');
		$this->db->where('ad_client_id', '1000004' );
		$this->db->where('m_product_category_id', $id_category );
	
	
		$query = $this->db->get();
	
		return $query->row()->name;
	
	}
	
	function get_categoria_by_id($id_category){
	
		$this->db->select('name, m_product_category_id ');
		$this->db->from('m_product_category');
		$this->db->where('ad_client_id', '1000004' );
		$this->db->where('m_product_category_id', $id_category );
	
	
		$query = $this->db->get();
		
		return $query->row();
	
	}
	
	function getCategoryFromProduct($id_product){
	
		$this->db->select('*');
		$this->db->from('m_product_category');
		$this->db->where('is_menu_horizontal', 'Y' );
		//$this->db->where('m_product_category_id', null );
		$this->db->where('m_product_category_parent_id', $id );
		$this->db->where('ad_client_id', '1000004' );
	
		$query = $this->db->get();
	
		return $query->result();
	
	}
	
	function get_Categorias_Vertical($id){
	
		$this->db->select('*');
		$this->db->from('m_product_category');
		$this->db->where('isactive', 'Y' );
		$this->db->where('is_menu_vertical', 'Y' );
		$this->db->where('m_product_category_parent_id', $id );
		$this->db->where('ad_client_id', '1000004' );
	
		$query = $this->db->get();
	
		return $query->result();
	
	}
	
	function get_Categoria_Url_Baner($id){
	
		$this->db->select('url_bannerv');
		$this->db->from('m_product_category');
		$this->db->where('isactive', 'Y' );
		$this->db->where('is_mostrarbannerv', 'Y' );
		$this->db->where('m_product_category_id', $id );
		$this->db->where('ad_client_id', '1000004' );
	
		$query = $this->db->get();
	
		return $query->row_array();
	
	}
	
	// EN PRUEBA AUN NO SE USA
	function guardaPedido($data,$id_user){
	
	
		$this->db->select_max('cdt_order_id');
		$query = $this->db->get('cdt_order')->row_array();
		$c_order_id = $query['cdt_order_id'];
		$c_order_id++;
	
	
		$my_date = date("Y-m-d", time());
	
		$data = array(
				'cdt_order_id' => $c_order_id,
				'c_bpartner_id' => null,
				'ad_client_id' => '1000004',
				'ad_org_id' => 0,
				'createdby' => 100,
				'updatedby' => 100,
	
				'grandtotal' => 0,
				'm_product_id' => 1000022,
				'cdt_idfb' => '',
				'price'=> 0,
				'qty'=> 0,
				'description'=> 0,
				'cdt_puntos'=> 0,
				'processed' => 'N',
				 
		);
		
		$data_insert = array(
		    'cdt_order_id' => $c_order_id,
		    
		    'm_product_id' => $data['id'],  // id del producto seleccionado
		    'cdt_idfb' => $id_user,    //id del usuario del pedido
		    
		    //'pricelimit'=> $data['pricelimit'],
		    'pricestd'=> $data['price'],
		    'qty'=> $data['qty'],
		    'description'=> $data['name'],
		    'cdt_puntos'=>0,
		    //'url_image' => $data['url_image'],
		    //'cursymbol' => $data['cursymbol'],
		    
		    'c_bpartner_id' => $data['c_bpartner_id'],
		    'cdt_proveedornombre' => $data['prov_nombre'] ,
		    'cdt_proveedorruc' => $data['prov_ruc'],
		    'cdt_proveedordireccion' => $data['prov_dire'],
		    
		    'cdt_referidonombre' => $data['cdt_referidonombre'],
		    'cdt_referidocorreo' => $data['cdt_referidocorreo'],
		    'cdt_referidodni' => $data['cdt_referidodni'],
		    'cdt_idfb'=>$i,
		    'ad_org_id' => 0,
		    'createdby' => 100,
		    'updatedby' => 100,
		    'grandtotal' => 0,
		    'ad_client_id' => 0,
		    'processed' => 'N',
		    
		);
		
		$this->db->insert('cdt_order', $data_insert); 
		

	
	}
	
	/**
	TODO : Se usa para validar si existe en la cola
	*/
	function existeCola($cdt_order_id){
	
		 
		$this->db->where('cdt_order_id', $cdt_order_id);
	
		$this->db->from('cdt_emailprocess');
	
		return $this->db->count_all_results();
	
	}
	
	function generaCola($c_order_id){
	
		$this->db->select_max('cdt_emailprocess_id');
		$query = $this->db->get('cdt_emailprocess')->row_array();
		$cdt_emailprocess_id = $query['cdt_emailprocess_id'];
		$cdt_emailprocess_id++;
	
	
		$data = array(
				'cdt_emailprocess_id' => $cdt_emailprocess_id,
				'cdt_order_id' => $c_order_id,
				'ad_client_id' => '1000004',
				'ad_org_id' => 0,
				'createdby' => 100,
				'updatedby' => 100,
	
	
	
				'processed' => 'N',
				 
		);
		$this->db->insert('cdt_emailprocess', $data);
	
	
	}
	
	function borraProductoCarro($cdt_order_id,$m_product_id,$cdt_idfb){
	
		$this->db->delete('cdt_order', array('m_product_id' => $m_product_id,'cdt_idfb'=>$cdt_idfb , 'processed'=>'N'));
	
	}
	
	function agregaProducto($data,$cdt_idfb){
	
		/*$prods = $this->cuentaProducto( $data['m_product_id'] ,$cdt_idfb);
	*/
		/*if($prods==0){*/
			$this->db->select_max('cdt_order_id');
			$query = $this->db->get('cdt_order')->row_array();
			$c_order_id = $query['cdt_order_id'];
			$c_order_id++;
	
	
			//$my_date = date("Y-m-d", time());
	
			$data_insert = array(
					'cdt_order_id' => $c_order_id,
					 
					'm_product_id' => $data['m_product_id'],
			         'cdt_idfb' => $this->db->escape_str($cdt_idfb),
					//'price'=> $data['price'],
					'pricelimit'=> $data['pricelimit'],
					'pricestd'=> $data['pricestd'],
					'qty'=> $data['qty'],
					'description'=> $data['pro_name'],
					'cdt_puntos'=> ceil($data['cdt_puntos']),
					'url_image' => $data['url_image'],
					'cursymbol' => $data['cursymbol'],
	
					'c_bpartner_id' => $data['c_bpartner_id'],
					'cdt_proveedornombre' => $data['prov_nombre'] ,
					'cdt_proveedorruc' => $data['prov_ruc'],
					'cdt_proveedordireccion' => $data['prov_dire'],
	
					'cdt_referidonombre' => $data['cdt_referidonombre'],
					'cdt_referidocorreo' => $data['cdt_referidocorreo'],
					'cdt_referidodni' => $data['cdt_referidodni'],
	
					'ad_org_id' => 0,
					'createdby' => 100,
					'updatedby' => 100,
					'grandtotal' => 0,
					'ad_client_id' => '1000004',
					'processed' => 'N',
			         'cdt_order_pedido_id'=> $data['id_orden_pedido']
					 
			);
	
			$rs = $this->db->insert('cdt_order', $data_insert);
			if($rs){
			    return $c_order_id;
			}else{
			    return 0;
			}
	
		/*}else{
	
			$dataupd = array(
					'qty' => $data['qty'],
			);
	
			$this->db->where('m_product_id', $data['m_product_id']);
			$this->db->where('cdt_idfb', $cdt_idfb);
			$this->db->update('cdt_order', $dataupd);
	
		}*/
	
	
	}
	
	function updateItemCart($cdt_order_id,$qty,$cdt_idfb){
		$data = array(
				'qty' => $qty,
		);
	
		$this->db->where('cdt_order_id', $cdt_order_id);
		$this->db->where('cdt_idfb', $cdt_idfb);
		$this->db->where('processed', 'N');
		$this->db->update('cdt_order', $data);
	}
	
	function processItemCart($cdt_order_pedido_id){
		$data = array(
				'processed' => 'Y'
		    //,
				//'cdt_formapago' => $formapago,
				//'isshipto' => $shipping
		);
	
		//$this->db->where('cdt_order_id', $cdt_order_id);
		$this->db->where('cdt_order_pedido_id', $cdt_order_pedido_id);
		$this->db->where('processed', 'N');
	
		$this->db->update('cdt_order', $data);
	}
	
	function generaPedidoId($cdt_fbid){
		$this->db->select('cdt_order_pedido_id');
		$this->db->from('cdt_order');
		$this->db->where('cdt_idfb',$this->db->escape_str($cdt_fbid));
		$this->db->where('processed', 'N');
		$q = $this->db->get();
		
		$resQ = $q->result_array();
		$new_id = 0;
		if(count($resQ)>0){
			$max_id = $resQ[0]["cdt_order_pedido_id"];
			if(is_numeric($max_id)){
				$new_id = $max_id;
			}
		}else{
				$this->db->select_max('cdt_order_pedido_id');
				$res = $this->db->get('cdt_order');
				$max_id = 0;
				if ($res->num_rows() > 0)
				{
					$row = $res->result_array();
					$max_id = $row[0]['cdt_order_pedido_id'];
	
					if(!is_numeric($max_id) || $max_id == NULL){ $max_id = 0; }
				}
	
				//echo var_dump($max_id);
	
				$new_id = $max_id + 1;
			}
	
	/*		$data = array(
					'cdt_order_pedido_id' => $new_id
			);
	
			$this->db->where('cdt_idfb', $cdt_fbid);
			$this->db->where('processed', 'N');
	
			$this->db->update('cdt_order', $data);
	
			if($this->db->affected_rows() <= 0){
				$new_id = -1;
			}*/
	
		
	
		return $new_id;
	}
	
	function guardarProspecto($datos, $cdt_order_pedido_id){
		$res = false;
		try{
			$this->db->select('cdt_order_pedido_id');
			$this->db->from('biz_prospecto');
			$this->db->where('cdt_order_pedido_id', $cdt_order_pedido_id);
	
			$query = $this->db->get();
	
			$resQ = $query->result_array();
	
			if(count($resQ) <= 0){
				$res = false;
	
				$this->db->select_max('biz_prospecto_id');
				$query = $this->db->get('biz_prospecto')->row_array();
				$biz_prospecto_id = $query['biz_prospecto_id'];
				$biz_prospecto_id++;
	
				$datos["biz_prospecto_id"] = $biz_prospecto_id;
	
				$this->db->insert('biz_prospecto', $datos);
				if($this->db->affected_rows() > 0){
					$res = true;
				}
			}
		}
		catch(Exception $ex){
			$res = false;
		}
		return $res;
	}
	
	function actualizarProspecto($datos, $cdt_order_pedido_id){
		$res = false;
		try{
			$this->db->where('cdt_order_pedido_id', $cdt_order_pedido_id);
			$this->db->update('biz_prospecto', $datos);
	
			$res = true;
		}
		catch(Exception $ex){
			$res = false;
		}
		return $res;
	}
	
	
	function cuentaProducto($id_product,$cdt_idfb){
	
		$this->db->where('m_product_id', $id_product);
		$this->db->where('cdt_idfb', $cdt_idfb);
		$this->db->where('processed', 'N');
		$this->db->from('cdt_order');
	
		return $this->db->count_all_results();
	
	}
	
	
	
	
	function getQtyPedido($id_product,$cdt_idfb){
	
		$this->db->select('qty');
		$this->db->from('cdt_order');
		$this->db->where('isactive', 'Y' );
		$this->db->where('processed', 'N');
		$this->db->where('m_product_id', $id_product );
		$this->db->where('cdt_idfb', $cdt_idfb );
	
	
		$query = $this->db->get();
	
		return $query->row_array();
	
	}
	
	function getPedidoFromId($id_product,$cdt_idfb){
	
		$this->db->select('cdt_order_id');
		$this->db->from('cdt_order');
		$this->db->where('isactive', 'Y' );
		$this->db->where('processed', 'N');
		$this->db->where('m_product_id', $id_product );
		$this->db->where('cdt_idfb', $cdt_idfb );
	
	
		$query = $this->db->get();
	
		return $query->row_array();
	
	}
	
	function getCarrito($cdt_idfb){
	
	
		$this->db->select('*');
		$this->db->from('cdt_order');
	
		$this->db->where('isactive', 'Y' );
		$this->db->where('processed', 'N');
		$this->db->where('cdt_idfb', $cdt_idfb );
	
		$this->db->order_by('description asc');
	
		$query = $this->db->get();
	
		return $query->result();
	
	
	}
	
	
	function getPaises(){
	
		$this->db->select('c_country_id, countrycode, name');
		$this->db->from('c_country');
		$this->db->order_by('name');
		$this->db->where('isactive', 'Y' );
	
		$query = $this->db->get();
	
		return $query->result();
	
	}
	
	
	function getRegiones($c_country_id){
	
		$this->db->select("c_region_id, name");
		$this->db->from("c_region");
		$this->db->where('isactive', 'Y' );
		$this->db->where('c_country_id', $c_country_id );
		$this->db->order_by('name');
	
		$query = $this->db->get();
	
		return $query->result();
	
	}
	
	function getCiudades($c_country_id, $c_region_id){
		$this->db->select("c_city_id, name");
		$this->db->from("c_city");
		$this->db->where('isactive', 'Y' );
		$this->db->where('c_country_id', $c_country_id );
		$this->db->where('c_region_id', $c_region_id );
		$this->db->order_by('name');
	
		$query = $this->db->get();
	
		return $query->result();
	
	}
	
	
	function verificarUsuario($username, $email){
	
		$this->db->select("cdt_idfb");
		$this->db->from("ad_user");
		$this->db->where("name",$username);
		$this->db->or_where("email",$email);
	
		$query = $this->db->get();
	
		$res = $query->result();
	
		if($res && count($res) > 0){
			return false;
		}
		return true;
	}
	
	
}