<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Calculadora en PHP</title>
    </head>
    <body>
        
        <form method="GET" action="calcular.php" >
            <fieldset>
                <legend>Calculadora</legend>
                <label for="numero1">Ingrese un número:
                    <input type="number" name="numero1">
                </label>
                <label for="numero2">Ingrese un número:
                    <input type="number" name="numero2">
                </label><br>
                <label for="operacion">Por favor seleccione una operación:</label>
                <select name="operaciones" id="operaciones">
                    <optgroup>
                        <option value="suma">Suma</option>
                        <option value="resta">Resta</option>
                        <option value="multiplicacion">multiplicación</option>
                        <option value="division">División</option>
                    </optgroup>
                </select>
                <br>
                <label for="resultado"> El resultado es:
                    <input type="text">
                </label>
                <input type="button" value="Enviar">
            </fieldset>
        </form>

        
        
    </body>
</html>