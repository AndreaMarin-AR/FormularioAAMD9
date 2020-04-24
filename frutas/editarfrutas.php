<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editando frutas</title>
	<link rel="stylesheet" type="text/css" href="polo.css">
</head>
<body>
<br>
<form action="FrutasControlador.php" method="post" name="frutas">
<table class="pp">
	<tr>
		<td>
			
		<td><strong>Editar frutas:</strong></td>
	</tr>
<tr>
	<td>Nombre:</td><td><input class="controls" type="text" name="nombre" id="nombre" placeholder="Ej:Manzana/Banana" title="Ingrese su nombre" value="<?=$data[1]?>"></td>
</tr>

<tr>
	<td>Sabor:</td><td><input class="controls" type="text" name="sabor" id="sabor" placeholder="Ej:Dulce/Amargo" title="Ingrese el sabor" value="<?=$data[2]?>"></td>
</tr>
<tr>
	<td>Color:</td><td><input class="controls" type="text" name="color" id="color" placeholder="Ej:Rojo/Amarillo" title="Ingrese el color" value="<?=$data[3]?>"></td>
</tr>
<tr>
	<td>Origen:</td><td><input class="controls" type="text" name="origen" id="origen" placeholder="Ej:AFRICA/OCENIA" title="Ingrese el origen" value="<?=$data[4]?>"></td>
</tr>


<tr>
	<td>
		<input class="botoms" type="hidden" name="id_frutas" value="<?=$data[0]?>">
		<input class="botoms"type="hidden" name="operacion" value="actualizar">
		<input class="botoms" type="submit" name="enviar" value="Enviar">	</td>
</tr>
</table>
</form>
</body>
</html>