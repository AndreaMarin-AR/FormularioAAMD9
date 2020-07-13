<!DOCTYPE html>
<html>
<head>
	<title>Ejemplos de funciones</title>
</head>
<body>


	<div align="center">
	<h1>Función Round()</h1>
Entre las funciones matemáticas de PHP se encuentra una que nos permite redondear un float(número en coma flotante o número con decimales) al valor entero más próximo. Se trata de la función round().

<h2>Son redondeados los siguientes números:</h2>
<h2>Ejemplo 1</h2>

<?php
echo (round(3.4)."<br>"); //3
echo (round(3.5)."<br>"); //4
echo (round(3.6)."<br>"); //4
echo (round(3.6,0)."<br>"); //4
echo (round(1.95583,2)."<br>"); //1.96
echo (round(1241757,-3)."<br>"); //1242000
echo (round(5.045,2)."<br>");  //5.05
echo (round(5.055,2)); //5.06
?>

<h2>Ejemplo 2</h2>
<?php
echo (round(9.5,0, PHP_ROUND_HALF_UP)."<br>"); //10
echo (round(9.5,0, PHP_ROUND_HALF_DOWN)."<br>"); //9
echo (round(9.5,0, PHP_ROUND_HALF_EVEN)."<br>"); //10
echo (round(9.5,0, PHP_ROUND_HALF_ODD)); //9
?>

<h2>Ejemplo 3</h2>
<?php
echo (round(1.55,1,PHP_ROUND_HALF_UP)."<br>"); //1.6
echo (round(1.54,1,PHP_ROUND_HALF_UP)."<br>"); //1.5
echo (round(-1.55,1,PHP_ROUND_HALF_UP)."<br>"); //-1.6
echo (round(-1.55,1,PHP_ROUND_HALF_UP)); //-1.5
?>

<br>

<h1>Función Floor()</h1>
Redondea funciones hacia abajo.
<h2>Son redondeados los siguientes números:</h2>

<h2>Ejemplo 1</h2>
<?php
echo(floor(4.3)."<br>"); //4
echo(floor(9.999)."<br>"); //9
echo(floor(-3.14)); //-4
?>

<h2>Ejemplo 2</h2>
<?php
echo(floor(6.8)."<br>"); //6
?>

<h2>Ejemplo 3</h2>
<?php
echo(floor(90000.7)."<br>"); //90000
?>


<h1>Función Ceil()</h1>
Redondea funciones hacia arriba.
<h2>Son redondeados los siguientes números:</h2>

<h2>Ejemplo 1</h2>
<?php
echo(ceil(4.3)."<br>"); //5
echo (ceil(9.999)."<br>"); //10
echo(ceil(-3.14)); //-3
?>

<h2>Ejemplo 2</h2>
<?php
echo(ceil(0.60)."<br>");
echo(ceil(0.40)."<br>");
echo(ceil(5)."<br>");
echo(ceil(5.1)."<br>");
echo(ceil(-5.1)."<br>");
echo(ceil(-5.9));
?>

<h2>Ejemplo 3</h2>
<?php
echo(ceil(7.51)."<br>"); //8
echo(ceil(7.49)."<br>"); //8 
echo(ceil(9.5)."<br>"); // 10
echo(ceil(-0.9)); //0
?>

<h1>Función Rand()</h1>
Genera números aleatorios.
<h2>Son los siguientes:</h2>

<h2>Ejemplo 1</h2>
<?php
$d=rand(1,700);
echo $d;
?>

<h2>Ejemplo 2</h2>
<?php
$d=mt_rand(1,500);
echo $d;
?>

<h2>Ejemplo 3</h2>
<?php
echo rand()."\n";
echo rand(). "\n";

echo rand(5,15);
?>

<h1>Función Strtoupper()</h1>
Convierte un string a mayúsculas.
<h2>Ejemplo 1</h2>
<h2>Convierte "andrea marin" a:</h2>

<?php
$cadena= "andrea marin";
$cadena_convertida= strtoupper($cadena); //la cadena convertida será 'ANDREA MARIN'
echo $cadena_convertida;
?>

<h2>Ejemplo 2</h2>
<h2>Convierte "we are never getting back together" a:</h2>

<?php
echo strtoupper("we are never getting back together");
?>

<h2>Ejemplo 3</h2>
<h2>Convierte "buscando a alaska" a:</h2>

<?php
echo strtoupper("buscando a alaska");
?>


<h1>Función Strtolower()</h1>
Convierte un string a minúsculas.
<h2>Ejemplo 1</h2>
<h2>Convierte "ARIANA GRANDE" a:</h2>

<?php
$cadena= "ARIANA GRANDE";
$cadena_convertida= strtolower($cadena); //la cadena convertida será 'ariana grande'
echo $cadena_convertida;
?>

<h2>Ejemplo 2</h2>
<h2>Convierte "VIVE EN UNA PIZZA DEBAJO DEL MAR" a:</h2>

<?php
echo strtolower("VIVE EN UNA PIZZA DEBAJO DEL MAR");
?>

<h2>Ejemplo 3</h2>
<h2>Convierte "AGUANAAGUANAAGUANA" a:</h2>

<?php
echo strtolower("AGUANAAGUANAAGUANA");
?>

<h1>Función Ucfirst()</h1>
Convierte a mayúsculas el primer cáracter de una cadena.
<h2>Ejemplo 1</h2>
<h2>Convierte "andrea marin" a:</h2>

<?php
$cadena= "andrea marin";
$cadena_convertida= ucfirst($cadena); //la cadena convertida será 'ANDREA MARIN'
echo $cadena_convertida;
?>

<h2>Ejemplo 2</h2>
<h2>Convierte "daydreamin'"a:</h2>

 <?php 

	echo ucfirst("daydreamin'");

	   ?>

<h2>Ejemplo 3</h2>
<h2>Convierte "kick buttowski" a:</h2>

 <?php 

	echo ucfirst("kick buttowski");

	   ?>


<h1>Función Ucwords()</h1>
Convierte en mayúscula al primer cáracter de cada palabra de la cadena

 <h2> Ejemplo 1: </h2>

	 <h2> Convierte "andrea alejandra" a: </h2>

	 <?php

	 $cadena = "andrea alejandra";
	 $cadena_convertida = ucwords($cadena);
	 echo "$cadena_convertida";
	  ?>

<h2>Ejemplo 2</h2>
<h2>Convierte "night changes'"a:</h2>

 <?php 

	echo ucwords("night changes");

	   ?>

<h2>Ejemplo 3</h2>
<h2>Convierte "party play" a:</h2>

 <?php 
	echo ucwords("party play");
	   ?>

<h1> Función Strlen()</h1>
Obtiene la longitud de una cadena de texto(Número de cáracteres que tiene la cadena)

<h2>Ejemplo 1</h2>
<h2>La cadena "all we need is love" tiene el siguiente número de letras:</h2>

<?php 
	 $cadena = "all we need is love";
	 $cadena_convertida = strlen($cadena);
	 echo "$cadena_convertida";
	  ?>

<h2>Ejemplo 2 </h2>
<h2>La cadena "quinientos cincuenta" tiene el siguiente número de letras:</h2>
<?php
echo strlen("quinientos cincuenta");
?>

<h2>Ejemplo 3 </h2>
<h2>La cadena "te amo" tiene el siguiente número de letras:</h2>
<?php
echo strlen("te amo");
?>

<h1>Función Var_dump()</h1>
Muestra el contenido y tipo de una variable o array.

<h2>Ejemplo 1</h2>
<h2>Muestra "las milecimas se vuelven horas" es:</h2>

 <?php 
	 $cadena = "las milecimas se vuelven horas";
	 var_dump($cadena);
	 echo "$cadena_convertida";
	  ?>

<h2>Ejemplo 2</h2>
<h2>Muestra:</h2>

<?php
$number= 678;
var_dump($number);
$cadena='cadena';
var_dump($cadena);
?>

<h2>Ejemplo 3</h2>
<h2> Muestra:</h2>

<?php
$team_futbol=array(array("Rooney", "Chicharito", "Doritos"), array("Perez"), array("Torres", "Marin", "Delgado"));
	var_dump($team_futbol);
	?>

<h1>Función Count()</h1>
Cuenta todos los elementos en un array o en un objeto.

<h2>Ejemplo 1</h2>
 <h2> Array "álbumes Ariana Grande": </h2>

	 <?php 
	 $albumes=array(
	 	"ariana grande"=>array("my everything","yours truly"),
	 	"dangerous woman"=>array("JERG","900")
	  );
	 echo "Numero de albumes:" . count($albumes);

	  ?>

<h2>Ejemplo 2</h2>
 <h2> Array "Aplicaciones": </h2>

	 <?php 
	 $apps=array(
	 	"app"=>array("telegram"),
	 	"app"=>array("instagram"),
	 	"app"=>array("whatssap"),
	 	"app"=>array("facebook")
	  );
	 echo "Numero de aplicaciones:" . count($apps);
	  ?>

<h2>Ejemplo 3</h2>
<h2> Array "telefonos"</h2>

  <?php 
	$phone=array(
	 	"apple"=>array("iphone"),
	 	"samsung"=>array("galaxy J2"),
	 	"motorola"=>array("e6 plus"),
	 	"xiaomi"=>array("8 pro")
	  );
	 echo "Numero de telefonos:" . count($phone);

	   ?>

<h1>Función Explode()</h1>
Convierte un string en array.


<h2>Ejemplo 1</h2>
<?php
$cadena="vente, dos, veinte, tres, veinte, seis";
$array=explode(",",$cadena);
echo "El número de elementos en el array es:" .count($array);
?>

<h2>Ejemplo 2</h2>
<?php
$pedido="pizza, pollo, papitas, refresco";
$array=explode(",",$pedido);
echo "El número de elementos en el array es:" .count($array);
?>

<h2>Ejemplo 1</h2>
<?php
$maquillaje="rimel, polvo, sombras, colores, labiales, pestañas, brillos, lapiz de cejas";
$array=explode(",",$maquillaje);
echo "El número de elementos en el array es:" .count($array);
?>

<h1>Función Implode()</h1>
Convierte un array en string.

<h2>Ejemplo 1</h2>
<?php
$array=array('apellido', 'email', 'telefono', 'dni');
$separado_por_comas=implode(",",$array);
echo "Se separo por comas:" .$separado_por_comas;
?>

<h2>Ejemplo 2</h2>
<?php
$array=array('ariana grande', 'dua lipa', 'the beatles', 'queen','rolling stones', 'harry styles', 'adele');
$separado_por_comas=implode(",",$array);
echo "Se separo por comas:" .$separado_por_comas;
?>

<h2>Ejemplo 3</h2>
<?php
$array=array('mama', 'papa', 'hermana', 'novio','abuela','tia','tio');
$separado_por_comas=implode(",",$array);
echo "se separo por comas:" .$separado_por_comas;
?>

<h4>Tarea realizada por Andrea Marín, C.I:30.090.989</h4>
</div>
</body>
</html>