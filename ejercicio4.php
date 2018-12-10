<?php
/* Recoger dos números por la URL (Parámetros GET) y hacer todas las operaciones básicas de una calculadora 
(Suma, resta, multiplicación y división) de esos dos números.
 */

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

echo "La suma es: ".($numero1 + $numero2)."<br>";
echo "La resta es: ".($numero1 - $numero2)."<br>";
echo "La multiplicación es: ".($numero1 * $numero2)."<br>";
echo "La división es: ".($numero1 / $numero2)."<br>";

?>