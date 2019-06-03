<!DOCTYPE html>
<html>
<head>
<title>Curso PHP</title>
<meta charset="utf-8">

<style type="text/css">
	.resaltar{
		color:#F00;
		font-weight:bold;
	}
</style>

</head>
<body>

<?php

	echo "<p class='resaltar'>Ejemplo de Frase</p><br>";

	echo '<p class="resaltar">Otro Ejemplo de Frase</p><br>';

	echo "<p class=\"resaltar\">Ejemplo de Frase</p><br>";
	//Escape de caracteres en un string.

	$nombre = "Juan";
	echo "Hola $nombre <br>"; //Reconoce variable $nombre.
	//Cocatena string con la variable.

	echo 'Hola $nombre <br>'; //NO reconoce variable.


	$var1 = "Casa";
	$var2 = "CASA";

	$res = strcmp($var1, $var2); 
	//Compara 2 strings. SE FIJA en mayusculas y minusculas.
	//Devuelve 1 si NO SON iguales.
	//Devuelve 0 SI SON iguales.

	//echo "El resultado de la funcion strcmp es: " . $res . " NO IGUALES<br>";

	if($res){
	//Si $res es TRUE = 1
		echo "Las variables para la funcion strcmp NO SON IGUALES <br>";
	} else{
	//Sino $res es FALSE = 0
		echo "Las variables para la funcion strcmp SON IGUALES <br>";
	}



	$res = strcasecmp($var1, $var2); 
	//Compara 2 strings. NO SE FIJA en mayusculas y minusculas.
	//Devuelve 1 si NO SON iguales.
	//Devuelve 0 SI SON iguales.

	//echo "El resultado de la funcion strcasecmp es: " . $res . " IGUALES";
  
  	if(!$res){
  	//Si !$res es FALSE = 0
		echo "Las variables para la funcion strcasecmp SON IGUALES";
	} else{
	//SINO !$res es TRUE = 1
		echo "Las variables para la funcion strcasecmp NO SON IGUALES";
	}
?>
	
</body>
</html>