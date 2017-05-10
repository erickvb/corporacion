<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Login</title>
</head>
<body>

<table border="1">
	<tr>
		<td>Nombre</td>
		<td>Apellidos</td>
		<td>Nick</td>
		<td>Avatar</td>
		<td>Editar</td>
	</tr>

<?php
foreach ($result->result() as $row)
{ echo "<tr>";
	
	echo "<td>".$row->nombre."</td>";
	echo "<td>".$row->apellidos."</td>";
	echo "<td>".$row->nick."</td>";
	echo "<td>".$row->avatar."</td>";
	echo "<td>".anchor("/usuario/editar/".$row->id_usuario,"Editar")."</td>";
echo "</tr>";
}


?>

<?=anchor("","Volver")?>
</table>
</body>
</html>