<?php
echo "<b>Primer ejemplo</b><br>"
$animal = " el lobo es uno de mis animales favoritos <br>";
echo "<b>Cadena original</b>: $animal";
/*el primer parametro (lobo) tiene que ser buscado para ser reemplazado como primer paso, el segundo parametro (zorro) es el caracter que debe reemplazar al original, y el tercer parametro (animal) es subjet, la cadena a ser reemplazada.*/
$resultado = str_replace("lobo", "zorro", "$animal");
echo "<b>cadena reemplazada</b>: $resultado <br>";
?>