<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<a href="FrutasControlador.php?operacion=inicio">Lista para frutas</a><br>
	<a href="../inicio.php">Inicio</a><br>
	<form action="FrutasControlador.php" method="post" name="frutas">
		
<table>
	<tr>
		<td colspan="2">Registro de frutas:</td>
	</tr>

	<tr>
		<td>Nombre:</td><td><input type="text" name="nombre" id="nombre" placeholder="Ej: Mango/Piña" title="Ingrese el nombre de la fruta"></td>
	</tr>

	<tr>
		<td>Sabor:</td><td><input type="text" name="sabor" id="sabor" placeholder="Ej: Dulce/Amargo" title="Ingrese el sabor"></td>
	</tr>

	<tr>
		<td>Color:</td><td><input type="text" name="color" id="color" placeholder="Ej: Rojo/Amarillo" title="Ingre el color"></td>
	</tr>

	<tr>
		<td>Origen</td><td><input type="text" name="origen" id="color" placeholder="Ej: Africa/Oceania" title="Ingrese el origen"></td>
	</tr>

	<tr>
		<td>
			<input type="hidden" name="operacion" value="guardar">
			<input type="submit" name="enviar" value="Enviar">
		</td>
	</tr>

</table>
</form>
</body>
</html> 