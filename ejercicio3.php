<?php
/* Ejercicio 3. Escribir un programa que imprima por pantalla los cuadrados de los 40 primeros números naturales.
PD: utilizar el bucle while
 */

$contador = 1;

while ($contador <= 40) {
    echo "El cuadrado de $contador es ". ($contador * $contador)." <br>";
    $contador++;
}

?>