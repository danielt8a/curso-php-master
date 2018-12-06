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
    if ($numero != 100) {
        echo ", ";
    }
    $numero++;
}

echo "<br>";

//Segundo ejemplo con while

if (isset($_GET['numero'])) {
    //Cambiar el tipo string a int
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";

$contador = 0;
while ($contador <= 10) {
    echo "$numero x $contador = " . ($numero * $contador) . "<br>";
    $contador++;
}


?>


