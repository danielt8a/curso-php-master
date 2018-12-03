<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario en PHP</title>
</head>
<body>
    <h1>Formulario en PHP</h1>
    <form method="POST" action="recibir.php">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </p>
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
        </p>
        <p>
            <label for="correo">Correo</label>
            <input type="email" name="correo" pattern="usuario@dominio.com" placeholder="usuario@dominio.com">
        </p>

        <button name="button">Enviar</button>
        
    
    </form>
</body>
</html>