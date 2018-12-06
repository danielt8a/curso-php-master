<?php
/*Bucle While
// Estructura de control que itera o repite la ejecución de una serie de instrucciones tantas veces como 
//se necesario con base a una condición.

Estructura
while(condicion){
    bloque de instrucciones;
}

 */

$numero = 0;
while ($numero <= 100) {
    echo "$numero";
    if ($numero != 100){
        echo ", ";
    }
    $numero++;
}

?>

