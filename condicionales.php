<?php
// CONDICIONALES
/* 
    if(condicion){
        instrucciones

    }else {
        otras instrucciones
    }

    //Operadores de comparación
    == Igual
    === Identico
    != diferente
    <> diferente
    !== no identico
    < Menor qué
    > Mayor qué
    <= Menor o igual qué
    >= mayor o igual qué

 */

$color = "rojo";

if ($color == "rojo") {
    echo "El color es rojo";
} else {
    echo "El color no es rojo";
}

//If anidados

$dia = 3;

/*
if ($dia == 1){
    echo "Es lunes";
} else {
    if($dia == 2){
        echo "Es martes";
    }else {
        if($dia == 3){
            echo "Es miércoles";
        }else {
            if ($dia == 4){
                echo "Es jueves";
            }else {
                if ($dia == 5){
                    echo "Es viernes";
                }
            }
        }
    }
}*/ 

// else if

if($dia == 1){
    echo "Lunes";
}elseif($dia == 2){
    echo "Martes";
}elseif($dia == 3){
    echo "Miércoles";
}elseif($dia == 4){
    echo "Jueves";
}elseif($dia == 5){
    echo "Viernes";
}else{
    echo "Es fin de semana";
}



?>

