<!doctype html>

<?php
    include("Conexion.php")
?>

<html>

    <head>
        <meta charset="utf8">
        <!-- Información para el navegador -->
        <title>Registro</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>

    <body>
        <h1>Formulario: Por favor, ingrese sus datos</h1>

        <hr><br>

        <center>
            <div>
                <form action="createRegistro.php" method="POST">

                    <label for="codigo">Código:</label>
                    <input type="number" name="codigo" required><br><br>

                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" required><br><br>

                    <button type="submit">Enviar</button><br><br>

                </form>
            </div>

            <?php
                //Consulta de tabla
                $conexion = new Conexion();
                $info = $conexion->consultar();
            ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Nombre</th>
                </tr>
            <?php
                //var_dump($info);
                foreach($info as $row)
                {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['codigo'] . "</td>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "</tr>";
                }
            ?>
            </table>
        </center>
    </body>

</html>