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
<? $this->load->view('layout/footer');?>

<script type="text/javascript">
   $(document).ready(function(){
	   
	 // initMain(); 
	 });
	 
	
	  
 </script>
 <div>
 <h2>PROFILE</h2>
 <div>
 <?=site_url()?></br>
<?=site_url('/usuario/login')?></br>
<?=base_url()?></br>
<?=base_url('/usuario/login')?></br>

 <a href="#">mi cuenta</a><br/>
 <?=anchor("/usuario/information","Mi informacion")?><br/>
 <?=anchor("/usuario/profile","Mi pefil")?><br/>
 <?=anchor("/usuario/picture","Mi fotos")?><br/>
 <?=anchor("/usuario/license","Licencia")?><br/>
 <?=anchor("/usuario/security","Seguridad")?><br/>
 
 </div>
 
 </div>
</body>
</html>
