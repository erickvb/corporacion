<!DOCTYPE html>
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if !IE]><!--><html><!--<![endif]-->
    <head>
    <? $this->load->view("layout/header");?>
    </head>
 	<body>
 	<div id="wrapper">
 	<? $this->load->view("layout/menu");?>
 	 <div class="mb30"></div><!-- margin -->
 	  
 	  <div class="main">
 	  	
		<? $this->load->view("pedido/exito_contenido");?>
 	  </div><!-- End .main -->
 	<? $this->load->view("layout/footer");?>
 	</div><!-- End #wrapper -->
 	</body>
</html>