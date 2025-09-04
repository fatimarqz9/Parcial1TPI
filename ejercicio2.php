<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio2.php" method="post">
        <button name="metodo" value="celsius">Convertir a Celsius</button>
        <button name="metodo" value="fahrenheit">Convertir a Fahrenheit</button>


        <?php

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $metodo = $_POST["metodo"];

            if ($metodo === "celsius") {
        ?>
                <label for="Gcelsius">Ingrese los grados en celsius</label>
                <input type="text" name="Gcelsius" id="Gcelsius">

                <button type="button">Enviar</button>
            <?php

                $Gcelsius = $_POST["Gcelsius"];

                $conversionF = (($Gcelsius * (9 / 5)) + 32);

                echo "<h1>Resultado en Grados Fahrenheit: " . round($conversionF, 2) . "°</h1>";
            }


            if ($metodo === "fahrenheit") {
            ?>
                <label for="Gfah">Ingrese los grados en Fahrenheit</label>
                <input type="text" name="Gfah" id="Gfah">

                <button type="button">Enviar</button>
        <?php

                $Gfah = $_POST["Gfah"];

                $conversionC = ($Gfah - 32) * (5 / 9);

                echo "<h1>Resultado en Grados Celsius: " . round($conversionC, 2) . "°</h1>";
            }
        }

        ?>


    </form>
</body>

</html>