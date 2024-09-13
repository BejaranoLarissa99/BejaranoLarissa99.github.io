<?php

    $nombre = $_GET["nombre"];
    $edad = $_GET["edad"];
    $fecha_de_nacimeinto = $_GET["fecha_de_nacimiento"];
    $escuela = $_GET["escuela"];
    $estado_civil = $_GET["estado_civil"];

    if($edad > 18){
        echo "<h1>".$nombre." es mayor de edad</h1>";
    } else {
        echo "<h1>".$nombre." NO es mayor de edad</h1>";
    }
    
    echo "<h1>Nombre del Alumno: ".$nombre."</h1>";

    echo "<h2>Edad: ".$edad."</h2>";

    echo "<h2>Fecha de nacimiento: ".$fecha_de_nacimeinto."</h2>";

    echo "<h2>Escuela: ".$escuela."</h2>";

    echo "<h2>Estado civil: ".$estado_civil."</h2>";


?>