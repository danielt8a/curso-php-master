<?php
    /* Hacer un programa que muestre todos los números entre dos números que nos lleguen por la URL ($_GET) */

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

if ($numero2 > $numero1) {
    for ($contador = $numero1; $contador <= $numero2; $contador++) {
        echo $contador . "<br>";
    } 
}else {
        echo "<h2>El valor de número 2 debe ser mayor que número 1</h2>";
    }

?>