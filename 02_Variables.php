<!DOCTYPE html>
<html>
<head>
<title>Curso PHP</title>
<meta charset="utf-8">
</head>
<body>

<?php
    $nombre = "Juan"; //Variable en PHP.
    /*En PHP NO ES necesario 
    indicar tipo de dato*/
    $edad = 20;

    print "El nombre es: " . $nombre;
    //Para Concatenar en PHP se utiliza el .

    print "<br> El nombre es: $nombre <br>";
    //Tiene el mismo resultado que arriba.

    print 'El nombre es: $nombre <br>';
    /*Las '' escriben de forma literal,
    NO RENOCEN a $nombre como una variable
    adiferencia de las "" */

    echo $nombre, $edad; 
    //print NO PERMITE hacer esto.
    //print funcion. echo expresion.
?>
	
</body>
</html>