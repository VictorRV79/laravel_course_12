<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>CRUD index page</h1>

<!--    Llamar las variables con php -->
    <h3><?php   echo $nombre;
            echo "<br>";
            echo $edad;
    ?></h3>
    <br>

<!--    Llamar las variables con blade -->
    <h2><p>Nombre: {{ $nombre }}</p>
    <p>Edad: {{ $edad }}</p></h2>


</body>
</html>