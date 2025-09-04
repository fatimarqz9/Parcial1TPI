<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio2.php" method="post">
    <button name="metodo" name="celsius">Convertir a Celsius</button>
    <button name="metodo" name="fahrenheit">Convertir a Celsius</button>


    <?php
    
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $metodo = $_POST["metodo"];

        if($metodo == "celsius"){
            ?>
    <label for="Gcelsius">Ingrese los grados en celsius</label>
    <input type="text" name="Gcelsius" id="Gcelsius">

    <button type="button">Enviar</button>
<?php

            $Gcelsius = $_POST["Gcelsius"];

            $conversionF = ($Gcelsius *(9/5) + 32);

            echo "<h1>Resultado en Grados Fahrenheit: ". round($conversionF,2)."°</h1>";
        }
    }
    
    ?>


    </form>
</body>
</html>