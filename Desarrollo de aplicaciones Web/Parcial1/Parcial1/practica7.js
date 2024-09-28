
function validar(posicion){
    var cuadro = document.getElementById("cuadro" + posicion);
    if(cuadro.value != "x" && cuadro.value != "o"){
        console.log(cuadro.value + "--- No es un valor váido");
        cuadro.value = '';
        return;
    } else {
        console.log("prueba");
        var cuadro1 = document.getElementById("caudro1").value;
        var cuadro2 = document.getElementById("caudro2").value;
        var cuadro3 = document.getElementById("caudro3").value;
        var cuadro4 = document.getElementById("caudro4").value;
        var cuadro5 = document.getElementById("caudro5").value;
        var cuadro6 = document.getElementById("caudro6").value;
        var cuadro7 = document.getElementById("caudro7").value;
        var cuadro8 = document.getElementById("caudro8").value;
        var cuadro9 = document.getElementById("caudro9").value;

        switch(posicion){
            case 1:
                if (cuadro1 == cuadro2 && cuadro1 == cuadro3){
                    alert("GANADOR ---->"+ cuadro1)
                } else if(cuadro1 == cuadro5 && cuadro1 == cuadro9){
                    alert("GANADOR ---->"+ cuadro1)
                } else if(cuadro1 == cuadro4 && cuadro1 == cuadro7){
                    alert("GANADOR ---->"+ cuadro1)
                }
                break;
        }
    }
}