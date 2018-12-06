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

    ++ Operadores lógicos
    && AND
    ||  OR
    !   NOT
    and, or
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

if ($dia == 1) {
    echo "Lunes";
} elseif ($dia == 2) {
    echo "Martes";
} elseif ($dia == 3) {
    echo "Miércoles";
} elseif ($dia == 4) {
    echo "Jueves";
} elseif ($dia == 5) {
    echo "Viernes";
} else {
    echo "Es fin de semana";
}

// Operadores lógicos

$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;

if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
    echo "Está en edad de trabajar";
} else {
    echo "No puede trabajar";
}

//OR

$pais = "México";

if ($pais == "Mexico" || $pais == "España" || $pais == "Colombia") {
    echo "En este país se habla español";
} else {
    echo "En este país no se habla español";
}

// Switch

$dia = 4;

switch ($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    default:
        echo "Es fin de semana";

}

//GOTO
goto marca;
echo "<h3>Instrucción 1</h3>";
echo "<h3>Instrucción 2</h3>";
echo "<h3>Instrucción 3</h3>";
echo "<h3>Instrucción 4</h3>";

marca :
echo "<h1>Me he saltado 4 echos</h1>";



?>