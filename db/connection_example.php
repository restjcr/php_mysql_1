<?php

    $servidor_db = '';
    $usuario_db = '';
    $password_db = '';
    $nombre_db = '';

    try{

        $conexion = new PDO("mysql:host=$servidor_db;dbname=$nombre_db",$usuario_db,$password_db);

        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        // echo "Conexion a la base de datos exitosa";

    }catch(PDOException $e){

        die("Error al conectar con la base de datos" . $e->getMessage());
    }

?>