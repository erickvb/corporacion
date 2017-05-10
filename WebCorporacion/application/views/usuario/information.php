<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
<head>
<? $this->load->view("layout/header");?>
</head>
<body class=" fixed header-bg sticky-bar allpage-img off-canvas-right">

<div id="jm-allpage">
<div id="jm-allpage-in">

<? //ADD MOVIL?>

<!--TOP MENU-->
<? $this->load->view("layout/top-menu.php");?>
<!--FIN MENU TOP-->
<!--INICIO MENU-->
<? $this->load->view("layout/menu.php");?>
<!--FIN  MENU-->
<!--INICIO HEADER-->
<? //include("header-large.php");?>
<!-- fin header-->


<section id="jm-main">
<div class="container-fluid">

<div class="row-fluid">
<div id="jm-breadcrumbs" class="span12 ">

<ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
	<li class="active">You are here: &#160;</li>
	<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
		<a itemprop="item" href="jm-dating/" class="pathway">
		<span itemprop="name"> Home </span>
		</a>
		<span class="divider">
		<img src="<?=base_url()?>public/jm-dating/templates/jm-dating/images/system/arrow.png" alt="" /></span>
		 <meta itemprop="position" content="1" />
	</li>
	
	<li  class="active">
		<span > Register </span>
	
	</li>
</ul>

</div>
</div>

<div class="row-fluid">
<div id="jm-content" class="span9 offset3" data-xtablet="span12" data-tablet="span12" data-mobile="span12">
<div id="jm-maincontent"><div
class="login">
<div class="page-header"><h1>Mi informaci&oacute;n</h1> </div>

<?=form_open('/user/updateInformation',array('class' => 'form-validate form-horizontal well', 'id' => 'frmProfileEdit'))?>
<fieldset>
<div class="control-group">
	<div class="control-label">
	<label id="cboPais-lbl" for="cboPais" class="required">
	Nacionalidad 
	<span class="star">&#160;*</span></label>
	</div>
	<div class="controls">
 	<select name="cboNacionalidad" id="">
	<option value="peru">Peru</option>
	<option value="peru">Colombia</option>
	</select>
 	</div>
</div>

<div class="control-group">
	<div class="control-label">
		<label id="detalle-lbl" for="detalle" class="required">
			Ubicaci&oacute;n <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
	 <select name="cboPais" id="">
		<option value="peru">Peru</option>
		<option value="peru">Colombia</option>
		</select>
	</div>
</div>

<div class="control-group">
	<div class="control-label">
		<label id="cboCiudad-lbl" for="cboCiudad" class="required">
			Ciudad <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
	<select name="cboCiudad" id="">
<option value="lima">Lima</option>
<option value="peru">San martin</option>
</select> 
	</div>
</div>

<div class="control-group">
	<div class="control-label">
		<label id="peso-lbl" for="peso" class="required">
			 Provincia <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
	 <select name="cboProvincia" id="">
<option value="lima">Lima</option>
<option value="tarapoto">Tarapoto</option>
</select>
	</div>
</div>


<div class="control-group">
	<div class="control-label">
		<label id="contextura-lbl" for="contextura" class="required">
			 Distrito <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
		<select name="cboDistrito" id="">
<option value="miraflores">Peru</option>
<option value="tarapoto">tarapoto</option>
</select>
	</div>
</div>


<div class="control-group">
	<div class="control-label">
		<label id="nombre-lbl" for="nombre" class="required">
			 Nombres <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
		<input type="text" name="nombre" class="validate-presentacion required"  required aria-required="true" autofocus size="30"/>
	</div>
</div>


<div class="control-group">
	<div class="control-label">
		<label id="nombre-lbl" for="nombre" class="required">
			 Apellidos <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
		<input type="text" name="apellidos" class="validate-presentacion required"  required aria-required="true" autofocus size="30"/>
	</div>
</div>


<div class="control-group">
	<div class="control-label">
		<label id="bustolbl" for="busto" class="required">
			 Sexo <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
		Varon <input  type="radio" name="sexo" value="1"/> Mujer <input  type="radio" name="sexo" value="2"/>
	</div>
</div>


<div class="control-group">
	<div class="control-label">
		<label id="estatura-lbl" for="estatura" class="required">
			Nick <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
	<input type="text" name="nickApodo"  required aria-required="true" autofocus size="30"/>
	</div>
</div>

<div class="control-group">
	<div class="control-label">
		<label id="estatura-lbl" for="estatura" class="required">
			Email <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
	<input type="text" name="email"  required aria-required="true" autofocus size="30"/>
	</div>
</div>

<div class="control-group">
	<div class="control-label">
		<label id="estatura-lbl" for="estatura" class="required">
			Telefono personal <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
	<input type="text" name="telefono"  required aria-required="true" autofocus size="30"/>
	</div>
</div>



<div class="control-group">
	<div class="controls">
	<button type="submit" class="btn btn-primary">Guardar</button>
	<button type="submit" class="btn btn-primary">Cancelar</button>
	</div>
</div>
</fieldset>

<?=form_close()?>
</div>
</div>
</div>

<aside id="jm-left" class="span3 offset-12" data-xtablet="span12 first-span" data-tablet="span12 first-span" data-mobile="span12 first-span">

<div class="">

<div class="row-fluid">
	<div class="span0">
	<div class="jm-module ">
	<div class="jm-module-in">
	
	<div class="jm-title-wrap">
	 <h3 class="jm-title "><span>Mi cuenta</span></h3>
	</div>
	<div class="jm-module-content clearfix ">
		<ul class="nav menu">
			<li class="item-646 current active"><a href="<?=site_url('/user/information')?>" >Mi informaci&oacute;n</a></li>
			<li class="item-572 "><a href="<?=site_url('/user/profile')?>" >Mi perfil</a></li>
			<li class="item-573"><a href="jm-dating/registration-form" >Mis fotos</a></li>
			<li class="item-647"><a href="jm-dating/search" >Licencia</a></li>
			<li class="item-589"><a href="jm-dating/user-profile" >Seguridad</a></li>
		</ul>
	
	</div>
	</div>
	
	</div>
	</div>

</div>
</div>
</aside>

</div>
</div>
</section>

<!-- section localizacion top personaas-->

<!-- section red social-->


<script type="text/javascript">
   $(document).ready(function(){
	   
	 // initMain(); 
	 });
	 
	
	  
 </script>
<? $this->load->view("layout/footer.php")?>
</div>
</div>
</body>
</html>
