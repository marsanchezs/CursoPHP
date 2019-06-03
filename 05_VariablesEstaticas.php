<!DOCTYPE html>
<html>
<head>
<title>Curso PHP</title>
<meta charset="utf-8">
</head>
<body>

<?php
    function incrementaVariable(){
    
    static $aux = 0;
    //Se ejecuta SOLO la primera vez que se llama a la funcion.
    //Cuando la funcion finaliza el valor de la variable se conserva.

    $aux++;
    echo $aux . "<br>";
}

incrementaVariable();
incrementaVariable();
incrementaVariable();
?>
	
</body>
</html>