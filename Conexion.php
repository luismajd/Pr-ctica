<?php
    //Conexión a DB
    class Conexion {
        public $conexion;

        function __construct()
        {
            try
            {
                $this->conexion = new PDO("mysql::host=localhost; dbname=web", "root", "");

                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conexion->exec("SET CHARACTER SET utf8");
            }
            catch(PDOException $e)
            {
                die("Error: " . $e->GetMessage());
            }
        }

        public function insertar($codigo, $nombre)
        {
            try
            {
                $consulta = "INSERT INTO PERSONA (codigo, nombre) 
                VALUES ($codigo, '$nombre')";

                $this->conexion->exec($consulta);
            }
            catch(PDOException $e)
            {
                die("Error: " . $e -> GetMessage());
            }
        }

        public function consultar()
        {
            $consulta = $this->conexion->prepare("SELECT * FROM PERSONA");
            $consulta->execute();

            $consulta->setFetchMode(PDO::FETCH_ASSOC);

            return $consulta->fetchAll();;
        }
    }
?>