<?php
	include('clasefb.php');

	extract($_REQUEST);

	//echo $nombre."-".sabor."-".$color.....;
	$db=new clasefb();
	$con=$db->conectar();
	$sql="INSERT INTO datos_frutas VALUES(NULL,'".$nombre."','".$sabor."','".$color."','".$origen."')";
	$resultado=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="no.css">
</head>
<body>

	<?php if ($resultado) { 
	?>
	<b class="nono">Registro ingresado ---> <a href="inicio.php">Volver</a></b>
	<?php
	}else{
	?>
	<b>Registro no ingresado ---> <a href="inicio.php">Volver</a></b>
	<?php
	}
	?>
</body>
</html>