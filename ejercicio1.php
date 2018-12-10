<?php
/* Crear dos variables "país" y "continente" y mostrar su valor por pantalla(imprimir) y
poner en un comentario que tipo de dato tienen */

// Contienen el tipo de dato string
$pais = "México";
$continente = "América";

echo "<h1>El país $pais está en $continente</h1>";

/* Escribir un script en PHP que nos muestre por pantalla todos los números pares que hay del 1 al 100 */

for ($contador = 1; $contador <= 100; $contador++){
    if(($contador % 2) == 0){
        echo "<h4>$contador</h4>";

    }

}

?>