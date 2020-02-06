<!doctype html>

<html>

    <head>
        <meta charset="utf8">
        <title>Envío de formulario</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>

    <body>
        <?php

            echo "<h1>Envío de formulario</h1>";

            /*
            foreach($_POST as $key => $value)
            {
                echo "$key = $value <br>";
            }*/

            $nombre = $_POST["name"];
            $correo = $_POST["email"];
            $passw = $_POST["password"];
            $carrera = $_POST["carrera"];
            $genero = $_POST["genero"];
            $promedio = $_POST["promedio"];
            $fecha = $_POST["fecha"];
            $comentario = $_POST["comentario"];
            $boletin = $_POST["boletin"];

            try
            {
                $conexion = new PDO("mysql::host=localhost; dbname=web", "root", "");

                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion->exec("SET CHARACTER SET utf8");

                $consulta = "INSERT INTO ALUMNO (nombre, correo, passw, carrera, genero, promedio, fecha, comentario, boletin) 
                VALUES ('$nombre', '$correo', '$passw', '$carrera', '$genero', $promedio, '$fecha', '$comentario', $boletin)";

                $conexion->exec($consulta);

                echo "Datos recibidos con éxito.";
            }
            catch(PDOException $e)
            {
                die("Error: " . $e -> GetMessage());
            }
            finally
            {
                $base = null;
            }

        ?>
    </body>

</html>