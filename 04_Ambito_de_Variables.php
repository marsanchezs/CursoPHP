<!DOCTYPE html>
<html>
<head>
<title>Curso PHP</title>
<meta charset="utf-8">
</head>
<body>

<?php
    $nombre = "Juan";

    //include("04_Ambito_de_Variables_dameNombre.php");

    function dameNombre(){

    global $nombre; 
    //Convierte la variable $nombre = "Juan" en una variable Global.

    $nombre = "El nombre es: " . $nombre;
}
	dameNombre();
    echo $nombre;
?>
	
</body>
</html>