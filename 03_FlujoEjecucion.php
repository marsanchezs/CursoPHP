<!DOCTYPE html>
<html>
<head>
<title>Curso PHP</title>
<meta charset="utf-8">
</head>
<body>



<?php
   echo "Primer mensaje <br>";

   //include("03_FlujoEjecucion_dameDatos.php");
   /* include: incluye el archivo y si no esta muestra un error y sigue ejecutandose. */

   echo "Segundo mensaje <br>";

   require("03_FlujoEjecucion_dameDatos.php");
   /* require: requiere el archivo y si no esta no ejecuta nada mas. */ 

   dameDatos(); //Invocacion de la funcion.
?>
	
</body>
</html>