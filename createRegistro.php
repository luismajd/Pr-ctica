<?php

    //Procesar información de formulario
    include("Conexion.php");

    //Instancia de conexión
    $conexion = new Conexion();

    //Recibir formulario
    if(!empty($_POST['codigo']) && !empty($_POST['nombre']))
    {
        $codigo = $_POST["codigo"];
        $nombre = $_POST["nombre"];

        //Insertar registro
        $conexion->insertar($codigo, $nombre);
    }

    //Redireccionamiento
    header('Location: registro.php')

?>