<?php

    $aciertos = 0;
    $pregunta1 = $_POST["pregunta1"];
    $pregunta2 = $_POST["pregunta2"];
    $pregunta3 = $_POST["pregunta3"];
    $pregunta4 = $_POST["pregunta4"];
    $pregunta5 = $_POST["pregunta5"];
    $pregunta6 = $_POST["pregunta6"];
    $pregunta7 = $_POST["pregunta7"];
    $pregunta8 = $_POST["pregunta8"];
    $pregunta9 = $_POST["pregunta9"];
    $pregunta10 = $_POST["pregunt10"];

    //valida pregunta 1 1. ¿Lenguaje de programación que se utiliza para WEB?
    echo "<h3> ¿Lenguaje de programación que se utiliza para WEB? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta1." ---- Correcta = PHP</h5>";

    if($pregunta1 == "206"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    //Valido pregunta 2 s una plataforma informática de lenguaje de programación creada por Sun Microsystems en 1995.
    if(strtoupper($pregunta2) == "femur"){
        $aciertos++;
    }

    //Pregunta 3 - se deben validar 2 opciones sql y mongo
    $p3_respuestas_correctas = 0;

    if(count($pregunta3) == 2){
        for($i=0; $i<count($pregunta3); $i++){
            if($pregunta3[$i] == "Rojos" || $pregunta3[$i] == "Blancos"){
                $p3_respuestas_correctas ++;
            }
        }
        if($p3_respuestas_correctas == 2){
            $aciertos++;
        }
    }

    if(strtoupper($pregunta4) == "la piel"){
        $aciertos++;
    }
    
    if($pregunta5 == "360"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    if(strtoupper($pregunta6) == "los dedos"){
        $aciertos++;
    }

    $p3_respuestas_correctas = 0;

    if(count($pregunta7) == 2){
        for($i=0; $i<count($pregunta7); $i++){
            if($pregunta7[$i] == "platisma" || $pregunta7[$i] == "frontal"){
                $p7_respuestas_correctas ++;
            }
        }
        if($p7_respuestas_correctas == 2){
            $aciertos++;
        }
    }

    if(strtoupper($pregunta8) == "los riñones"){
        $aciertos++;
    }

    $p3_respuestas_correctas = 0;

    if(count($pregunta9) == 2){
        for($i=0; $i<count($pregunta9); $i++){
            if($pregunta9[$i] == "acido" || $pregunta9[$i] == "dulce"){
                $p9_respuestas_correctas ++;
            }
        }
        if($p9_respuestas_correctas == 2){
            $aciertos++;
        }
    }

    if($pregunta10 == "33"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    echo "CALIFICACIÓN FINAl = " . ($aciertos * 10) . "%";

?>