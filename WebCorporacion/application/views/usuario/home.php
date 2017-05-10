<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Login</title>
</head>
<body>

<?=site_url('/usuario/login')?></br>
<?=base_url()?></br>
<?=base_url('/usuario/login')?></br>
<?=anchor()?>

<div>
Usuario LOGIN
<ul>
<li>
Nombre:<?=$nombre?>
</li>
<li>
apellidos:<?=$apellidos?>
</li>
<li>
nick:<?=$nick?>
</li>
<li>
</li>

</ul>
<?=anchor("/usuario/listarUsuarios","Listar Usuarios")?>

</div>

</body>
</html>