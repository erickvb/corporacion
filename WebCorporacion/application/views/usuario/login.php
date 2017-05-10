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
		<span > Login </span>
	
	</li>
</ul>

</div>
</div>

<div class="row-fluid">
<div id="jm-content" class="span9 offset3" data-xtablet="span12" data-tablet="span12" data-mobile="span12">
<div id="jm-maincontent"><div
class="login">
<div class="page-header"><h1>Login</h1> </div>

<?=form_open('/access/doLogin' ,array('class' => 'form-validate form-horizontal well', 'id' => 'frmLogin') )?>


<fieldset>

<div class="control-group">

<div class="control-label">
<label id="username-lbl" for="username" class="required">
Email o Username
<span class="star">&#160;*</span></label>
</div>

<div class="controls">
<input type="text" name="username" id="username" value="" class="validate-username required" size="25" required aria-required="true" autofocus />
</div>
</div>



<div class="control-group">
<div
class="control-label">
<label id="password-lbl" for="password" class="required">
Password<span
class="star">&#160;*</span></label></div><div
class="controls">
<input type="password" name="password" id="password" value="" class="validate-password required" size="25" maxlength="99" required aria-required="true" />
</div>
</div>
<!-- 
<div class="control-group">
<div class="control-label"><label>Remember me</label></div>

<div class="controls">
<input id="remember" type="checkbox" name="remember" class="inputbox" value="yes"/>
</div>
</div>
 -->
<div class="control-group">
<div class="controls">
<button type="submit" class="btn btn-primary">
Log in					</button></div></div>

</fieldset>

<?=form_close()?>

</div>

<div>
<ul class="nav nav-tabs nav-stacked"><li>
<a
href="jm-dating/user-profile?view=reset">
Forgot your password?</a></li><li>
<a
href="jm-dating/user-profile?view=remind">
Forgot your username?</a></li></ul></div></div></div>
<aside id="jm-left" class="span3 offset-12" data-xtablet="span12 first-span" data-tablet="span12 first-span" data-mobile="span12 first-span">
<div class="">

<div class="row-fluid">
<div class="span0">
<div class="jm-module ">
<div class="jm-module-in">
<div class="jm-title-wrap"><h3 class="jm-title "><span>J!</span> Other pages</h3></div><div
class="jm-module-content clearfix ">
<ul class="nav menu">
<li class="item-646">
<a href="jm-dating/contact" >Contact</a></li>
<li class="item-572 current active">
<a href="jm-dating/login-form" >Login</a></li>
<li class="item-649">
<a href="jm-dating/offline" >Offline</a></li>
<li class="item-573">
<a href="jm-dating/registration-form" >Registration</a></li><li
class="item-647"><a
href="jm-dating/search" >Search</a></li><li
class="item-589"><a
href="jm-dating/user-profile" >User Profile</a></li></ul></div></div></div></div></div></div>
</aside></div></div>
</section>

<!-- section localizacion top personaas-->

<!-- section red social-->

<? $this->load->view("layout/footer.php")?>
</div>
</div>
</body>
</html>