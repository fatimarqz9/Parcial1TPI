<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes de la pelicula Shrek</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="ejercicio1.php" method="post">
        <h1>Personajes de Shrek</h1>

        <button name="todos" value="todos">Mostrar Todos</button>
        <button name="personajesPrincipales" value="personajesPrincipales">Personajes Principales</button>
        <button name="vilanos" value="villanos">Villanos</button>
        <button name="amigosShrek" value="amigosShrek">Amigos de Shrek</button>
        <button name="personajesSecun" value="personajesSecun">Personajes Secundarios</button>


        <?php
        
        $_personajes = [
            ["Nombre" => "", "Descripcion" => "", "Categoria" => "", "Imagen" => "img1.jpg"],
            ["Nombre" => "", "Descripcion" => "", "Categoria" => "", "Imagen" => "img2.jpg"],
            ["Nombre" => "", "Descripcion" => "", "Categoria" => "", "Imagen" => "img3.jpg"],
            ["Nombre" => "", "Descripcion" => "", "Categoria" => "", "Imagen" => "img4.jpg"],
            ["Nombre" => "", "Descripcion" => "", "Categoria" => "", "Imagen" => "img5.jpg"],

        ];

        ?>
    </form>
</body>
</html>