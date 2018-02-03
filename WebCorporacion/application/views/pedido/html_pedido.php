<!DOCTYPE html>
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if !IE]><!--><html><!--<![endif]-->
    <head>
   <title>Resumen pedido</title>
    </head>
 	<body>
 	<table  style="border-collapse: collapse; width: 90%">
 	<thead>
 	<tr >
 	<th colspan="6" style="text-align: left; padding: 8px;text-align: left;  border-bottom: 1px solid #ddd; background-color: #f2f2f2; ">
 	INFORMACI&Oacute;N DE PEDIDO WEB
 	</th>
 	</tr>
 	<tr >
 	<th colspan="6" style="text-align: left;">
 	Nro Pedido : <?=$info['id_pedido']?>
 	</th>
 	<tr >
 	<th colspan="6" style="text-align: left;">
 	Fecha : <?=date('Y-m-d')?>
 	</th>
 	</tr>
 	<tr >
 	<th colspan="6" style="text-align: left;">
 	Nombres : <?=$info['nombres']?>
 	</th>
 	</tr>
 	<tr >
 	<th colspan="6" style="text-align: left;">
 	Telefono : <?=$info['telefono']?>
 	</th>
 	</tr>
 	<tr >
 	<th colspan="6" style="text-align: left;">
 	Email : <?=$info['email']?>
 	</th>
 	</tr>
 	<tr>
 	<th  style=" padding: 8px;text-align: left;  border-bottom: 1px solid #ddd; background-color: #f2f2f2; text-align: center;">CODIGO</th>
 	<th  style=" padding: 8px;text-align: left;  border-bottom: 1px solid #ddd; background-color: #f2f2f2; text-align: center;">NOMBRE</th>
 	<th  style=" padding: 8px;text-align: left;  border-bottom: 1px solid #ddd; background-color: #f2f2f2; text-align: center;">IMAGEN</th>
 	<th  style=" padding: 8px;text-align: left;  border-bottom: 1px solid #ddd; background-color: #f2f2f2; text-align: center;">CANTIDAD</th>
 	<th  style=" padding: 8px;text-align: left;  border-bottom: 1px solid #ddd; background-color: #f2f2f2; text-align: center;">PRECIO</th>
 	<th  style=" padding: 8px;text-align: left;  border-bottom: 1px solid #ddd; background-color: #f2f2f2; text-align: center;">SUBTOTAL</th>
 	
 	</tr>
 	</thead>
 	<tbody>
 	
 	  <?php foreach ($lista_cart as $items){?>
 	  <tr>
 	   <td  style=" padding: 8px;text-align: left;  border-bottom: 1px solid #ddd;"> <?=$items["id"]?></td>
 	   <td  style=" padding: 8px;text-align: left;  border-bottom: 1px solid #ddd;"><?=$items["name"]?></td>
 	   <td  style=" padding: 8px;text-align: left;  border-bottom: 1px solid #ddd;">
 	   <img src="<?=$items['options']['imagen']?>" width="100"/></td>
 	   <td  style=" padding: 8px;text-align: left;  border-bottom: 1px solid #ddd; text-align: center;" ><?=$items["qty"]?></td>
 	   <td  style=" padding: 8px;text-align: left;  border-bottom: 1px solid #ddd; text-align: right;">S/ <?=$items["price"]?></td>
 	   <td  style=" padding: 8px;text-align: left;  border-bottom: 1px solid #ddd; text-align: right;">S/ <?=$this->cart->format_number($items['subtotal']); ?></td>
 	   
 	  </tr>	
 	<?php }?>
 	<tr>
 	
 	</tbody>
 	<tfoot>
 	<tr>
 	<td colspan="6" style="text-align: right;">
 	<strong>
 	TOTAL:  S/ <?=$this->cart->format_number($this->cart->total())?>
 	</strong>
 	</td>
 	</tr>
 	</tfoot>
 	</table>
 	
 	</body>
</html> 	
