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
    echo "<h3> 1. ¿Cuántas células componen nuestro cuerpo? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta1." ---- Correcta = 30 a 40 billones</h5>";
    if($pregunta1 == "30 a 40 billones"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.jpg' width='50px'><hr>";
    }

    //Valido pregunta 2 s una plataforma informática de lenguaje de programación creada por Sun Microsystems en 1995.
    echo "<h3> 2. es el orgánulo que se encarga de la respiración celular del cuerpo humano </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta2." ---- Correcta = mitocondria</h5>";
    if(strtoupper($pregunta2) == "mitocondria"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.jpg' width='50px'><hr>";
    }

    //Pregunta 3 - se deben validar 2 opciones sql y mongo
    echo "<h3> 3. ¿Cuántos sistemas forman el cuerpo humano? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta3." ---- Correcta = 9</h5>";
    if($pregunta3 == "9"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.jpg' width='50px'><hr>";
    }

    echo "<h3> 4. es el hueso más pequeño del cuerpo. </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta4." ---- Correcta = estribo</h5>";
    if(strtoupper($pregunta4) == "estribo"){
        $aciertos++;
    echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.jpg' width='50px'><hr>";
    }
    
    echo "<h3> 5. ¿Cuántos músculos tiene el cuerpo humano? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta5." ---- Correcta = 650 aprox</h5>";
    if($pregunta5 == "650 aprox"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    echo "<h3> 6. no tienen músculos ya que so controlados por tendones. </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta6." ---- Correcta = los dedos</h5>";
    if(strtoupper($pregunta6) == "los dedos"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.jpg' width='50px'><hr>";
    }

    echo "<h3> 7. Menciona 2 músculos que se encuentran en la cara(2 respuestas). </h3>";
    echo "<h5>Repuesta seleccionada ".implode(",", $pregunta7)." ---- Correcta = platisma, depresor</h5>";
    $p3_respuestas_correctas = 0;

    if(count($pregunta7) == 2){
        for($i=0; $i<count($pregunta7); $i++){
            if($pregunta7[$i] == "platisma" || $pregunta7[$i] == "depresor"){
                $p7_respuestas_correctas ++;
            }
        }
        if($p7_respuestas_correctas == 2){
            $aciertos++;
            echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
            echo "<img src='incorrecta.jpg' width='50px'><hr>";
    }
    }

    echo "<h3> 8. filtran hasta 190 litros de sangre al día </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta8." ---- Correcta = los riñones</h5>";
    if(strtoupper($pregunta8) == "los riñones"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.jpg' width='50px'><hr>";
    }

    echo "<h3> 9. ¿Cuáles son los grupos sanguíneos que existen?(2 respuestas). </h3>";
    echo "<h5>Repuesta seleccionada ".implode(",", $pregunta9)." ---- Correcta = AB y O, A y B acido</h5>";
    $p3_respuestas_correctas = 0;

    if(count($pregunta9) == 2){
        for($i=0; $i<count($pregunta9); $i++){
            if($pregunta9[$i] == "AB y O" || $pregunta9[$i] == "A y B"){
                $p9_respuestas_correctas ++;
            }
        }
        if($p9_respuestas_correctas == 2){
            $aciertos++;
            echo "<img src='correcta.jpg' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.jpg' width='50px'><hr>";
        }
    }

    echo "<h3> 10. ¿Cuántos vertebras tiene la columna? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta10." ---- Correcta = 33</h5>";
    if($pregunta10 == "33"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    echo "CALIFICACIÓN FINAl = " . ($aciertos * 10) . "%";

?>