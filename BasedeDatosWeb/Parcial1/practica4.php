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
    echo "<h3> 1. ¿Cuántos huesos tiene el cuerpo humano? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta1." ---- Correcta = 206</h5>";

    if($pregunta1 == "206"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    //Valido pregunta 2 s una plataforma informática de lenguaje de programación creada por Sun Microsystems en 1995.
    echo "<h3> 2. es el hueso más largo del cuerpo. </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta2." ---- Correcta = femur</h5>";

    if(strtoupper($pregunta2) == "femur"){
        $aciertos++;
    }

    //Pregunta 3 - se deben validar 2 opciones sql y mongo
    echo "<h3> 3. Tipos de glóbulos que existen en la sangre(2 respuestas). </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta3." ---- Correcta = Rojos && Blancos</h5>";

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

    echo "<h3> 4. es el órgano más grande del cuerpo. </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta4." ---- Correcta = la piel</h5>";

    if(strtoupper($pregunta4) == "la piel"){
        $aciertos++;
    }
    
    echo "<h3> 5. ¿Cuántos músculos tiene el cuerpo humano? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta5." ---- Correcta = 640</h5>";

    if($pregunta5 == "640"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    echo "<h3> 6. no tienen músculos ya que so controlados por tendones. </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta6." ---- Correcta = los dedos</h5>";

    if(strtoupper($pregunta6) == "los dedos"){
        $aciertos++;
    }

    echo "<h3> 7. Menciona los músculos que se encuentran en la cara(2 respuestas). </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta7." ---- Correcta = platisma && frontal</h5>";

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

    echo "<h3> 8. filtran hasta 190 litros de sangre al día </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta8." ---- Correcta = los riñones</h5>";

    if(strtoupper($pregunta8) == "los riñones"){
        $aciertos++;
    }

    echo "<h3> 9. Tipos de sabores que percibe la lengua humana(2 respuestas). </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta9." ---- Correcta = dulce && acido</h5>";

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