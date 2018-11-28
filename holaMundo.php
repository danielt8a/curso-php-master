<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imprimir por pantalla - Master PHPh1</title>
</head>
<body>
    <h1>Master en PHP</h1>
    <?php
        // Esto es un comentario en PHP
        /*
        esto es un comentario multilínea
        */
        echo '<h3>Listado de videojuegos</h3>';
        //Se utiliza el punto para concatenar líneas de texto
        echo '<ul>'
                .'<li>GTA</li>'
                .'<li>Fifa</li>'
                .'<li>Mario Bros</li>'
                .'<li>Mario Bros</li>'
                ;
        echo '<h1>Variables</h1>';

        // Creando una variable, sintaxis $nombre_variable
        $mi_primera_variable = "Hola mundo desde una variable";

        echo '<h2>'.$mi_primera_variable.'</h2><br>';

        /* Tipos de datos 
        Entero (int / integer) = 99
        Coma flotante / decimales (float / double) = 3.45
        Cadenas (string) = "Soy un string"
        Boleano (bool) = true falso
        null
        Array (colección de datos)
        Objetos
        */

        $numero = 5;

        echo gettype($numero);
        echo "<br>";

        /* Restricciones en las variables
        No es recomendable utilizar -, palabras reservadas, caracteres como +,*,?, etc.
        
        */

        /* Debugear una variable */

        $mi_nombre = "Dámaso Daniel Télles Ochoa";
        var_dump($mi_nombre);

    ?>
    <h1>Constantes en php</h1>
    
    <?php
    // Una constante es un contenedor de información que no puede variar.
    //Sintaxis para declarar una constante
    define('nombre', 'Dámaso Daniel');
    define('web','www.damasodaniel.mx');

    //Forma de imprimir una constante en php
    echo nombre;
    echo '<br>';

    //Constantes predefinidas

    echo PHP_VERSION.'<br>';
    echo PHP_OS.'<br>';
    echo PHP_EXTENSION_DIR;



    ?>

    <!-- Forma corta de hacer un echo -->
    <br>
    <?= 'Aprendiendo el excelente lenguaje PHP' ?>

</body>
</html>

