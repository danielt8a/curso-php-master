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

echo "<hr>";
/* DO WHILE
// La condición se evalúa al final. Es útil cuando necesitamos que algo se ejecute una vez.

do{
    //Bloque de instrucciones
}while(condicion); 
*/

$edad = 18;
$contador = 1;

do{
    echo "Tienes accceso al local privado $contador <br>";
} while($edad >= 18 && $contador <= 10);

/* Bucle For
Sintaxis
for (variable contador, condición, incremento contador){
    // Bloque de instrucción
}

*/

$resultado = 0;
for($i = 0; $i <= 100; $i++){
    $resultado += $i;
    echo "<p>$resultado</p>";
}

echo "<h1>El resultado es: $resultado</h1>";



?>


