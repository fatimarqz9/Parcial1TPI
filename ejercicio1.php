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

        <button name="categoria" value="todos">Mostrar Todos</button>
        <button name="categoria" value="Personajes Principales">Personajes Principales</button>
        <button name="categoria" value="Villanos">Villanos</button>
        <button name="categoria" value="Amigos de Sherk">Amigos de Shrek</button>
        <button name="categoria" value="Personajes Secundarios">Personajes Secundarios</button>


        <?php

        $_personajes = [
            ["Nombre" => "Lord", "Descripcion" => "Principe villano", "Categoria" => "Villanos", "Imagen" => "img1.jpg"],
            ["Nombre" => "Bartender", "Descripcion" => "", "Categoria" => "Personajes Secundarios", "Imagen" => "img2.jpg"],
            ["Nombre" => "Shrek", "Descripcion" => "Personaje principal de la pelicula", "Categoria" => "Personajes Principales", "Imagen" => "img3.jpg"],
            ["Nombre" => "Burro", "Descripcion" => "Un burro que habla", "Categoria" => "Personajes Principales", "Imagen" => "img4.jpg"],
            ["Nombre" => "Galleta", "Descripcion" => "Galleta que ayuda a Sherk", "Categoria" => "Amigos de Sherk", "Imagen" => "img5.jpg"],

        ];

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $_categoria = $_POST["categoria"];

            if ($_categoria === "todos") {
                crearCard($_personajes);
            }
            

            $_arrayFiltrado = [];
        if($_categoria === "Villanos"){
            foreach ($_personajes as $personaje) {
                if ($personaje["Categoria"] === "Villanos") {
                    $_arrayFiltrado[] = $personaje;
                }
            }
            crearCard($_arrayFiltrado);
        }
        if($_categoria === "Personajes Principales"){
            foreach ($_personajes as $personaje) {
                if ($personaje["Categoria"] === "Personajes Principales") {
                    $_arrayFiltrado[] = $personaje;
                }
            }
            crearCard($_arrayFiltrado);
        }
        if($_categoria === "Personajes Secundarios"){
            foreach ($_personajes as $personaje) {
                if ($personaje["Categoria"] === "Personajes Secundarios") {
                    $_arrayFiltrado[] = $personaje;
                }
            }
            crearCard($_arrayFiltrado);
        }
        if($_categoria === "Amigos de Sherk"){
            foreach ($_personajes as $personaje) {
                if ($personaje["Categoria"] === "Amigos de Sherk") {
                    $_arrayFiltrado[] = $personaje;
                }
            }
            crearCard($_arrayFiltrado);
        }
        

    }
        function crearCard($_personajes)
        {
        ?>

            <div class="contenedor">
                <?php

                foreach ($_personajes as $personaje) {
                ?>
                    <div class="card">
                        <div class="imagen">
                            <img src="<?= $personaje["Imagen"] ?>" alt="<?= $personaje["Nombre"] ?>" style="width: 100px; height: auto;";>
                        </div>
                        <div class="informacion">
                            <p>Nombre: <?= $personaje["Nombre"] ?></p>
                            <p>Descripcion: <?= $personaje["Descripcion"] ?></p>
                            <p>Categoria: <?= $personaje["Categoria"] ?></p>
                        </div>
                    </div>

                <?php
                }

                ?>
            </div>

        <?php
        }
        ?>


    </form>
</body>

</html>