<?php
extract($_REQUEST);
$data=unserialize($data);
?><!DOCTYPE html>
<html>
<head>
	<title>Lista de Frutas</title>
<script type="text/javascript">
	function eliminar(id) {
		if (confirm("Seguro desea eliminar el registro?")) {
			window.location="FrutasControlador.php?operacion=eliminar&id_frutas="+id;
		}
	}
</script>
</head>
<body>
<table align="center">
<a href="../inicio.php">Inicio</a>
<center><a href="FrutasControlador.php?operacion=registrar">Registrar</a></center>
	<tr><th>Nro</th><th>Nombre</th><th>Sabor</th><th>Color</th><th>Origen</th><th>Opciones</th></tr>
	<?php $num=1;
		for ($i=0; $i< $filas;$i++) {
			echo "<tr>";
	?>
<td><?=$num?></td>
	<?php for ($j=1;$j <$campos; $j++) { ?>
		<td><?=$data[$i][$j]?></td>
<?php } ?>
<td>
	<a href="FrutasControlador.php?operacion=modificar&id_frutas=<?=$data[$i][0]?>">Modificar</a>
	<a href="javascript:eliminar(<?=$data[$i][0]?>)">Eliminar</a>
</td>
<?php
	$num++;
	}	?>

</table>
</body>
</html>	