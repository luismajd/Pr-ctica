<!DOCTYPE html>

<html>

<head>
        <meta charset="utf8">
        <!-- Información para el navegador -->
        <title>PHP</title>
</head>

<body>
    <h1>
        <?php

        echo "Hola mundo.";

        ?>
    </h1>
    <p>
        <?php

        echo "Prueba de <b>párrafo</b>.<br>";

        $var = "Cadena de prueba";

        echo "Variable: $var<br>";
        echo 'Variable: $var<br>';

        $x = 2.5;
        $y = 3;
        $z = $x + $y;

        echo "x + y = " . $z;
        var_dump($z);
        
        ?>
    </p>
    <p>
        <?php
            $arreglo = array("dato 1", "dato 2", "dato 3");
            //echo $arreglo[0]. "<br>";

            $arreglo[] = "dato 4"; //Agregar nuevo valor

            echo "<ol>";
            foreach($arreglo as $arr){
                echo "<li> $arr </li>";
            }
            echo "</ol>";

            $arreglo2 = ["dato 5", "dato 6", "dato 7"];
            echo "<ul>";
            foreach($arreglo2 as $arr){
                echo "<li> $arr </li>";
            }
            echo "</ul>";

            $diccionario = [
                "k1" => "v1",
                "k2" => "v2",
                "k3" => "v3"
            ];
            $diccionario += ["k4" => "v4"];
            echo "<ul>";
            foreach($diccionario as $key => $value){
                echo "<li> Llave: $key, Valor: $value </li>";
            }
            echo "</ul>";
        ?>
    </p>
</body>

</html>