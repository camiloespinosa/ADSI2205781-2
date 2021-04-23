<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer codigo en PHP</title>
</head>
<body>
    <h1>Hola Mundo</h1>
    <h5>Bienvenidos</h5>

<?php

    $nombre = "Camilo Espinosa";
    $apellido = "Camila Azuero";
    $numeroUno = 1;
    $numeroDos = 2;
    $resultado = $numeroUno*$numeroDos;



    //echo $resultado."<br>";
    echo "Hola $nombre"."<br>";
    echo "Hola ".$apellido;
    echo "<h1>Texto en h1</h1>";


    $nombre = 100;

    //una funcion gettype
    echo gettype($nombre);

    if (gettype($nombre) == "integer") {
        echo "<br>La variable es un numero";
        # code...
    } else {
        echo "<br> No es un numero";
        # code...
    }
    
?>

</body>
</html>