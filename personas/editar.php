<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editando personas</title>
</head>
<body>
<br>
<form action="PersonasControlador.php" method="post" name="formulario">
<table>
	<tr>
		<td>
			
		<td colspan="2">Editar pesonas:</td>
	</tr>
<tr>
	<td>Nombres:</td><td><input type="text" name="names" id="names" placeholder="Ej:Martin José" title="Ingrese sus names" value="<?=$data[1]?>"></td>
</tr>

<tr>
	<td>Apellidos:</td><td><input type="text" name="surnames" id="surnames" placeholder="Ej:Perez Salcedo" title="Ingrese sus surnames" value="<?=$data[2]?>"></td>
</tr>
<tr>
	<td>Cedula:</td><td><input type="number" name="dni" id="dni" placeholder="Ej:12345678" title="Ingrese su dni" value="<?=$data[3]?>"></td>
</tr>
<tr>
	<td>
		<input type="hidden" name="id_persona" value="<?=$data[0]?>">
		<input type="hidden" name="operacion" value="actualizar">
		<input type="submit" name="enviar" value="Enviar">	</td>
</tr>
</table>
</form>
</body>
</html>