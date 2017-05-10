
<section  id="jm-top-bar" class="">
<div class="container-fluid">
<div id="jm-top-bar-in" class="clearfix">
<div id="jm-logo-sitedesc" class="pull-left">
<div id="jm-logo">
<a href="http://templates.joomla-monster.comjm-dating/">
<img src="<?=base_url()?>public/jm-dating/images/logo.png" alt="jm dating" />
</a>
</div>
</div>
<div id="jm-top-bar-mod" class="pull-right ">
<div class="jm-module-raw  visible-desktop">
<div class="custom visible-desktop"  >
<p><a class="toggle-nav menu"><span class="icon-align-justify"></span></a></p></div></div>
<div class="jm-module-raw  visible-desktop">

<?php $curruser = $this->session->userdata('usuario'); 


if(!empty($curruser)){
?>

<ul class="nav menu">
	<li class="deeper parent"><a href=""  class="color"><?=$curruser->usuario?></a>
		<ul class="nav-child unstyled small">
			<li class=""><a href="<?=site_url('/user/profile')?>" >Mi cuenta</a></li>
			<li class=""><a href="" >Configuracion</a></li>
			<li class=""><a href="" >Ayuda</a></li>
			<li class=""><a href="<?=site_url('/logout')?>" >Salir</a></li>
		</ul>
	</li>
</ul>
<?php } else{?>

<ul class="nav menu">
	<li class="item-528"><a href="<?=site_url('/login')?>" >Login</a></li>
	<li class="item-668 deeper parent"><a href="jm-dating/meet" >See Ads</a>
		<ul class="nav-child unstyled small">
			<li class="item-673"><a href="jm-dating/meet-somebody/he-s-looking-for-her" >He's looking for Her</a></li>
			<li class="item-674"><a href="jm-dating/meet-somebody/she-s-looking-for-him" >She's looking for Him</a></li>
			<li class="item-675"><a href="jm-dating/meet-somebody/she-s-looking-for-her" >She's looking for Her</a></li>
			<li class="item-676"><a href="jm-dating/meet-somebody/he-s-looking-for-him" >He's looking for Him</a></li>
		</ul>
	</li>
	<li class="item-530"><a class="color" href="<?=site_url('/register')?>" >Join Us!</a></li>
</ul>
<?php } ?>


</div>
</div>

<div id="jm-top-menu-button" class="pull-right ">
<div class="jm-module-raw ">
<div id="dj-megamenu141mobileWrap"></div>
</div>
</div>
</div>
</div>
</section>
