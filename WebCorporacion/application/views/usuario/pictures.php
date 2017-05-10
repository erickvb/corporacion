<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? $this->load->view('layout/header');?>
 
</head>
<body>
<? $this->load->view('layout/menu');?>
<div id="wrapper">
<? $this->load->view('layout/sidebar');?>
<div class="wait_operacion"></div>
<? //$this->load->view('template/ofertas');?>
<div class="wait_operacion"></div>
</div>
 <h2>MIS FOTOS</h2>

 <div>

<?=form_open('/usuario/login')?>
 <h3>FOTOS PUBLICOS</h3>

 <h3>FOTOS PRIVADOS</h3>

<input type="submit" value="Guardar" />
<input type="reset" value="Cancelar" />

<?=form_close()?>



 </div>
<? $this->load->view('layout/footer');?>

<script type="text/javascript">
   $(document).ready(function(){
	   
	 // initMain(); 
	 });
	 
	
	  
 </script> 
</body>
</html>
